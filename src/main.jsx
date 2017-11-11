






/**************************************************************
																	WP API						
****************************************************************/
import {app_loader} from './App.jsx';

var WPAPI = require( 'wpapi' );
var wp = new WPAPI({ 
  endpoint: 'http://kniessner.com/complex/wp-json', 
  username: 'Sascha-Darius',
  password: 'bkv1805',
  auth: true
});


$(document).ready(function(){

  var set = wp.settings();
  console.log(set);

   var current_page =  $('#page_meta').data("id");  
       if(current_page){
          wp.pages().id( current_page ).get(function( err, data ) {
               if ( err ) {
                   console.log('api error',err);
               }
               app_loader(data);
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
