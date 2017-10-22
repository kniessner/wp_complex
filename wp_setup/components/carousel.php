<div id="carousel-frontPage" class="carousel slide bgSlide" data-ride="carousel" data-interval="10000">

  <div class="carousel-inner front-carousel-inner" >
    <?php

    // Get the repeater field
    $repeater = get_field( 'slider');
      $y = 0;
    // Get a random rows. Change the second parameter in array_rand() to how many rows you want.
    $random_rows = array_rand( $repeater, sizeof($repeater) );
    // Loop through the random rows if more than one is returned
    if( is_array( $random_rows ) ){
      foreach( $random_rows as $random_row ){
          $y++;
            $attachment_id = $repeater[$random_row]['bild']['ID'];
            $image_attributes = wp_get_attachment_image_src( $attachment_id ,'large');
            $attachment = get_post( $attachment_id );

        // Output data here. Replace sub field names.
        if ($y === 1) {
          ?>

          <div class="item active" style="background-image:url(<?php echo $image_attributes[0];?>);">
            <div class="container">
            </div>
           <?php if($attachment->post_excerpt){
                                     ?><p class="caption"><?php echo $attachment->post_excerpt;?></p><?php
           };?>
          </div>
          <?php
        }else{
        ?>
        <div class="item" style="background-image:url(<?php echo $image_attributes[0]; ?>);">
          <div class="container">
          </div>
        </div>
        <?php
        }
      }
    } else {
      // Output data here. Replace sub field names.
     // echo 'Sub Field 11: ' . $repeater[$random_rows]['bild'] . '<br/>';
    }

    if( have_rows('slider') ):
    $y = 0;
    $repeater = get_field( 'slider');
    while( have_rows('slider') ): the_row();
          $attachment_id = $repeater[$random_row]['bild']['ID'];
            $image_attributes = wp_get_attachment_image_src( $attachment_id ,'large');
            $attachment = get_post( $attachment_id );

    $y++;
    if ($y === 1) { ?>
      <div class="item active" style="background-image:url(<?php echo $image_attributes[0];?>);">>
        <div class="container">
        </div>
      </div>
      <?php }else{  ?>
      <div class="item" style="background-image:url(<?php echo $image_attributes[0];?>);">>
        <div class="container">
        </div>
      </div>
    <?php }
    endwhile;
   endif; ?>

    </div>
    <a class="left carousel-control" href="#carousel-frontPage" role="button" data-slide="prev">
      <i class="fa fa-caret-left fa-3x glyphicon-chevron-left" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#carousel-frontPage" role="button" data-slide="next">
      <i class="fa fa-caret-right fa-3x glyphicon-chevron-right" aria-hidden="true"></i>
      <span class="sr-only">Next</span>
    </a>

</div>
