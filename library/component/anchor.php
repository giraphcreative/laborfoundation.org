<?php


// get the anchor label
$label = get_sub_field( 'label' );

// if it's not empty, display it
if ( !empty( $label ) ) print '<a name="' . $label . '"></a>';

