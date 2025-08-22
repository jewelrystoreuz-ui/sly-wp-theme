<?php get_header(); ?>
<section class="hero">
    <video class="hero-video" autoplay muted loop playsinline>
        <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/sly-main.mp4' ); ?>" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <div class="hero-content">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>
    </div>
</section>
<?php get_footer(); ?>
