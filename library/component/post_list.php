<?php


// get post list specs
$title = get_sub_field( 'title' );
$category = implode( ',', get_sub_field( 'category' ) );
$posts_per_page = get_sub_field( 'posts_per_page' );
$theme = get_sub_field( 'theme' );

if ( !empty( $category ) ) :
    if ( !empty( $title ) ) {
    ?>
    <div class="post-list-container <?php print $theme ?>">
        <div class="post-list-title">
            <h2><?php print $title; ?></h2>
        </div>
        <?php } ?>
        <div class="post-list">
            <?php print do_shortcode( '[articles cats="' . $category . '" posts_per_page="' . $posts_per_page . '" /]' ); ?>
        </div>
    </div>
    <?php
endif;

