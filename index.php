<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenStreetMap Integration</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <h1>OpenStreetMap Example</h1>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="assets/script.js"></script>

<?php
// Including the map controller class
include('controllers/MapController.php');

// Create an instance of the MapController
$mapController = new MapController();

// Call the function to display the map
$mapController->displayMap();
?>

</body>
</html>