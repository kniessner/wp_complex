

//const wordpressDebug = require('wordpress-debug').default;
 
//wordpressDebug('../../../wp-config.php'); // Enable debug 
//wordpressDebug('path/to/wp-config.php', true); // Enable debug 
//wordpressDebug('path/to/wp-config.php', false); // Disable debug 

/**************************************************************
																	WP API						
****************************************************************/
import {App} from './App.jsx';

var WPAPI = require( 'wpapi' );
var wp = new WPAPI({ endpoint: 'http://kniessner.com/complex/wp-json' });


$(document).ready(function(){
   var current_page =  $('#page_meta').data("id");
   console.log('current_page',current_page);
  
   if(current_page){
      wp.pages().id( current_page ).get(function( err, data ) {
           if ( err ) {
               console.log('api error',err);
           }
           console.log(data);
           App(data);
       });
  }
});


// Callbacks
wp.posts().get(function( err, data ) {
    if ( err ) {
        // handle err
    }
   	console.log(data);
    // do something with the returned posts
});

// Promises
wp.posts().then(function( data ) {
    // do something with the returned posts
}).catch(function( err ) {
    // handle error
});


import './resource_loader.jsx';
