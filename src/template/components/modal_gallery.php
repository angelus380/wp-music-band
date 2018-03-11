<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php

$images = get_field( 'img_slide', 'options' );
$size = 'large';

if ( $images ): ?>

<div class="sub-menu">
  <a class="close-sub-menu"><span>&times;</span></a>
  <div class="menu-gallery grid">
    <?php foreach( $images as $image ): ?>
    <div class="grid-item">
      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<?php endif; ?>