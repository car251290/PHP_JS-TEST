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

<form method="POST" action="index.php">
    <label for="name">Location Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="latitude">Latitude:</label>
    <input type="number" step="any" id="latitude" name="latitude" required>
    
    <label for="longitude">Longitude:</label>
    <input type="number" step="any" id="longitude" name="longitude" required>
    
    <button type="submit">Add Location</button>
</form>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="assets/script.js"></script>

<?php
// Including the map controller class
include('controllers/MapController.php');

// Create an instance of the MapController
$mapController = new MapController($argument); 
$map = $mapController->getMap();

// Instantiate the controller
$mapController = new MapController($argument);

// Check if a new location is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Add the new location using the controller
    $mapController->addNewLocation($name, $latitude, $longitude);
}
// Call the class method to render the map view
$mapController->renderMapView();

?>

</body>
</html>