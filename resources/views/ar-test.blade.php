<!DOCTYPE html>
<html>
	<head>
		{{-- <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script> --}}
		<script src="https://cdn.jsdelivr.net/gh/aframevr/aframe@1c2407b26c61958baa93967b5412487cd94b290b/dist/aframe-master.min.js"></script>
		{{-- <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script> --}}
		<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
		<script src="https://raw.githack.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
		<script src="https://raw.githack.com/AR-js-org/studio-backend/master/src/modules/marker/tools/gesture-detector.js"></script>
		<script src="https://raw.githack.com/AR-js-org/studio-backend/master/src/modules/marker/tools/gesture-handler.js"></script>

		{{-- location based --}}
		{{-- <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script> --}}
	</head>

	<body style="margin: 0; overflow: hidden">
		{{-- <a-scene
			vr-mode-ui="enabled: false;"
			loading-screen="enabled: false;"
			renderer="logarithmicDepthBuffer: true;"
			arjs="trackingMethod: best; sourceType: webcam; debugUIEnabled: false; videoTexture: true;"
			id="scene"
			embedded
			gesture-detector
		> --}}
			{{-- <a-assets>
				<a-asset-item id="animated-asset" src="{{asset('AR/Chaly_dance_002.gltf')}}"></a-asset-item>
			</a-assets> --}}

			<!--a-marker
				id="animated-marker"
				type="pattern"
				preset="custom"
				url="{asset('AR/marker.patt')}}"
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
			</a-marker-->

			{{-- <a-entity
				look-at="[gps-camera]"
				animation-mixer="loop: repeat"
				gltf-model="#animated-asset"
				scale="0.1 0.1 0.1"
				minDistance="1"
				maxDistance="10"
				gps-projected-entity-place="latitude: -0.1169952; longitude: -78.4992004;"
			></a-entity> --}}

			<!--a-entity
				look-at="[gps-camera]"
				animation-mixer="loop: repeat"
				gltf-model="#animated-asset"
				scale="0.1 0.1 0.1"
				gps-entity-place="latitude: 0.40267; longitude: -78.1750884;"
			></a-entity-->

			<!--a-nft
				type="nft"
				url="{ asset('AR/lap') }}"
				smooth="true"
				smoothCount="10"
				smoothTolerance=".01"
				smoothThreshold="5"
			>
				<!- as a child of the a-nft entity, you can define the content to show. here's a GLTF model entity ->
				<a-entity
					gltf-model="#animated-asset"
					scale="0.1 0.1 0.1"
					position="0 0 0"
				>
				</a-entity>
			</a-nft-->

			{{-- <a-entity gps-projected-camera rotation-reader></a-entity> --}}
			{{-- <a-entity camera></a-entity> --}}
		{{-- </a-scene> --}}


		<a-scene
			vr-mode-ui='enabled: false;'
			renderer="logarithmicDepthBuffer: true;"
			embedded arjs='trackingMethod: best; sourceType: webcam; debugUIEnabled: false;'>

			<a-assets>
				<a-asset-item id="animated-asset" src="{{ asset('AR/Chaly_dance_002.gltf') }}"></a-asset-item>
			</a-assets>

			<!-- use rawgithack to retrieve the correct url for nft marker (see 'pinball' below) -->
			<a-nft
				type='nft'
				url='https://arjs-cors-proxy.herokuapp.com/https://raw.githack.com/AR-js-org/AR.js/master/aframe/examples/image-tracking/nft/trex/trex-image/trex'
				smooth='true' 
				smoothCount='10' 
				smoothTolerance='0.01' 
				smoothThreshold='5'>
				<a-entity
						gltf-model='#animated-asset'
						scale="10 10 10"
						{{-- position="0 0 0" --}}
						animation-mixer="loop: repeat"
						class="clickable"
						gesture-handler
						>
				</a-entity>
			</a-nft>
			<a-entity camera></a-entity>
		</a-scene>
		
	</body>
</html>
