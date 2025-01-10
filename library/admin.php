<?php


if( function_exists('acf_add_options_page') ) {
		
    acf_add_options_page(array(
        'page_title' 	=> 'Theme Options',
        'menu_title'	=> 'Theme Options',
        'menu_slug' 	=> 'options',
        'capability'	=> 'edit_posts',
        'redirect'	    => false
    ));

}


// add a wysiwyg 'short' class
add_action('admin_head', 'acf_wysiwyg_short');
function acf_wysiwyg_short() {
	?>
	<style>
    .short .acf-editor-wrap iframe {			
        height: 170px !important;
    }
    .short .mce-statusbar {
        display: none;
    }
	</style>
	<?php
}

