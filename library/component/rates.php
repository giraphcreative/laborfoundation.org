<?php


$rates_title = get_sub_field('rates_title');
$rates_link = get_sub_field('rates_link');

// check if the nested repeater field has rows of data
if( have_rows('rate') ):
    
    print '<div class="rates">';

    // only show the intro column if there is a title set
    if ( !empty( $rates_title ) ) {
        print '<div class="rate intro">';
            if ( !empty( $rates_title ) ) print '<h2>' . $rates_title . '</h2>';
            if ( !empty( $rates_link ) ) print do_shortcode( '[button url="' . $rates_link . '"]View All Rates[/button]' );
        print '</div>';
    }

    // loop through the rows of data
    while ( have_rows('rate') ) : the_row();

        $product = get_sub_field('product');
        $amount = get_sub_field('amount');
        $type = get_sub_field( 'type' );
        $link = get_sub_field( 'link' );
        if ( !empty( $product ) && !empty( $amount ) ) {
            echo '<div class="rate ' . $type . '">' . 
                    ( !empty( $link ) ? '<a href="' . $link . '">' : '' ) .
                    '<div class="product">' . $product . '</div>' . 
                    '<p class="modifier">' . ( $type == 'apr' ? 'as low as' : 'as high as' ) . '</p>' . 
                    '<div class="amount">' . $amount . '</div>' . 
                    ( !empty( $link ) ? '</a>' : '' ) .
                '</div>';
        }

    endwhile;

    print '</div>';

endif;

