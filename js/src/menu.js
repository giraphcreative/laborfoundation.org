

// onload responsive footer and menu stuff
jQuery(document).ready(function($){

	// show/hide menus when they click the toggler
	var header = $( 'header' );
	var menu = header.find( 'nav' );
	var menu_toggle = menu.find( 'button.menu-toggle' );
	var menu_ul = menu.find( '.nav-menu' );

    // toggle menu items on smaller screens
	menu_toggle.click(function(){

		// if the menu is visible, hide it, 
		if ( menu_ul.is( ':visible' ) ) {
			menu_ul.hide();
		} else {
			menu_ul.show();
		}

		// when user clicks a link in the menu, open submenu if it exists.
		menu_ul.find( 'a' ).click(function(){
			var parent_li = $( this ).parent( 'li' );
			var submenu = $( this ).next( 'ul' );
			if ( !submenu.is( ':visible' ) && parent_li.hasClass( 'menu-item-has-children' ) ) {
				event.preventDefault();
				parent_li.addClass( 'open' );
				submenu.show();
			}
		});

	});

	// store the position of the menu from the top of the page
	var nav_top = $( 'header nav' ).offset().top;

});

