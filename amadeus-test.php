<?php
require 'vendor/autoload.php'; // Ensure this points to the correct path

use Amadeus\Amadeus;

$amadeus = Amadeus::builder("YOUR_API_KEY", "YOUR_API_SECRET")->build();

try {
    // Example: Fetch a list of flights from a specific origin to destination
    $response = $amadeus->shopping->flightOffersSearch->get([
        'originLocationCode' => 'JFK',
        'destinationLocationCode' => 'LAX',
        'departureDate' => '2024-10-01',
        'adults' => 1,
    ]);

    print_r($response->getResult());
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
