<?php


// get the icon background color
$title = get_sub_field( 'section_title' );
$color = get_sub_field( 'background_color' );

// check if the nested repeater field has rows of data
if( have_rows('person') ):
    
    print '<div class="people-photos ' . $color . '">';
    if ( !empty( $title ) ) print '<h2>' . $title . '</h2>';
    print '<div class="people-photos-inner">';

    // loop through the rows of data
    while ( have_rows('person') ) : the_row();

        $photo = get_sub_field( 'photo' );
        $name = get_sub_field( 'name' );
        $title = get_sub_field( 'title' );
        $bio = get_sub_field( 'bio' );
        $color = get_sub_field( 'color' );

        print '<div class="person ' . $color . '">' .
            ( !empty( $photo ) ? '<div class="person-photo"><img src="' . $photo . '" /></div>' : '' ) .
            '<div class="person-info">
                <h4>' . $name . '</h4>
                <p>' . $title . '</p>' .
                '<div class="bio">' . $bio . '</div>' .
            '</div>
        </div>';

    endwhile;

    print '</div>';
    print '</div>';

endif;

