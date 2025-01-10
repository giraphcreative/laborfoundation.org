<?php


$image = get_sub_field('image');
$link = get_sub_field('link');
$color = get_sub_field('color');

if ( !empty( $image ) && !empty( $link ) ) :
    ?>
<div class="promotion <?php print $color; ?>">
    <a href="<?php print $link ?>"><img src="<?php print $image ?>" /></a>
</div>
    <?php
endif;

