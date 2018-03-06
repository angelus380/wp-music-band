<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php
$brand = get_field( 'logo', 'options' );
$brand_url = get_field( 'logo_url', 'options' );
$anchor = '<a>';

if ( !empty( $brand_url ) ) {
	$brand_url = esc_url( $brand_url );
	$anchor 	 = '<a href="'.$brand_url.'">';
}

if ( !empty( $brand ) ) {
	$hidden = ' text-hide';
} ?>

<h1 class="brand text-center<?php echo $hidden; ?>">
	<?php echo $anchor; # create <a> for each case ?>

	<?php if ( !empty( $brand ) ) : ?>
		<img src="<?php echo $brand['sizes']['large']; ?>"></a>
		<p><?php bloginfo( 'name' ); ?></p>

	<?php else : ?>
		<p class="h1"><?php bloginfo( 'name' ); ?></p></a>

	<?php endif; ?>
</h1>
