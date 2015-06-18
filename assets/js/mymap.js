// create a map in the "map" div, set the view to a given place and zoom
var map = L.map('map').setView([52.004713, 4.370334], 16);

// OpenStreetMap tile layer
// L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//     attribution: '&copy; <a href="//openstreetmap.org/copyright">OpenStreetMap</a> contributors'
// }).addTo(map);

// Stamen toner-lite tile layer
L.tileLayer('//stamen-tiles-{s}.a.ssl.fastly.net/toner/{z}/{x}/{y}.png', {
    // attribution: '&copy; <a href="//openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, under <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a>. Data by <a href="http://openstreetmap.org">OpenStreetMap</a>, under <a href="http://www.openstreetmap.org/copyright">ODbL</a>.'
}).addTo(map);

var marker = L.marker([52.004713,4.370334]).addTo(map);
marker.bindPopup("<b>Faculty of Architecture & the Built Environment<br>Julianalaan 134, 2628BL Delft</b><br>(our office (BG.WEST.010) is roughly where the arrow is, on the ground floor)").openPopup();

