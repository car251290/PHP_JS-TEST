function initMap() {
    // Set the location of New York City
    var location = { lat: 40.7128, lng: -74.0060 };

    // Initialize the map
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: location
    });

    // Add a marker on the map
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
    // Initialize OpenStreetMap
    var map = L.map('map').setView([40.7128, -74.0060], 13); // New York City coordinates

    // Add the OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker to the map
    var marker = L.marker([40.7128, -74.0060]).addTo(map);
}