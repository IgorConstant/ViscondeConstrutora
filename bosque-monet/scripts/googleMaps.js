jQuery(function ($) {
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDmjkEri5pEh98mYRj8Jq9b4XqK3LoU_6w&sensor=true&callback=initialize";
    document.body.appendChild(script);
});

// Inicialização da Função
function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
        styles: [{
            "featureType": "poi",
            "stylers": [{
                "visibility": "off"
            }]
        }]
    };

    // Aparece o mapa na Div com a respectiva ID
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(45);

    // Variável Markers para Multiplos Pins no mapa
    var markers = [
        ['Bosque Monet', -23.2806547, -45.9497327, 'assets/images/map-marker.png'],
    ];



    // Aparece os Pins no Mapa sempre usando i como contador
    var infoWindow = new google.maps.InfoWindow(),
        marker, i;

    // Cria um loop para realizar a contagem dos mapas utilizando i
    for (i = 0; i < markers.length; i++) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0],
            icon: markers[i][3]
        });

        // Verifica se cada pin tem um box com informações.   
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        map.fitBounds(bounds);
    }


    // Ajustes de Zoom do mapa.
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
        this.setZoom(17);
        google.maps.event.removeListener(boundsListener);
    });

}