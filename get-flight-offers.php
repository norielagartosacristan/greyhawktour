<?php

function get_flight_offers() {
  Requests::register_autoloader();
  
  // Get API credentials from options
  $options = get_option( 'amadeus_api_options' ); 
  $auth_data = array(
    'client_id'     => $options['api_key_text_field_0'],
    'client_secret' => $options['api_secret_text_field_1'],
    'grant_type'    => 'client_credentials',
  );
  
  $auth_url = 'https://test.api.amadeus.com/v1/security/oauth2/token';
  $headers = array('Content-Type' => 'application/x-www-form-urlencoded');

  try {
    // Get the access token
    $requests_response = Requests::post( $auth_url, $headers, $auth_data );
    $response_body = json_decode( $requests_response->body );
    
    // Check for errors in the response
    if ( property_exists( $response_body, 'error' ) ) {
      wp_send_json_error( array( 'message' => $response_body->error_description ), 400 );
    }
    
    $access_token = $response_body->access_token;

  } catch ( Exception $e ) {
    wp_send_json_error( array( 'message' => $e->getMessage() ), 500 );
  }

  // Proceed if we got the access token
  if ( isset( $access_token ) ) {
    $endpoint = 'https://test.api.amadeus.com/v2/shopping/flight-offers';
    $travel_data = array(
      'originLocationCode'      => sanitize_text_field( $_POST['originLocationCode'] ),
      'destinationLocationCode' => sanitize_text_field( $_POST['destinationLocationCode'] ),
      'departureDate'           => sanitize_text_field( $_POST['departureDate'] ),
      'adults'                  => (int) sanitize_text_field( $_POST['adults'] ), // Ensure this is a number
    );

    // Only add returnDate if it's provided
    if ( ! empty( $_POST['returnDate'] ) ) {
      $travel_data['returnDate'] = sanitize_text_field( $_POST['returnDate'] );
    }

    $params = http_build_query( $travel_data );
    $url = $endpoint . '?' . $params;

    $headers = array( 'Authorization' => 'Bearer ' . $access_token );
    $options = array( 'timeout' => 10 );

    try {
      // Make the flight offers request
      $requests_response = Requests::get( $url, $headers, $options );
      $response_body = json_decode( $requests_response->body );

      // Check for errors in the flight offers response
      if ( property_exists( $response_body, 'error' ) ) {
        wp_send_json_error( array( 'message' => $response_body->error_description ), 400 );
      }

      // Return the flight offers in a success response
      wp_send_json_success( $response_body );

    } catch ( Exception $e ) {
      wp_send_json_error( array( 'message' => $e->getMessage() ), 500 );
    }
  }

  wp_die(); // Always call wp_die() at the end of AJAX functions
}
