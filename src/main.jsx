

//const wordpressDebug = require('wordpress-debug').default;
 
//wordpressDebug('../../../wp-config.php'); // Enable debug 
//wordpressDebug('path/to/wp-config.php', true); // Enable debug 
//wordpressDebug('path/to/wp-config.php', false); // Disable debug 



var WPAPI = require( 'wpapi' );
var wp = new WPAPI({ endpoint: 'http://kniessner.com/complex/wp-json/acf/wp/v3/' });

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
