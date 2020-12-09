var baseURL = "{{ URL::to('/') }}";
var input = document.getElementById('direccion');
jQuery(document).ready(function() {
	initMap();
});
function initMap() {

	var latCurrentPosition = -0.1626484;
	var lonCurrentPosition = -78.4606464;
  
// 	navigator.geolocation.getCurrentPosition(function(position) {
		var latUsuario = user_lat != -0.1626484 ? user_lat : latCurrentPosition;
		var lonUsuario = user_lng != -78.4606464 ? user_lng : lonCurrentPosition;


	var latUsuario = user_lat != null ? user_lat : latCurrentPosition;
	var lonUsuario = user_lng != null ? user_lng : lonCurrentPosition;
	var zoom = 16;
	var dragMarker = true;
	var placeSearch, autocomplete;
	var marker;
	var myLatlng = new google.maps.LatLng(latUsuario, lonUsuario);
	var geocoder = new google.maps.Geocoder();
	var infowindow = new google.maps.InfoWindow();

	var options = {
		componentRestrictions: { country: 'ec' },
	};
	var autocomplete = new google.maps.places.Autocomplete(input, options);

	map = new google.maps.Map(document.getElementById('map'), {
		center: myLatlng,
		zoom: zoom,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	});
	marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		draggable: dragMarker,
		animation: google.maps.Animation.DROP,
		title: 'Arrastre para seleccionar la ubicación',
	});
	geocoder.geocode({ latLng: myLatlng }, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			if (results[0]) {
				jQuery('input[id="latitud"],input[id="longitud"]').show();
				jQuery('input[id="direccion"]').val(results[0].formatted_address);
				jQuery('input[id="latitud"]').val(marker.getPosition().lat());
				jQuery('input[id="longitud"]').val(marker.getPosition().lng());
				infowindow.setContent(results[0].formatted_address);
				infowindow.open(map, marker);
			}
		}
	});

	google.maps.event.addListener(marker, 'dragend', function() {
		geocoder.geocode({ latLng: marker.getPosition() }, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				if (results[0]) {
					jQuery('input[id="direccion"]').val(results[0].formatted_address);
					jQuery('input[id="latitud"]').val(marker.getPosition().lat());
					jQuery('input[id="longitud"]').val(marker.getPosition().lng());
					infowindow.setContent(results[0].formatted_address);
					infowindow.open(map, marker);
				}
			}
		});
	});

	autocomplete.addListener('place_changed', setnewAddress);

	function setnewAddress() {
		var place = autocomplete.getPlace();
		console.log(place.formatted_address);
		var Latlng = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
		marker.setPosition(Latlng);
		infowindow.setContent(place.formatted_address);
		map.panTo(Latlng);
		jQuery('input[id="latitud"]').val(place.geometry.location.lat());
		jQuery('input[id="longitud"]').val(place.geometry.location.lng());
	}
}
