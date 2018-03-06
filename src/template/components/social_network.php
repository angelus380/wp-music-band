<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php

$social = 'social_networks';

if ( have_rows( $social, 'options' ) ) : ?>

  <ul class="nav social-networks">
  <?php
  while ( have_rows( $social, 'options' ) ) : the_row();
  	$social_icon = get_sub_field( 'social_icon' );
  	$social_url  = get_sub_field( 'social_url' );

  	if ( !empty( $social_icon ) and !empty( $social_url ) ) : ?>
    <li>
    	<a href="<?php echo esc_url( $social_url ); ?>">
    		<i class="<?php echo $social_icon; ?>"></i></a></li>

    <?php
    endif;
  endwhile; ?>
  </ul>

<?php endif; ?>