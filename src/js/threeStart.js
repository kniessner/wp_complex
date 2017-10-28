/*=================================================
	Main Settings - Camera etc.
=================================================*/			
				
import * as THREE from 'three';
var OrbitControls = require('three-orbit-controls')(THREE);
		
jQuery(document).ready(function($) {


	var scene = new THREE.Scene();
	var height = window.innerHeight;
	var width = window.innerWidth;

	var camera = new THREE.PerspectiveCamera( 60, width / height, 1, 1500 );
	var renderer = new THREE.WebGLRenderer( { alpha: true } );

	var mouseX = 0;
	var mouseY = 0;
	var windowHalfX = width / 2;
	var windowHalfY = height / 2;
	var raycaster;

	
	renderer.setSize( window.innerWidth-15, (window.innerHeight) );
	document.getElementById('Orbit').appendChild( renderer.domElement );


	//camera.position.z = 500;
	//camera.position.x = -0;

/*=================================================
		MAIN ELEMENTS
=================================================*/	
// Set up the sphere vars
const RADIUS = 50;
const SEGMENTS = 16;
const RINGS = 16;

// Create a new mesh with
// sphere geometry - we will cover
// the sphereMaterial next!
var material = new THREE.MeshLambertMaterial( { color:  0xFDFDFDF, morphTargets:true ,wireframe: true,combine:THREE.MultiplyBlending} );

const sphere = new THREE.Mesh(

  new THREE.SphereGeometry(
    RADIUS,
    SEGMENTS,
    RINGS),
  material);

// Move the Sphere back in Z so we
// can see it.
sphere.position.z = -300;

// Finally, add the sphere to the scene.
scene.add(sphere);


var geometry = new THREE.TorusGeometry( 11, 0.5, 16, 100 );
var mergeGeometry = new THREE.Geometry();
var matrix = new THREE.Matrix4();

for( i = 1; i <= 50; i++ ) {

    matrix.makeTranslation( 0, 3.4 * i, 0 );
    mergeGeometry.merge( geometry, matrix );

}

var mesh = new THREE.Mesh( mergeGeo, material )

var geometry = new THREE.SphereGeometry( 152,15, 15 ); // radius - segments -rings

				
var geometryCore = new THREE.SphereGeometry( 115,15, 15 ); // radius - segments -rings
var materialCore = new THREE.MeshPhongMaterial( { color:  0xFDFDFDF, shading:THREE.FlatShading, morphTargets:true ,wireframe: false,combine:THREE.MultiplyBlending} );
	
var ball = new THREE.Mesh( geometry, material );
var ballcore = new THREE.Mesh( geometryCore, materialCore );


// List of all the materials used in the meshes you want to combine
var materials = [materialCore, material]; 

// List of the meshes you want to combine, for each one you have to store the index of the material within the materials array 
var meshes = [{mesh: mesh1, materialIndex:0}, {mesh: mesh2, materialIndex:1}, {mesh: mesh3, materialIndex:0}];

// Geometry of the combined mesh
var totalGeometry = new THREE.Geometry();
for(var i = 0; i < meshes.length; i++)
{
    meshes[i].mesh.updateMatrix();
    geometryCore.merge(meshes[i].mesh.geometry, meshes[i].mesh.matrix, meshes[i].materialIndex);
}

// Create the combined mesh
var combinedMesh = new THREE.Mesh(geometryCore, new THREE.MeshFaceMaterial(materials));
scene.add(combinedMesh);
/*=================================================
		LIGHTS
=================================================*/

// create a point light
const pointLight =
  new THREE.PointLight(0xFFFFFF);

// set its position
pointLight.position.x = 10;
pointLight.position.y = 50;
pointLight.position.z = 130;

// add to the scene
scene.add(pointLight);
			
/*=================================================
		RANDOM ELEMENTS
=================================================*/			
		

/*=================================================
		RENDER 
=================================================*/
// Draw!
renderer.render(scene, camera);


function update () {
  // Draw!
  renderer.render(scene, camera);

  // Schedule the next frame.
  requestAnimationFrame(update);
}

// Schedule the first frame.
requestAnimationFrame(update);


});

		