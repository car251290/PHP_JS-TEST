<?php 
// database configuration
$host ='localhost';
$db = new mysqli($host,'','','');
$username = '';
$password = '';

// connect to the database

$conn = new mysqli($host,'','','');

if ($conn->connect_error) {
    die(''. $conn->connect_error);
}

$sql = 'CREATE DATABASE IF NOT EXISTS map_db';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['name'];
    }
} else {
    echo 'Database created successfully';
}
?>