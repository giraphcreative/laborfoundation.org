<?php

function output_notice_bar( $text, $color='' ) {
    if ( !empty( $text ) ) {
        print '<div class="notice-bar ' . $color .   '">' . $text . '</div>';
    }
}


function the_notice_bar() {

    // first check if the notice is set at a site-wide level (in the Theme Options page).
    $text = get_field( 'notice_text', 'option' );
    $color = get_field( 'notice_color', 'option' );

    if ( !empty( $text ) ) {
        output_notice_bar( $text, $color );
        return;
    }


    // first check if the notice is set at a site-wide level (in the Theme Options page).
    $text = get_field( 'notice_text' );
    $color = get_field( 'notice_color' );

    if ( !empty( $text ) ) {
        output_notice_bar( $text, $color );
        return;
    }

}

