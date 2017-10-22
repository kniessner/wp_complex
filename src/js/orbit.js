/*=================================================
	Main Settings - Camera etc.
=================================================*/			
				
				
				
var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( 60, (window.innerWidth-15) / (window.innerHeight-15), 1, 1000 );
var renderer = new THREE.WebGLRenderer();
var raycaster;
		
var  objects = [];			
renderer.setSize( window.innerWidth-15, window.innerHeight-15 );
document.getElementById('Orbit').appendChild( renderer.domElement );
			

controls = new THREE.OrbitControls( camera, renderer.domElement );
controls.enableDamping = true;
controls.dampingFactor = 0.25;
controls.enableZoom = true;


camera.position.z = 520;
camera.position.x = -0;

var raycaster = new THREE.Raycaster();
var mouse = new THREE.Vector2();

function onMouseMove( event ) {

	mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
	mouse.y = - ( event.clientY / window.innerHeight ) * 2 + 1;		
}

window.addEventListener( 'mousemove', onMouseMove, false );


	

/*=================================================
	MAIN ELEMENTS
=================================================*/			
				
var geometry = new THREE.SphereGeometry( 105, 302, 302 );
//var geometry = new THREE.TorusGeometry( 122, 90 , 20, 300, 100);
var material = new THREE.MeshLambertMaterial( { color:  "rgba(35, 138, 190,0.1)", morphTargets:true, wireframe: false} );
var CenterCore = new THREE.Mesh( geometry, material );
CenterCore.name = "Bli";

CenterCore.position.z = 16;

scene.add( CenterCore );
objects.push( CenterCore );

var geometry = new THREE.TorusGeometry( 122, 102 , 15, 15, 20);
var material = new THREE.MeshLambertMaterial( { color:  "rgba(35, 138, 190,0.1)", morphTargets:true, wireframe: false} );
var CenterWire = new THREE.Mesh( geometry, material );
CenterWire.position.z = 16;

//scene.add( CenterWire )


projector = new THREE.Projector();



function onDocumentMouseDown( event ) {

    event.preventDefault();
    
    var vector = new THREE.Vector3( 
        ( event.clientX / window.innerWidth ) * 2 - 1, 
        - ( event.clientY / window.innerHeight ) * 2 + 1, 
        0.5 );
    
    projector.unprojectVector( vector, camera );
    
    var ray = new THREE.Raycaster( camera.position, vector.sub( camera.position ).normalize() );

    var intersects = ray.intersectObjects( objects );    
    if ( intersects.length > 0 ) {
                
		intersects[0].object.name;
        alert(intersects[0].object.name);
    }
                    
}

document.addEventListener( 'mousedown', onDocumentMouseDown, false);




var geometry = new THREE.SphereGeometry( 105, 302, 302 );
//var geometry = new THREE.TorusGeometry( 122, 90 , 20, 300, 100);
var material = new THREE.MeshLambertMaterial( { color:  0xF02622, morphTargets:true, wireframe: false} );
var redPlanet = new THREE.Mesh( geometry, material );
redPlanet.position.x = 506;
redPlanet.name = "Sun";

scene.add( redPlanet );

objects.push( redPlanet );




var geometry = new THREE.TorusGeometry( 302, 15, 10, 150);
var material = new THREE.MeshLambertMaterial( { color:  "rgba(4, 4, 4,1)" , morphTargets:true, wireframe: false} );
var RingCore = new THREE.Mesh( geometry, material );
scene.add( RingCore )

var geometry = new THREE.TorusGeometry( 302,20, 10, 100);
var material = new THREE.MeshLambertMaterial( { color:  "rgba(94, 236, 255,0.4)" , morphTargets:true, wireframe: true} );
var RingWire = new THREE.Mesh( geometry, material );
scene.add( RingWire );


var sphere = new THREE.Mesh(
  new THREE.SphereGeometry( 15, 32, 302 ),
  new THREE.MeshBasicMaterial({
    map: THREE.ImageUtils.loadTexture('http://kniessner.com/comPlex/wp-content/themes/complex/_/img/logo.png')

  })
);

sphere.position.z = 40;

sphere.position.x = 400;


scene.add(sphere);




/*=================================================
	LIGHTS
=================================================*/



		 scene.add( new THREE.AmbientLight( 0x222222 ) );
                      
                      
                      
    	light = new THREE.DirectionalLight( 0xffffff );
				light.position.set( 1, 1, 1 );
				scene.add( light );
				light = new THREE.DirectionalLight( 0x002288 );
				light.position.set( -200, -200, -200 );
				scene.add( light );
				light = new THREE.AmbientLight( 0x222222 );
				scene.add( light );
				
	    var hemisphereLight = new THREE.HemisphereLight(0xaaaaaa,0x000000, .9);
	    scene.add(hemisphereLight);

		this.light = new THREE.PointLight();
        this.light.position.set(-256, 256, -256);
        this.scene.add(this.light);
        
        


/*=================================================
	Floor Example 
=================================================*/
        
        	/*
        		geometry = new THREE.PlaneGeometry( 2000, 2000, 100, 100 );
				geometry.rotateX( - Math.PI / 2 );
				for ( var i = 0, l = geometry.vertices.length; i < l; i ++ ) {
					var vertex = geometry.vertices[ i ];
					vertex.x += Math.random() * 20 - 10;
					vertex.y += Math.random() * 2;
					vertex.z += Math.random() * 20 - 10;
				}
				
				
				for ( var i = 0, l = geometry.faces.length; i < l; i ++ ) {
					var face = geometry.faces[ i ];
					face.vertexColors[ 0 ] = new THREE.Color().setHSL( Math.random() * 0.3 + 0.5, 0.75, Math.random() * 0.25 + 0.75 );
					face.vertexColors[ 1 ] = new THREE.Color().setHSL( Math.random() * 0.3 + 0.5, 0.75, Math.random() * 0.25 + 0.75 );
					face.vertexColors[ 2 ] = new THREE.Color().setHSL( Math.random() * 0.3 + 0.5, 0.75, Math.random() * 0.25 + 0.75 );
				}
				material = new THREE.MeshBasicMaterial( { vertexColors: THREE.VertexColors } );
				mesh = new THREE.Mesh( geometry, material );
				scene.add( mesh );*/
/*=================================================
	RENDER 
=================================================*/
document.addEventListener('keydown',onDocumentKeyDown,false);
function onDocumentKeyDown(event){
var delta = 20;
event = event || window.event;
var keycode = event.keyCode;
switch(keycode){
case 37 : //left arrow 向左箭头
camera.position.x = camera.position.x - delta;
camera.updateProjectionMatrix();
break;
case 38 : // up arrow 向上箭头
camera.position.z = camera.position.z - delta;
camera.updateProjectionMatrix();
break;
case 39 : // right arrow 向右箭头
camera.position.x = camera.position.x + delta;
camera.updateProjectionMatrix();
break;
case 40 : //down arrow向下箭头
camera.position.z = camera.position.z + delta;
camera.updateProjectionMatrix();
break;
}
//document.addEventListener('keyup',onDocumentKeyUp,false);
}
function onDocumentKeyUp(event){
document.removeEventListener('keydown',onDocumentKeyDown,false);
}






var render = function () { 
	camera.rotation.z -= 0.001;
	requestAnimationFrame(render); 
	renderer.render(scene, camera); 
}; 
      
render();  



		