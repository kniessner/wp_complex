
<?php

$args = array(
		'numberposts' => -1,
		'order' => 'ASC',
		'post_parent' => $postID,
		'post_status' => null,
		'post_type' => 'attachment',
	);




$thumb = get_children( $args );
if($thumb){

   foreach($thumb as $id => $attachment ){     
   	
   	// RENAMING FOTO
     $my_post = array(
      'ID'           => $id,
      'post_title'   => basename( get_attached_file( $id ) ),
      'post_name'   =>  $id ,
	  );
	  wp_update_post( $my_post );



   	// CREATE A POST FOR FOTO
   	
   $newTitle = basename( get_attached_file( $id ) ); 
   	 
	$arg = array(
	  'title'        => $newTitle,
	  'post_type'   => 'images',
	  'numberposts' => 1
	);
	

	$my_posts = get_posts($arg);
	
		if( $my_posts ) {
		
		
		} else {
		  
			$post_id = wp_insert_post(
				array(
		
					'post_name'		  => $id,
					'post_title'		=>	$newTitle,
					'post_status'		=>	'publish',
					'post_type'		=>	'images'
				)
			);
			
			
		}
	
	
	}

}
 	?>
	   	