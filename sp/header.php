<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name') ?><?php wp_title('|', true); ?></title>
	<link rel="pingback" media="all" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" type="text/css" href="<?=HH_THEME_URI; ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?=HH_THEME_URI; ?>/css/style.css">
	<script type="text/javascript" src="<?=HH_THEME_URI; ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=HH_THEME_URI; ?>/js/custom.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<section class="b-header">
	<header class="header">
		<div class="logo-wrap">
			<h1 class="logo"><a href="<?php echo home_url(); ?>" class="logo-link"><?php bloginfo('name'); ?></a></h1>
			<span class="logo-description"><?php bloginfo('description'); ?></span>
		</div>
		<nav class="header-menu">
			<?php wp_nav_menu( array( "menu_class" => "header-menu-list", "contaner" => "", "menu" => "header-menu" )); ?>
		</nav>
	</header>
</section>