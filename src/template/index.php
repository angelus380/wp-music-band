<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php get_header(); ?>

<?php // social
get_template_part( 'components/social_network' ); ?>

<?php // brand
get_template_part( 'components/brand' ); ?>

<?php // controls
get_template_part( 'components/player_controls' ); ?>

<!-- <nav class="menu row text-center">
	<div class="col-6 col-sm-12 text-center">



	</div>
	<div class="col-6 col-sm-12 player-menu">



	</div>
</nav> -->

<?php // vídeo
get_template_part( 'components/video' ); ?>

<?php // menu
get_template_part( 'components/menu_items' ); ?>

<?php get_footer(); ?>