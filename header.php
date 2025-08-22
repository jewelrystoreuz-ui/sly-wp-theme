<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <nav class="primary-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'container'      => false,
            )
        );
        ?>
    </nav>
    <div class="header-utilities">
        <div class="language-switcher"><!-- Language Switcher --></div>
        <?php if ( class_exists( 'WooCommerce' ) ) : ?>
        <div class="header-cart"><!-- WooCommerce Cart --></div>
        <?php endif; ?>
    </div>
</header>
