var baseURL = "{{ URL::to('/') }}";
var input = document.getElementById('direccion');
jQuery(document).ready(function() {
	initMap();
});
function initMap() {
	var latCurrentPosition = -1.268749;
	var lonCurrentPosition = -78.626923;

	// navigator.geolocation.getCurrentPosition(function(position) {
	// 	latCurrentPosition = position.coords.latitude;
	// 	lonCurrentPosition = position.coords.longitude;
	// 	let Latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
	// 	map.panTo(Latlng);
	// 	marker.setPosition(Latlng);
	// 	infowindow.hideInfoWindow();
	// });

	// var latUsuario = user_lat != null ? user_lat : position.coords.latitude;
	// var lonUsuario = user_lng != null ? user_lng : position.coords.longitude;
	var latUsuario = user_lat != null ? user_lat : latCurrentPosition;
	var lonUsuario = user_lng != null ? user_lng : lonCurrentPosition;
	var zoom = 16;
	var dragMarker = true;
	var placeSearch, autocomplete;
	/*
			if (
					jQuery('#necesidad_lat').length > 0 &&
					jQuery('#necesidad_long').length > 0
			){
					latUsuario = jQuery('#necesidad_lat').val();
					lonUsuario = jQuery('#necesidad_long').val();
					zoom = zoom;
					dragMarker = false;
			}*/

	// var map;
	var marker;
	var myLatlng = new google.maps.LatLng(latUsuario, lonUsuario);
	var geocoder = new google.maps.Geocoder();
	var infowindow = new google.maps.InfoWindow();

	var options = {
		//types: ["locality", "political", "geocode"],
		//types: ['(cities)'],
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
		// icon: baseURL + '/images/markers/me_icon.png',
		// icon: {{asset('/images/markers/me_icon.png')}},
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
		//infowindow.setContent(place.formatted_address);
		//infowindow.hideInfoWindow();
		//infowindow.showInfoWindow();
		map.panTo(Latlng);
		jQuery('input[id="latitud"]').val(place.geometry.location.lat());
		jQuery('input[id="longitud"]').val(place.geometry.location.lng());
	}
}
