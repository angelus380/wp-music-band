<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php
# create iframe
$iframe = get_field( 'video', 'option', false );
list( $link, $video_id ) = explode( "?v=", $iframe ); ?>

<div class="player">
	<div class="player-overlay"></div>
	<div id="player"></div>

<script>
// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
		playerVars: {
			'autoplay'	 		: 1,
			'controls'	 		: 0,
			'disablekb'	 		: 0,
			'loop'			 		: 1,
			'rel'				 		: 0,
			'showinfo'	 		: 0,
			'autohide'	 		: 0,
			'modestbranding': 1
		},
		// height: '360',
		// width: '640',
    videoId: '<?php echo $video_id; ?>',
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
  player.setPlaybackQuality();
}

// 5. The API calls this function when the player's state changes.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    // setTimeout(stopVideo, 6000);
    done = true;
  }
}
function pauseVideo() {
	player.pauseVideo();
}
function playVideo() {
  player.playVideo();
}
function muteVideo() {
  player.mute();
}
function unMuteVideo() {
  player.unMute();
}
function restartVideo() {
	player.stopVideo();
	player.playVideo();
}
</script>
</div>
