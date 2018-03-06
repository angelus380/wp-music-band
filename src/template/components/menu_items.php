<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php

/*

	MOBILE MENU ITEMS

*/

$buttons = 'menu_buttons';

if ( have_rows( $buttons, 'options' ) ) : ?>

  <ul class="nav mobile-menu-items">
  <?php
  while ( have_rows( $buttons, 'options' ) ) : the_row();
  	$btn_text = get_sub_field( 'btn_text' );
  	$btn_url  = get_sub_field( 'btn_url' );

  	if ( !empty( $btn_text ) and !empty( $btn_url ) ) :
  		$is_hash = substr( $btn_url, 0, 1 );

  		# sanitize url
  		if ( $is_hash == '#' ) : ?>
	    <li>
	    	<a data-target="<?php echo $btn_url; ?>"><?php echo $btn_text; ?></a>

        <?php

        $template = 'components/modal_'.strtolower( $btn_text );
        get_template_part( $template ); ?>

      </li>

			<?php
  		else : ?>
	    <li>
	    	<a href="<?php echo esc_url( $btn_url ); ?>"><?php echo $btn_text; ?></a></li>

  		<?php
  		endif;
    endif;
  endwhile; ?>
  </ul>

<?php endif;
/*

  BROWSER MENU ITEMS

*/
if ( have_rows( $buttons, 'options' ) ) : ?>

  <ul class="nav browser-menu-items">
  <?php
  while ( have_rows( $buttons, 'options' ) ) : the_row();
    $btn_text = get_sub_field( 'btn_text' );
    $btn_url  = get_sub_field( 'btn_url' );

    if ( !empty( $btn_text ) and !empty( $btn_url ) ) :
      $is_hash = substr( $btn_url, 0, 1 );

      # sanitize url
      if ( $is_hash == '#' ) : ?>
      <li>
        <a data-target="<?php echo $btn_url; ?>"><?php echo $btn_text; ?></a></li>

      <?php
      else : ?>
      <li>
        <a href="<?php echo esc_url( $btn_url ); ?>"><?php echo $btn_text; ?></a></li>

      <?php
      endif;
    endif;
  endwhile; ?>
  </ul>

<?php endif; ?>