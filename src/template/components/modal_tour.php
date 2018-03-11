<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php
if ( have_rows( 'tour', 'options' ) ) : ?>

<div class="sub-menu">
  <a class="close-sub-menu"><span>&times;</span></a>
  <ul class="nav menu-tour">

  <?php
  while ( have_rows( 'tour', 'options' ) ) : the_row();
  	$tour_date 		 = get_sub_field( 'tour_date', false, false );
    $tour_date     = strtotime( $tour_date );
    $tour_date     = date( 'd F Y', $tour_date );
  	$tour_location = get_sub_field( 'tour_location' );
  	$tour_url 		 = get_sub_field( 'tour_url' );

  	if ( !empty( $tour_date ) and !empty( $tour_location ) ) : ?>
  		<li class="row">
	    	<span class="col-sm-4"><?php echo $tour_date; ?></span>
	    	<span class="col"><?php echo $tour_location; ?></span>

	    	<?php if ( !empty( $tour_url ) ) : ?>
          <span class="col-4 col-sm-3"><a class="color active-color active-border-color" href="<?php echo esc_url( $tour_url ); ?>">Check event</a></span>
	    	<?php endif; ?>

	    </li>
 		<?php
 	 	endif;
  endwhile; ?>
  </ul>
</div>

<?php endif; ?>