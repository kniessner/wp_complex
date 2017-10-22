<?php
//hook to add a meta box
add_action( 'add_meta_boxes', 'c3m_video_meta' );

function c3m_video_meta() {
    //create a custom meta box
    add_meta_box( 'c3m-meta', 'Featured Video Selector', 'c3m_mbe_function', 'geschichten', 'normal', 'high' );
}

function c3m_mbe_function( $post ) {

    //retrieve the meta data values if they exist
    $c3m_mbe_featured = get_post_meta( $post->ID, '_c3m_mbe_featured', true );

    echo 'Select yes below to make video featured';
    ?>
    <p>Featured: 
    <select name="c3m_mbe_featured">
        <option value="No" <?php selected( $c3m_mbe_featured, 'no' ); ?>>No Way</option>
        <option value="Yes" <?php selected( $c3m_mbe_featured, 'yes' ); ?>>Sure Feature This Video</option>
    </select>
    </p>
    <?php
}

//hook to save the meta box data
add_action( 'save_post', 'c3m_mbe_save_meta' );
function c3m_mbe_save_meta( $post_ID ) {
    global $post;

        if ( isset( $_POST ) ) {
            update_post_meta( $post_ID, '_c3m_mbe_featured', strip_tags( $_POST['c3m_mbe_featured'] ) );
        }
    
}





//Register Meta Box
function rm_register_meta_box() {
    add_meta_box( 'rm-meta-box-id', esc_html__( 'Storys', 'text-domain' ), 'rm_meta_box_callback', 'standort', 'side', 'low' );
}
add_action( 'add_meta_boxes', 'rm_register_meta_box');
 
//Add field
function rm_meta_box_callback( $meta_id ) {
    //$outline .= '<label for="title_field" style="width:150px; display:inline-block;">'. esc_html__('Title Field', 'text-domain') .'</label>';
    //$title_field = get_post_meta( $meta_id->ID, 'title_field', true );
    //$outline .= '<hr/>';
				$standort_id = get_the_ID();
		 		$args = array( 'post_type' => 'geschichten', 'posts_per_page' => -1 ,'post_status' => 'publish');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                	
                	$post_object = get_field('standort');
					if( $post_object ): 
						// override $post
						$post_object;
						$story_std_id = $post_object -> ID;
						if($standort_id === $story_std_id){
							?>
							    <div>
							    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							    
					    <?php 
					      if(get_field( "foto")){
			              ?>
			             	<img style="max-width: 80%; width:100%;margin: 0 auto;" src="<?php the_field( "foto"); ?>" />

			               <?php
			               }
			               ?><p>
			               <?php echo shwib_excerpt(get_the_ID());?></p>
			               <a href="<?php the_permalink(); ?>">Anschauen</a>
			               </div>
			           </hr>
			               <?php
						}
						setup_postdata( $post_object ); 
						wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif;

                	                
               endwhile;

 
    echo $outline;
}

?>

