var baseURL = "{{ URL::to('/') }}";
var input = document.getElementById('direccion');
jQuery(document).ready(function() {
	initMap();
});
$("#tipo_conv").change(function() 
{
  $('#conv').empty().select2({data:null});
  filtrarproblemas($(this).val());
  
});

$("#tipo_conv1").change(function() 
{
  $('#conv1').empty().select2({data:null});
  filtrarproblemas($(this).val());
  
});

$("#conv").change(function() 
{
  if($(this).val().length>0){
    filtrarproblemas($("#tipo_conv").val(),$(this).val());
  }

  
});
$("#conv1").change(function() 
{
  if($(this).val().length>0){
    filtrarproblemas($("#tipo_conv1").val(),$(this).val());
  }

  
});
var data=[]
function filtrarproblemas(id,array=null){
 
  data=[]
  c=0;
  problemas=[]
  for(j=0;j<convocatoria.length;j++){
    if(convocatoria[j].convocatorias && convocatoria[j].id==id){
        tipo=convocatoria[j].convocatorias;
        for(p=0;p<tipo.length;p++){
            if(tipo[p].problemas){
                if(p==0){
                  data.push({id:tipo[p].id,text:tipo[p].nombre});
                }
               
                if (array!=null){
                  console.log(tipo[p].id)
                  if (array.includes(String(tipo[p].id))){
                    pro=tipo[p].problemas
                    for(k=0;k<pro.length;k++){
                      info='<div class="">'
                      + '<b size="5" style="color:#fd972b">Descripción del problema:</b></br>'
                      + '<div class=".scrollable">'+pro[k].problema+'</div></br>'
                      +'<b size="5" style="color:#fd972b">Sector productivo</b></br>'
                      + '<div ">'+"</div></br>"
                      + '<a class="btn btn-primary"> Ver más </a>' 
                      +'</div>'
                        console.log(pro[k])
                        problemas.push([])
                        
                        problemas[c][0]=info;
                        problemas[c][1]=pro[k].latitud;
                        problemas[c][2]=pro[k].longitud;
                        c++;
                    }
                  }
                }
                else{
                 
                    pro=tipo[p].problemas
                   
                    for(k=0;k<pro.length;k++){
                      info='<div class="">'
                      + '<b size="5" style="color:#fd972b">Descripción del problema:</b></br>'
                      + '<div class=".scrollable">'+pro[k].problema+'</div></br>'
                      +'<b size="5" style="color:#fd972b">Sector productivo</b></br>'
                      + '<div ">'+"</div></br>"
                      + '<a class="btn btn-primary"> Ver más </a>' 
                      +'</div>'
                        console.log(pro[k])
                        problemas.push([])
                        problemas[c][0]=info;
                        problemas[c][1]=pro[k].latitud;
                        problemas[c][2]=pro[k].longitud;
                        problemas[c][3]=j;
                        c++;
                    }
                  
                }
            }
        }
    }
  }
  if(array ==null){
  $("#conv").select2({data: data}); 
  $("#conv1").select2({data: data}); 
  }
  removeProblemas();
  setProblemas();
}



function removeProblemas(){
  for (j = 0; j < size; j++) {  
    markers[j+i].setMap(null);
  }
  for (j = 0; j < size; j++) {
  markers.pop();
  }
  size=problemas.length;
}
function setProblemas(){
  for (j = 0; j < size; j++) {  
    var colormarcador;
    if (problemas[j][3]==0){
      colormarcador=$("#marker2").val();
    }
    if (problemas[j][3]==1){
      colormarcador=$("#marker").val();
    }
    if (problemas[j][3]==2){
      colormarcador=$("#marker3").val();
    }
    markers.push(new google.maps.Marker({
      position: new google.maps.LatLng(problemas[j][1], problemas[j][2]),
      map: map,
      icon: {
        url: colormarcador,
        
      }
    }));

    google.maps.event.addListener(markers[j+i], 'click', (function(markers, j) {
      return function() {
       
        infowindow.setContent(problemas[j][0]);
        
        infowindow.open(map, markers[i+j]);

      }
    })(markers, j));

    
};
}

var map, infowindow,marcador,i=0,markers,j=0,size=0; 
function initMap() {
        markers=[];
        map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        zoomControl: true,
        zoomControlOptions: {
          style: google.maps.ZoomControlStyle.SMALL,
          position: google.maps.ControlPosition.RIGHT_TOP
        },
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl:false,
        rotateControl: false,
        fullscreenControl: false,

        center: new google.maps.LatLng(-1.831239, -78.18340599999999),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        //disableDefaultUI: true,
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
       
      marcador=0;
     
      infowindow = new google.maps.InfoWindow({maxWidth: 550,
      });
      const input = document.getElementById("pac-input");
      const searchBox = new google.maps.places.SearchBox(input);
      var options = {
        types: ['(cities)'],
        componentRestrictions: {country: "ec"}
       };
      const autocomplete = new google.maps.places.Autocomplete(input,options);
      
      function setMapOnAll(map) {
        for (let i = 0; i < markerss.length; i++) {
          markerss[i].setMap(map);
        }
      }
      function clearmarkerss() {
        setMapOnAll(null);
      }
            
      for (i = 0; i < locations.length; i++) {  
        markers.push(new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map,
          icon: {
            url: $("#marker1").val()
            
          }
        }));
        
        google.maps.event.addListener(markers[i], 'click', (function(markers, i) {
          return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, markers[i]);
            marcador=i;
          }
        })(markers, i));
  
    };
   
    size=problemas.length;
    setProblemas();
    autocomplete.addListener('place_changed', setnewAddress);

		function setnewAddress() {
      map.zoom=15;
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
