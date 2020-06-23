<?php
function add_css_js_files() {
    wp_enqueue_style( 'main_style_file', get_stylesheet_uri());
    wp_enqueue_style( 'my_style_css', get_template_directory_uri().'/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style( 'all_min_css', get_template_directory_uri().'/css/all.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'bs_min_css', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_script( 'bs_min_js', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'add_css_js_files' );

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'subhan_menu' => __( 'Subhan Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Navigation Logo',
		'id'            => 'nav_logo',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => 'Header Social Icon',
		'id'            => 'header-social-icon',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );


  register_sidebar( array(
		'name'          => 'FooterCol1',
		'id'            => 'footer_col_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<>',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => 'FooterCol2',
		'id'            => 'footer_col_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
