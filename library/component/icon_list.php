<?php


$icons_intro = get_sub_field( 'icon_list_intro' );

// check if the nested repeater field has rows of data
if ( have_rows('icon_item') ) :

    if ( !empty( $icons_intro ) ) print '<div class="icon-list-intro">' . $icons_intro . '</div>';

    print '<div class="icon-list">';

    // loop through the rows of data
    while ( have_rows('icon_item') ) : the_row();

        $icon = get_sub_field('icon');
        $content = get_sub_field('content');
        echo '<div class="icon-item">' .
                '<div class="icon"><img src="' . $icon . '" /></div>' .
                '<div class="content">' . $content . '</div>' .
            '</div>';

    endwhile;

    print '</div>';

endif;
    
