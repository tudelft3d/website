// create a map in the "map" div, set the view to a given place and zoom
var map = L.map('map').setView([52.004713, 4.370334], 16);

// add an OpenStreetMap tile layer
L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="//openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var marker = L.marker([52.004713,4.370334]).addTo(map);
marker.bindPopup("<b>Faculty of Architecture & the Built Environment<br>Julianalaan 134, 2628BL Delft</b><br>(our office (BG.WEST.010) is roughly where the arrow is, on the ground floor)").openPopup();