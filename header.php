<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<?php wp_head(); ?>
</head>

<body>
<header class="hero-header">
<?php require get_template_directory() . '/includes/navbar.php';?>
</header>
<div id="hero-content" class="hero-content">
		<div class="hero-100">
