var baseURL = "{{ URL::to('/') }}";
var input = document.getElementById('direccion');
jQuery(document).ready(function() {
	initMap();
});
var locations = [
    ['Bondi Beach', -33.890542, 151.274856, 4],
    ['Coogee Beach', -33.923036, 151.259052, 5],
    ['Cronulla Beach', -34.028249, 151.157507, 3],
    ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
    ['Maroubra Beach', -33.950198, 151.259302, 1]
  ];


function initMap() {
  
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: new google.maps.LatLng(-33.92, 151.25),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles : [
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#dadada"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#c9c9c9"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            }
          ]
                  });
       
     
      var infowindow = new google.maps.InfoWindow();
    
      var marker=[], i;
      function cleanmarker(){
        for (i = 0; i < locations.length; i++) {  
          marker[i].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
        }
      }
      for (i = 0; i < locations.length; i++) {  
        marker.push(new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map,
          icon: {
            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
          }
        })
        );
        
        google.maps.event.addListener(marker[i], 'click', (function(marker, i) {
          return function() {
            var html = '<b size="6" style="color:#4e2561"> Nombre institución  </b> <br/>' + locations[i][0] +'<br/><a href="#" style="color:orange">Ver más</a>';
           
            infowindow.setContent(html);
            infowindow.open(map, marker[i]);
            cleanmarker();
            marker[i].setIcon({
              url:"https://www.google.com/mapfiles/marker_green.png",
              fillColor: "#00F",
              scale: 5,
              fillOpacity: 0.7,
              strokeWeight: 0.4

            });
          }
        })(marker, i));
        /*google.maps.event.addListener(infowindow, 'domready', (function(marker, i) {
          
          marker.setIcon('https://www.google.com/mapfiles/marker_yellow.png');
            
      })(marker, i));
      */
  
    };
    
    
    
      
}
