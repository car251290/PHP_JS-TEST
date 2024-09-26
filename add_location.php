<form method="POST" action="index.php">
    <label for="name">Location Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="latitude">Latitude:</label>
    <input type="number" step="any" id="latitude" name="latitude" required>
    
    <label for="longitude">Longitude:</label>
    <input type="number" step="any" id="longitude" name="longitude" required>
    
    <button type="submit">Add Location</button>
</form>