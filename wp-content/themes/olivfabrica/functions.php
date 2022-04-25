
<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style( 'animation', get_template_directory_uri() . '/assets/css/animation.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

	function theme_name_scripts() {
	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), 'null', true);
}
add_theme_support('tittle-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
?>
<!--    
    
    <link type="image/x-icon" href="/img/logo/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="/img/logo/favicon.ico" rel="icon">
-->