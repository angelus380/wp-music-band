<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php
if ( have_rows( 'contact', 'options' ) ) : ?>

<div class="sub-menu">
  <a class="close-sub-menu"><span>&times;</span></a>
  <ul class="nav menu-contacts">

  <?php
  while ( have_rows( 'contact', 'options' ) ) : the_row();
  	$contact_area  = get_sub_field( 'contact_area' );
  	$contact_name  = get_sub_field( 'contact_name' );
  	$contact_email = get_sub_field( 'contact_email' );
    $contact_phone = get_sub_field( 'contact_phone' ); ?>

    <li class="row">
      <?php
      if ( !empty( $contact_area ) ) : ?>
        <span class="col-12"><?php echo $contact_area; ?></span>
      <?php
      endif;
      if ( !empty( $contact_name ) ) : ?>
         <span class="col-12 col-sm"><?php echo $contact_name; ?></span>
      <?php
      endif;
      if ( !empty( $contact_email ) ) : ?>
        <span class="col-12 col-sm"><a class="active-color" href="mailto: <?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></span>
      <?php
      endif;
      if ( !empty( $contact_phone ) ) : ?>
        <span class="col-12 col-sm"><a class="active-color" href="tel: <?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a></span>
      <?php
      endif; ?>
    </li>

 		<?php
  endwhile; ?>

  </ul>
</div>
<?php endif; ?>