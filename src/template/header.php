<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" >
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/main_logo.png" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/main_logo.png" rel="apple-touch-icon-precomposed">

  <meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
  <meta name="description" content="<?php echo get_field( 'description', 'options', false ); ?>" />
  <meta property="og:description" content="<?php echo get_field( 'description', 'options', false ); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo get_permalink(); ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri().'/screenshot.png';?>"/>

	<title><?php bloginfo( 'name' ) ?></title>
	
  <?php wp_head(); ?>

</head>

<?php

# get field color
$main_color = get_field( 'site_color', 'options' );
$fade_color = hex2rgba( $main_color, .8 );
$main_color = hex2rgba( $main_color );

# add style tag and color classes
echo '<style type="text/css">';

echo '.color { color:'.$main_color.'!important }';
echo '.bg-color { background-color:'.$main_color.'!important }';
echo '.border-color { border-color:'.$main_color.'!important }';
echo '.active-color:hover { color:'.$main_color.'!important }';
echo '.active-border-color:hover { border-color:'.$main_color.'!important }';

echo '</style>'; ?>

<body <?php body_class(); ?>>