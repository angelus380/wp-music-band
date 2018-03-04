<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php
$brand = get_field( 'logo', 'options' ); ?>

<?php if ( !empty( $brand ) ) : ?>
<h1 class="brand text-hide text-center">
	<a href="">
		<img class="brand" src="<?php echo $brand['sizes']['large']; ?>"></a>
	<p><?php bloginfo( 'name' ); ?></p>
</h1>
<?php else : ?>
<h1>
	
</h1>
<?php endif; ?>