<?php
 /*
 * Add columns to STANDORT
 */
 function add_acf_columns ( $columns ) {
   return array_merge ( $columns, array ( 
     'anschrift'     => __ ( 'Anschrift' ),
     'arbeitsfeld'   => __ ( 'Arbeitsfeld' ),
   ) );
 }
 add_filter ( 'manage_standort_posts_columns', 'add_acf_columns' );

 /*
 * Add columns to exhibition post list
 */
 function standort_custom_column ( $column, $post_id ) {
   switch ( $column ) {
     case 'anschrift':
     $anschrift = get_post_meta ( $post_id, 'anschrift', true );
      if($anschrift){
      	var_dump($anschrift);
      	echo $anschrift['location']['address'];
      }
     //var_dump();
     //  echo get_post_meta ( $post_id, 'location_address', true );
       break;
    case 'arbeitsfeld':
     $arbeitsfeld = get_post_meta ( $post_id, 'arbeitsfeld', true );
      if($arbeitsfeld){
      	echo $arbeitsfeld;
      }
     //var_dump();
     //  echo get_post_meta ( $post_id, 'location_address', true );
       break;
   }
 }
 add_action ( 'manage_standort_posts_custom_column', 'standort_custom_column', 10, 2 );
 


 /*
 * Add columns to GESCHICHTE
 */
 function add_story_columns ( $columns ) {
   return array_merge ( $columns, array ( 
     'standort'     => __ ( 'Standort' )
   ) );
 }
 add_filter ( 'manage_geschichten_posts_columns', 'add_story_columns' );

 /*
 * Add columns to exhibition post list
 */
 function geschichten_custom_column ( $column, $post_id ) {
   switch ( $column ) {
     case 'standort':
   	 $story = get_post_meta ( $post_id );
   		echo get_the_title($story['standort'][0]);
     break;
   
   }
 }
 add_action ( 'manage_geschichten_posts_custom_column', 'geschichten_custom_column', 10, 2 );
 

?>