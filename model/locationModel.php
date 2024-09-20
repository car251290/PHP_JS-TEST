<?php
class LocationModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Method to get all locations
    public function getAllLocations() {
        $query = "SELECT * FROM locations";
        $result = $this->db->query($query);

        // Store the result in an array
        $locations = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $locations[] = $row;
            }
        }
        return $locations;
    }

    // Method to add a new location
    public function addLocation($name, $latitude, $longitude) {
        $stmt = $this->db->prepare("INSERT INTO locations (name, latitude, longitude) VALUES (?, ?, ?)");
        $stmt->bind_param("sdd", $name, $latitude, $longitude);
        $stmt->execute();
        $stmt->close();
    }
}


