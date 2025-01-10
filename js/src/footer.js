

// onload
jQuery(document).ready(function($){

    // button click handler for download option - if that parameter is set.
    $( ".footer-menu h4" ).on( 'click', function( event ){
        if ( $(window).width() <= 769 ) {
            $(this).parent('.footer-menu').toggleClass('open');
        }
    });

});

