<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<div class="sub-menu about">
  <a class="close-sub-menu"><span>&times;</span></a>

  <div>
    <?php
    $description   = get_field( 'description', 'options' ); 
    $about_title   = get_field( 'about_title', 'options' );
    $about_text    = get_field( 'about_text', 'options' );
    $band_title    = get_field( 'the_band_title', 'options' );
    $band_subtitle = get_field( 'the_band_subtitle', 'options' );
    $about_img_1   = get_field( 'about_image_1', 'options' );
    $about_img_2   = get_field( 'about_image_2', 'options' ); ?>

    <div>
      <h2 class="color"><?php echo bloginfo( 'name' ); ?></h2>
      <p><?php echo $description; ?></p>
    </div>

    <div class="bg-color d-flex flex-column flex-sm-row">
      <?php
      if ( !empty( $about_img_1 ) ) :
        $about_img_1 = $about_img_1['sizes']['large']; ?>
        <div class="about-img-1" style="background-image: url( '<?php echo $about_img_1; ?>' );"></div>
      <?php
      endif; ?>

      <div>
        <?php
        if ( !empty( $about_title ) ) : ?>
          <h3><?php echo $about_title; ?></h3>
        <?php
        endif;

        if ( !empty( $about_text ) ) : ?>
          <p><?php echo $about_text; ?></p>
        <?php
        endif; ?>
      </div>
    </div>

    <div>
      <?php
      if ( !empty( $band_title ) ) : ?>
        <h3 class="color text-center"><?php echo $band_title; ?></h3>
      <?php
      endif; ?>
    </div>

    <div class="bg-color d-flex flex-column flex-sm-row">
      <?php
      if ( !empty( $about_img_2 ) ) :
        $about_img_2 = $about_img_2['sizes']['large']; ?>
        <div class="about-img-2" style="background-image: url( '<?php echo $about_img_2; ?>' );"></div>
      <?php
      endif;

      if ( have_rows( 'members', 'options' ) ) : ?>
      <div class="half-width text-right">
        <?php
        if ( !empty( $band_subtitle ) ) : ?>
          <h4><?php echo $band_subtitle; ?></h4>
        <?php
        endif;
        while ( have_rows( 'members', 'options' ) ) : the_row();
          $member_name       = get_sub_field( 'member_name' );
          $member_instrument = get_sub_field( 'member_instrument' ); ?>

          <div>
          <?php
          if ( !empty( $member_name ) ) : ?>
            <span><?php echo $member_name; ?></span> |
          <?php
          endif;
          if ( !empty( $member_instrument ) ) : ?>
            <span><?php echo $member_instrument; ?></span>
          <?php
          endif; ?>
          </div>
        <?php
        endwhile; ?>
      </div>
      <?php
      endif; ?>
    </div>
  </div>
</div>