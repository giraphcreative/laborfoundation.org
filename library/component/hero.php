<?php


$content = get_sub_field( 'content' );
$orientation = get_sub_field( 'orientation' );
$image = get_sub_field( 'image' );

if ( !empty( $content ) ){
    ?>
<div class="hero <?php print $orientation; ?>" style="background-image: url(<?php print $image ?>);">
    <div class="hero-inner">
        <?php print $content ?>
    </div>
</div>
    <?php
}

