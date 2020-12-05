<!doctype html>
<html>
    <head>
        <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
        <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
        <script src="https://raw.githack.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
        <script src="https://raw.githack.com/AR-js-org/studio-backend/master/src/modules/marker/tools/gesture-detector.js"></script>
        <script src="https://raw.githack.com/AR-js-org/studio-backend/master/src/modules/marker/tools/gesture-handler.js"></script>
    </head>

    <body style="margin: 0; overflow: hidden;">
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
                <a-asset-item
                    id="dancer-1"
                    src="{{ asset('AR/Dancer-1.gltf') }}"
                ></a-asset-item>
                <a-asset-item
                    id="dancer-2"
                    src="{{ asset('AR/Dancer-2.gltf') }}"
                ></a-asset-item>
                <a-asset-item
                    id="dancer-3"
                    src="{{ asset('AR/Dancer-3.gltf') }}"
                ></a-asset-item>
                <a-asset-item
                    id="dancer-4"
                    src="{{ asset('AR/Dancer-4.gltf') }}"
                ></a-asset-item>
            </a-assets>

            <a-marker
                id="animated-marker"
                type="pattern"
                preset="custom"
                url="{{ asset('AR/pattern-Danzantes.patt') }}"
                raycaster="objects: .clickable"
                emitevents="true"
                cursor="fuse: false; rayOrigin: mouse;"
                id="markerA"
            >
                <a-entity
                    id="model-1"
										scale="1 1 1"
          					position="-1 -18 -20"
                    animation-mixer="loop: repeat"
                    gltf-model="#dancer-1"
                    class="clickable"
                    gesture-handler
                ></a-entity>
                <a-entity
                    id="model-2"
										scale="1 1 1"
          					position="-1 -18 -20"
                    animation-mixer="loop: repeat"
                    gltf-model="#dancer-2"
                    class="clickable"
                    gesture-handler
                ></a-entity>
                <a-entity
                    id="model-3"
										scale="1 1 1"
          					position="-1 -18 -20"
                    animation-mixer="loop: repeat"
                    gltf-model="#dancer-3"
                    class="clickable"
                    gesture-handler
                ></a-entity>
                <a-entity
                    id="model-4"
										scale="1 1 1"
          					position="-1 -18 -20"
                    animation-mixer="loop: repeat"
                    gltf-model="#dancer-4"
                    class="clickable"
                    gesture-handler
                ></a-entity>
            </a-marker>

            <a-entity camera></a-entity>
        </a-scene>
    </body>
</html>
