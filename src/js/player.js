jQuery(document).ready( function($){


function player_full_screen() {
	$('#player').requestFullScreen();
} //player_full_screen();


function player_keys() {

var
	$controls = $( '#player_controls a' ),
	$play 		= $( "[href='#play']" ),
	$pause 		= $( "[href='#pause']" ),
	$mute 		= $( "[href='#mute']" ),
	$unMute 	= $( "[href='#unMute']" )
;

$controls.on( 'click', function(e) {
	e.preventDefault();
	$target = $(this).attr( 'href' );

	console.log( $target );

	switch ( $target ) {
		case '#play' :
			playVideo();
			$play.css( 'display', 'none' );
			$pause.css( 'display', 'inline-block' );
			break;

		case '#pause' :
			pauseVideo();
			$pause.css( 'display', 'none' );
			$play.css( 'display', 'inline-block' );
			break;

		case '#mute' :
			muteVideo();
			$mute.css( 'display', 'none' );
			$unMute.css( 'display', 'inline-block' );
			break;

		case '#unMute' :
			unMuteVideo();
			$unMute.css( 'display', 'none' );
			$mute.css( 'display', 'inline-block' );
			break;

		case '#restart' :
			restartVideo();
			break;
	}

});

} player_keys();

});