<?php
include('model/LocationModel.php');
/**
 * Controller class for the map view.
 */
class MapController {
    private $locationModel;

    public function __construct($db) {
        // Create an instance of the LocationModel
        $this->locationModel = new LocationModel($db);
    }

    public function renderMapView() {
        // Get all locations from the database
        $viewPath = 'views/MapView.php';
        $locations = $this->locationModel->getAllLocations();

        if (file_exists($viewPath)) {
            // Include the view file
            include($viewPath);
        } else {
            // Handle the error appropriately
            echo "Error: View file not found.";
        }
    }

    public function addNewLocation($name, $latitude, $longitude) {
        // Call the addLocation method in the LocationModel
        $this->locationModel->addLocation($name, $latitude, $longitude);
    }
    public function getMap() {

        // Implementation of getMap
        return "Map data";

    }
}


