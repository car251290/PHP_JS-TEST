function initializeGoogleMap(location) {
    let map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: location
    });

    let marker = new google.maps.Marker({
        position: location,
        map: map
    });

    return marker;
}

function initializeOpenStreetMap() {
    let map = L.map('map').setView([40.7128, -74.0060], 13); // New York City coordinates

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    let marker = L.marker([40.7128, -74.0060]).addTo(map);
    marker.bindPopup('<b>New York City</b>').openPopup();

    return marker;
}

function iniMap() {
    let map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: { lat: 0, lng: 0 }
    });

    let location = { lat: 40.7128, lng: -74.0060 };

    location.forEach((location) => {
        let marker = new google.maps.Marker({
            position: location,
            map: map,
            title: location.name
        });

    });
}
// use of the location 
let location = { lat: 40.7128, lng: -74.0060 };
// call the initializeGoogleMap function
initializeGoogleMap(location);
// call the initializeOpenStreetMap function
initializeOpenStreetMap();
// call the iniMap function
iniMap();