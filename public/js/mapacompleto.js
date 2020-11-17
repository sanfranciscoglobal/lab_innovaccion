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
        disableDefaultUI: true,
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
       
      var marcador=0;
      var infowindow = new google.maps.InfoWindow();
      
      const input = document.getElementById("pac-input");
      const searchBox = new google.maps.places.SearchBox(input);
      var options = {
        types: ['(cities)'],
        componentRestrictions: {country: "ec"}
       };
      const autocomplete = new google.maps.places.Autocomplete(input,options);

     
     
      // Create the search box and link it to the UI element.
      /*
     
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
      // Bias the SearchBox results towards current map's viewport.
      map.addListener("bounds_changed", () => {
        searchBox.setBounds(map.getBounds());
      });
    */
      var marker=[], i;
      function cleanmarker(){
        
          marker[marcador].setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
        
      }
      function setMapOnAll(map) {
        for (let i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }
      function clearMarkers() {
        setMapOnAll(null);
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
            
            var html = '<b size="6" style="color:#4e2561"> Nombre institución  </b> <br/>' + locations[i][0] +
            '<br/><a id="ver" onclick="F()" style="color:orange">Ver más</a>'
            +'<div id="vermas" style="display:none" ><b size="6" style="color:#4e2561"> Iniciativa </b> <br/> <b size="6" style="color:red">'
          + locations[i][0]+'</b></br>Texto mas textoo </br> sfdfsdfs fsfdsfsdfsfdfsd <br/>'+
          '<a id="ver" onclick="F()" style="color:orange">url</a></br>'+
          '<div class="row"> <img class="d-inline-block mb-4 mt-2" src="http://127.0.0.1:8000/img/home/Gestion_Innovacion.png" alt="Icon" width="80">'+
           '<div style="color:black" class="row">dfds</div><div class="row">dfds</div></div>'
           +'<a class="btn btn-primary" href="#modal-signin" >Descargar datos</a>'
           + '<ul class="d-flex justify-content-space-around list-inline align-items-center ml-4 mb-0">'
           
       
           +'<li class="list-inline-item m-0"><a class="social-btn sb-outline sb-facebook sb-dark sb-sm mr-2 mr-md-3" href="#">'
           +'        <i class="fe-facebook"></i>'
           +'    </a></li>'
           +'<li class="list-inline-item m-0"><a class="social-btn sb-outline sb-twitter sb-dark sb-sm mr-2 mr-md-3" href="#">'
           +'        <i class="fe-twitter"></i>'
           +'    </a></li>'
           +'    </ul>'
          
           '</div>';
            
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
            marcador=i;
          }
        })(marker, i));
        /*google.maps.event.addListener(infowindow, 'domready', (function(marker, i) {
          
          $("#ver").click(function() {
            $("#vermas").show(2);
            $("#ver").hide(2);
          });
          //marker.setIcon('https://www.google.com/mapfiles/marker_yellow.png');
            
      })(marker, i));
    */
  
    };
   
    autocomplete.addListener('place_changed', setnewAddress);

		function setnewAddress() {
      var place = autocomplete.getPlace();
			console.log(place.formatted_address);
			var Latlng = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
      console.log(place.geometry);
      map.panTo(Latlng);
			
		}
    
      
}
for (i = 0; i < locations.length; i++) {  
$("#ver"+i).click(function() {
  $("#vermas"+i).show(2);
  $("#ver"+i).hide(2);
  alert(i)
});
}
function F(){
  $("#vermas").show(2);
  $("#ver").hide(2);
}