<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php get_header(); ?>

<nav class="menu row text-center">
	<div class="col-6 col-sm-12 text-center">

	<?php // brand
	get_template_part( 'components/brand' ); ?>

	</div>
	<div class="col-6 col-sm-12 player-menu">

	<?php // controls
	get_template_part( 'components/player_controls' ); ?>

	</div>
</nav>

<?php // vídeo
get_template_part( 'components/video' ); ?>

<?php // menu ?>

<?php get_footer(); ?>