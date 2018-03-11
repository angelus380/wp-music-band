jQuery(document).ready( function($){
/*

	OPEN AND CLOSE MAIN MENU

*/
function open_menu() {

var
	$open_menu 	= $( '.controls a[href="#menu"]' ),
	$closed  		= $( '.closed' ),
	$open 			= $( '.open' ),
	$close_menu = $( '.close-sub-menu' ),
	$menu_items = $( '.mobile-menu-items' )
;

$open_menu.on( 'click', function() {
	$(this).toggleClass( 'color' );
	$menu_items.fadeToggle();
});

} open_menu();
/*

	OPEN AND CLOSE SUB MENUS

*/
function open_sub_menu() {

var
	$mobile_menu = $( '.mobile-menu-items>li>a' ),
	$menu_items = $( '.mobile-menu-items' ),
	$browser_menu = $( '.browser-menu-items>li>a' ),
	$close_menu = $( '.close-sub-menu' ),
	$sub_menus = $( '.sub-menu' ),
	$last_hash = false
;

/* mobile menu */
$mobile_menu.on( 'click', function() {
	$(this).next().slideToggle();
});

/* browser menu */
$browser_menu.on( 'click', function() {

	var	$current_hash = $(this).attr( 'data-target' );

	$data = 'a[data-target="' + $current_hash + '"]';
	$menu_items.css( 'z-index', '3');
	$menu_items.find( $data ).next().css( 'display', 'flex');

});

/* close menu */
$close_menu.on( 'click', function() {
	$sub_menus.fadeOut();
	$menu_items.css( 'z-index', '-3');

});


} open_sub_menu();


});