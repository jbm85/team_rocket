// Déclaration d'une variable globale pour map :
var map;

// Initialisation de la map :
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat:48.8575622, lng: 2.350473},
        zoom: 18
    });

    var geocoder = new google.maps.Geocoder();

    geocodeAddress(geocoder, map);
}

// Conversion de l'adresse postale en coordonnées GPS (Latitude, Longitude) :
function geocodeAddress(geocoder, resultsMap) {
    var address = document.getElementById('geocode_loc').innerText;

    geocoder.geocode({'address': address}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location
            });
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}