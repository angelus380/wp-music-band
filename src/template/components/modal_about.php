<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php

$tour = 'tour';

if ( have_rows( $tour, 'options' ) ) : ?>
<div class="sub-menu">
  <a class="close-sub-menu"><span>&times;</span></a>

  <ul class="nav menu-tour">

  <?php
  while ( have_rows( $tour, 'options' ) ) : the_row();
  	$tour_date 		 = get_sub_field( 'tour_date' );
  	$tour_location = get_sub_field( 'tour_location' );
  	$tour_url 		 = get_sub_field( 'tour_url' );

  	if ( !empty( $tour_date ) and !empty( $tour_location ) ) : ?>
  		<li>
	    	<span><?php echo $tour_date; ?></span>
	    	<span><?php echo $tour_location; ?></span>

	    	<?php if ( !empty( $tour_url ) ) : ?>
	    		<a href="<?php echo esc_url( $tour_url ); ?>">Check event</a>
	    	<?php endif; ?>

	    </li>
 		<?php
 	 	endif;
  endwhile; ?>
  </ul>
</div>

<?php endif; ?>