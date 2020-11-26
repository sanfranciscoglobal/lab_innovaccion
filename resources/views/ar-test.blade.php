<!DOCTYPE html>
<html>
	<head>
		<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
		<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
		<script src="https://raw.githack.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
		<script src="https://raw.githack.com/AR-js-org/studio-backend/master/src/modules/marker/tools/gesture-detector.js"></script>
		<script src="https://raw.githack.com/AR-js-org/studio-backend/master/src/modules/marker/tools/gesture-handler.js"></script>

		{{-- location based --}}
		<script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
		<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
	</head>

	<body style="margin: 0; overflow: hidden">
		<a-scene
			vr-mode-ui="enabled: false;"
			loading-screen="enabled: false;"
			renderer="logarithmicDepthBuffer: true;"
			arjs="trackingMethod: best; sourceType: webcam; debugUIEnabled: false;"
			id="scene"
			embedded
			gesture-detector
		>
			<a-assets>
				<a-asset-item id="animated-asset" src="{{asset('AR/Chaly_dance_002.gltf')}}"></a-asset-item>
			</a-assets>

			<a-marker
				id="animated-marker"
				type="pattern"
				preset="custom"
				url="{{asset('AR/marker.patt')}}"
				raycaster="objects:.clickable"
				emitevents="true"
				cursor="fuse:false;rayOrigin:mouse;"
				id="markerA"
			>
				<a-entity
					id="bowser-model"
					scale="0.1 0.1 0.1"
					animation-mixer="loop: repeat"
					gltf-model="#animated-asset"
					class="clickable"
					gesture-handler
				></a-entity>
			</a-marker>

			<a-entity camera></a-entity>
		</a-scene>

		<!a-scene
				renderer="logarithmicDepthBuffer: true;"
				embedded
				loading-screen="enabled: false;"
				arjs="sourceType: webcam; debugUIEnabled: false;"
		>
			<a-assets>
				<a-asset-item
					id="animated-asset"
					src="{{asset('AR/Chaly_dance_002.gltf')}}"
				></a-asset-item>
			</a-assets>

			<a-entity
				look-at="[gps-camera]"
				animation-mixer="loop: repeat"
				gltf-model="#animated-asset"
				scale="0.1 0.1 0.1"
				gps-entity-place="latitude: -0.116913; longitude: -78.499079;"
			></a-entity>

			<a-camera gps-camera rotation-reader></a-camera>
		</a-scene>

		<a-scene
				renderer="logarithmicDepthBuffer: true;"
				embedded
				loading-screen="enabled: false;"
				arjs="sourceType: webcam; debugUIEnabled: false;"
		>
			<a-assets>
				<a-asset-item
					id="animated-asset"
					src="{{asset('AR/Chaly_dance_002.gltf')}}"
				></a-asset-item>
			</a-assets>

			<a-entity
				look-at="[gps-camera]"
				animation-mixer="loop: repeat"
				gltf-model="#animated-asset"
				scale="0.1 0.1 0.1"
				gps-entity-place="latitude: 0.40267; longitude: -78.1750884;"
			></a-entity>

			<a-camera gps-camera rotation-reader></a-camera>
		</a-scene>
	</body>
</html>
