<?php

function flight_offers_form() {
    echo '<form id="flight_offers_request_form">';
    echo '<input type="hidden" name="action" value="get_flight_offers_action">';
    
    echo '<p>';
    echo 'Origin Location Code (required): ';
    echo '<input type="text" id="originLocationCode" name="originLocationCode" pattern="[A-Z]{3}" required>';
    echo '</p>';
    
    echo '<p>';
    echo 'Destination Location Code (required): ';
    echo '<input type="text" id="destinationLocationCode" name="destinationLocationCode" pattern="[A-Z]{3}" required>';
    echo '</p>';
    
    echo '<p>';    
    echo 'Departure Date (required): ';
    echo '<input type="date" id="departureDate" name="departureDate" required>';
    echo '</p>';
    
    echo '<p>';    
    echo 'Return Date: ';
    echo '<input type="date" id="returnDate" name="returnDate">';
    echo '</p>';    
    
    echo '<p>';
    echo 'No of Travelling Adults (required): ';
    echo '<input type="number" id="adults" name="adults" min="1" required>';
    echo '</p>';
    
    echo '<p><input type="submit" value="Search"></p>';
    echo '</form>';
    echo '<div id="response"></div>';
}