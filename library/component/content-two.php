<?php


$content_one = get_sub_field('content_one');
$content_two = get_sub_field('content_two');
$padding = get_sub_field('padding');
$valign = get_sub_field('valign');
$layout = get_sub_field('layout');
$text_color = get_sub_field('text-color');
$has_background = get_sub_field( 'has_background' );
$background = get_sub_field( 'background' );

if ( !empty( $content_one ) && !empty( $content_two ) ){
    ?>
<div class="content-two-column <?php print $padding; ?> <?php print $valign; ?> <?php print $text_color; if ( $has_background) { print ' has-background'; } ?>" <?php if ( $has_background ) { ?>style="background-image: url(<?php print $background ?>);"<?php } ?>>
    <div class="content-columns <?php print $layout; ?>">
        <div class="column-one">
            <?php print $content_one ?>
        </div>
        <div class="column-two">
            <?php print $content_two ?>
        </div>
    </div>
</div>
    <?php
}


