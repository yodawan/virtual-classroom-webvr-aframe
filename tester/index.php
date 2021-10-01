<html>
  <head>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>   
    <!--<script src="https://unpkg.com/aframe-environment-component/dist/aframe-environment-component.min.js"></script>-->
    <!--<script src="js/three.js"></script>
    <script src="js/three.min.js"></script>
    <script src="js/three.module.js"></script>-->
  </head>
  <script type="text/javascript">
    AFRAME.registerComponent('play-pause',{
      init: function(){
        var myVideo = document.querySelector('#Arty4');
        var videoContols = document.querySelector('#videoControls');
        this.el.addEventListener('click',function(){
        
          if(myVideo.paused){
            myVideo.play();
            videoContols.setAttribute('src','#pause');
          } else{
            myVideo.pause();
            videoContols.setAttribute('src','#play');
          }
        });
      }
    });
  </script>

  <body>

    <a-scene>
      <a-assets>
        <script type="text/javascript">
          var javascript_array;
        <?php 
          include 'view.php';
          
          echo "javascript_array = ".$js_array.";\n";
          

        ?>          console.log(javascript_array[1]);

      </script>
      <img id="Arty1" src="" crossorigin="anonymous">
      <img id="Arty2" src="" crossorigin="anonymous">
      <img id="Arty3" src="" crossorigin="anonymous">
      <img id="play" src="asset/img/play.png" crossorigin="anonymous">
      <img id="pause" src="asset/img/pause.png" crossorigin="anonymous">
      <video id="Arty4" src="" crossorigin="anonymous" loop="true">
      <script type="text/javascript">
         document.querySelector("#Arty1").setAttribute('src',javascript_array[0]);
         document.querySelector("#Arty2").setAttribute('src',javascript_array[1]);
         document.querySelector("#Arty3").setAttribute('src',javascript_array[2]);
         document.querySelector("#Arty4").setAttribute('src',javascript_array[3]);
      </script>
      </a-assets>
      
      <a-camera>
        <a-cursor></a-cursor>
      </a-camera>

      <a-plane rotation="-90 0 0" position="0 -0.01 0" scale="100 100 1" repeat="40 40 " material="src: asset/img/grass.jpg" geometry=""></a-plane>
      <a-plane rotation="-90 0 0" position="0 0 -9" scale="10 11 1" repeat="5 5" material="src: asset/img/seamless-wood-planks-5-900x900.jpg" geometry="" id="floor"></a-plane>

      <a-entity id="wall" geometry="" scale="0.1 3 11" position="-5 1.5 -9" material="src: asset/img/brick (2).jpg; repeat: 8 2;" ></a-entity>
      <a-entity id="wall-2" geometry="" scale="0.1 3 11" position="5 1.5 -9" material="src: asset/img/brick (2).jpg; repeat: 8 2;"></a-entity>
      <a-entity id="wall-4" geometry="" scale="0.1 3 10" position="0 1.5 -14.5" rotation="0 90 0" material="src: asset/img/brick (2).jpg; repeat: 8 2;"></a-entity>
      <a-entity id="wall-5" geometry="" scale="0.1 3 6.5" position="1.75 1.5 -6.5" rotation="0 90 0" material="src: asset/img/brick (2).jpg; repeat: 3 2;" repeat="5 5"></a-entity>
      <a-entity id="wall-3" geometry="" scale="0.1 3 4" position="-3 1.5 -3.5" rotation="0 90 0" material="src: asset/img/brick (2).jpg; repeat: 3 2;"></a-entity>
      <a-entity id="wall-6" geometry="" scale="0.1 3 4" position="3 1.5 -3.5" rotation="0 90 0" material="src: asset/img/brick (2).jpg; repeat: 3 2;"></a-entity>
      <a-entity id="wall-5" geometry="" scale="0.1 3 6.5" position="1.75 1.5 -6.5" rotation="0 90 0" material="src: asset/img/brick (2).jpg; repeat: 4 2;"></a-entity>
      <a-entity id="wall-7" geometry="" scale="0.1 3 5" position="-1.5 1.5 -9" rotation="" material="src: asset/img/brick (2).jpg; repeat: 4 2;"></a-entity>
      <a-sky material="src: asset/img/sky2.jpg;"></a-sky>
      <a-entity gltf-model="url(asset/indoor_pot_plant_3/scene.gltf)" rotation="0 180 0" position="-4 0 -4"></a-entity>
 
      <a-entity id="SIGNBOARD" text__signboard="align: center; color: #000000; lineHeight: 1; value: WELCOME TO VIRTUAL CLASSROOM" scale="5 5 1" position="0 3.25 -3"></a-entity>
      
      <a-image  position="-0.147 1.5 -6.44311"scale="1.5 1.5 1" width="1.33" height="1" src="#Arty1"></a-image>
      <a-image  position="2.93154 1.5 -6.44311"scale="1.5 1.5 1" width="1.33" height="1" src="#Arty2"></a-image>
      <a-image  position="4.94464 1.5 -5"scale="1.5 1.5 1" width="1.33" height="1" src="#Arty3" rotation="-180 90 180"></a-image>
      <a-video position="2.93154 1.5 -3.551" scale="1.5 1.5 1" width="1.33" height="1" src="#Arty4"  rotation="180 0 180">
        <a-image id="videoControls" position="0 -0.6 0" width="0.1" height="0.1" src="#play" play-pause></a-image> 
      </a-video>



      <a-entity geometry="primitive: plane" scale="0.5 3 1" material="color: white; opacity: 0.4; transparent: true; side: double; offset: NaN NaN; repeat: NaN NaN; ambientOcclusionTextureOffset: [object Object]; ambientOcclusionTextureRepeat: [object Object]; displacementTextureOffset: [object Object]; displacementTextureRepeat: [object Object]; metalnessTextureOffset: [object Object]; metalnessTextureRepeat: [object Object]; normalScale: [object Object]; normalTextureOffset: [object Object]; normalTextureRepeat: [object Object]; roughnessTextureOffset: [object Object]; roughnessTextureRepeat: [object Object]" id="glass" position="-0.8 1.5 -3.5"></a-entity>
      <a-entity geometry="primitive: plane" scale="0.5 3 1" material="color: white; opacity: 0.4; transparent: true; side: double; offset: NaN NaN; repeat: NaN NaN; ambientOcclusionTextureOffset: NaN NaN; ambientOcclusionTextureRepeat: NaN NaN; displacementTextureOffset: NaN NaN; displacementTextureRepeat: NaN NaN; metalnessTextureOffset: NaN NaN; metalnessTextureRepeat: NaN NaN; normalScale: NaN NaN; normalTextureOffset: NaN NaN; normalTextureRepeat: NaN NaN; roughnessTextureOffset: NaN NaN; roughnessTextureRepeat: NaN NaN" id="glass-2" position="0.8 1.5 -3.5"></a-entity>
      <a-entity id="roof" material="color: #808080" geometry="" scale="11 0.5 12" position="0 3.25 -9"></a-entity>
    </a-scene>
  </body>
</html>-3.551