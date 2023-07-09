<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <nav class="navbar">
        <div class="navbar-section navbar-left">
            <a href="<?php echo get_home_url(); ?>" class="nav-link">Home</a>
            <a href="<?php echo get_home_url(); ?>" class="nav-link">Products</a>
            <a href="<?php echo get_home_url(); ?>" class="nav-link">About us</a>
            <a href="<?php echo get_home_url(); ?>" class="nav-link">Contact</a>
        </div>
        <div class="logo-container">
            <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/circle-logo.png" alt="Your Logo"></a>
        </div>
        <div class="navbar-section navbar-right">
            <a href="#"><img class="navbar-icon" src="<?php echo get_template_directory_uri(); ?>/images/instagram_icon.svg" alt="Instagram"></a>
            <a href="#"><img class="navbar-icon" src="<?php echo get_template_directory_uri(); ?>/images/search_icon.svg" alt="Search"></a>
            <a href="<?php echo wc_get_cart_url(); ?>"><img class="navbar-icon" src="<?php echo get_template_directory_uri(); ?>/images/cart_icon.svg" alt="Cart"></a>
        </div>
    </nav>
</header>
