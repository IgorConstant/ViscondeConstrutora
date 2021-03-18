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
        ['Torres dIcaraí', -23.182176, -47.319210, 'assets/images/map-marker.png'],
        ['Colégio Anglo', -23.181391, -47.318601, 'assets/images/icon-anglo.png'],
        ['Ezequiel do Valle Confecções', -23.181921, -47.316284, 'assets/images/icone-sacola.png'],
        ['Venda do Vazquez', -23.182119, -47.317042, 'assets/images/icone-mercado.png'],
        ['Mini Mercado Pereira Salto', -23.180451, -47.320460, 'assets/images/icone-mercado.png'],
        ['Padaria Encanto dos Doces', -23.180539, -47.318209, 'assets/images/icone-restaurante.png'],
        ['Loja Dia7 & PedTEC', -23.183632, -47.321121, 'assets/images/icone-sacola.png'],
        ['Cris França Calçados & Acessórios', -23.183587, -47.322795, 'assets/images/icone-sacola.png'],
        ['Danilo José dos Santos Minimercado-ME', -23.179645, -47.318691, 'assets/images/icone-mercado.png'],
        ['Murilão Lanches', -23.180132, -47.320814, 'assets/images/icone-restaurante.png'],
        ['Padaria Saltense', -23.181175, -47.318096, 'assets/images/icone-restaurante.png'],
        ['Jornal My Pet', -23.183309, -47.321881, 'assets/images/icone-sacola.png'],
        ['Casa do Norte - Terra Seca', -23.180358, -47.317172, 'assets/images/icone-restaurante.png'],
        ['Drograria Jardim dIcarai', -23.180453, -47.319827, 'assets/images/drugstore.png'],
        ['Posto Petrovia', -23.184519, -47.314469, 'assets/images/gasolina.png'],
        ['Pastel Dukkê Pastelaria&Açaí', -23.182300, -47.314559, 'assets/images/icone-restaurante.png'],
        ['Mirassol Lanches', -23.179576, -47.315802, 'assets/images/icone-restaurante.png'],
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