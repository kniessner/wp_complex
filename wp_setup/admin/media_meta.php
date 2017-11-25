<?php 
 function update_edit_form() {
      echo ' enctype="multipart/form-data"';
      } // end update_edit_form
 
    add_action('add_meta_boxes', 'the_upload_metabox'); 
   
    function the_upload_metabox() {  
        // Define the custom attachment for posts  
        add_meta_box(  
            'wp_custom_attachment',  
            'Upload File',  
            'wp_custom_file_attachment'    
        );   
    } 
 
    // The custom file attachment function
    function wp_custom_file_attachment() {  
      
      global $post;
      $theFILE=  get_post_meta($post->ID,'wp_custom_attachment',true);
      wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');  
      $html = '
<p class="description">'; $html .= 'Upload the File.'; if(count($theFILE)>0 && is_array($theFILE)){ $html.="Uploaded File:".$theFILE[0]['url']; }
$html .= '</p>';
$html .= '<input id="wp_custom_attachment" title="select file" multiple="multiple" name="wp_custom_attachment[]" size="25" type="file" value="" />';  
 
    echo $html; 
      
    } 
     add_action('save_post', 'save_custom_meta_data');
    // Saving the uploaded file details
    function save_custom_meta_data($id) {  
        /* --- security verification --- */  
        if(isset($_POST['wp_custom_attachment_nonce']))
        if(!wp_verify_nonce($_POST['wp_custom_attachment_nonce'], plugin_basename(__FILE__))) {  
          return $id;  
        } // end if  
            
        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {  
          return $id;  
        } // end if  
         if(isset($_POST['post_type']))   
        if('page' == $_POST['post_type']) {  
          if(!current_user_can('edit_page', $id)) {  
            return $id;  
          } // end if  
        } else {  
            if(!current_user_can('edit_page', $id)) {  
                return $id;  
            } // end if  
        } // end if  
        /* - end security verification - */  
     
        // Make sure the file array isn't empty  
        if(!empty($_FILES['wp_custom_attachment']['name'])) {                         
            // Get the file type of the upload  
             $flag=0;
            for($i=0;$i<count($_FILES['wp_custom_attachment']['name']);$i++){
                if(!empty($_FILES['wp_custom_attachment']['name'][$i])){
                    $flag=1;
                // Use the WordPress API to upload the multiple files
                $upload[] = wp_upload_bits($_FILES['wp_custom_attachment']['name'][$i], null, file_get_contents($_FILES['wp_custom_attachment']['tmp_name'][$i]));  
                }
                }
                if($flag==1)
                update_post_meta($id, 'wp_custom_attachment', $upload);       
             
        } 
          
    } 
?>