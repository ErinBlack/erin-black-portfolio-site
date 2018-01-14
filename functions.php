<?php
/**
 * Erin Black portfolio's functions and definitions
 *
 * @package eb_portfolio
 * @since eb_portfolio 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */

if(!function_exists('eb_portfolio_setup')):
	/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function eb_portfolio_setup() {
	/**
		* Make theme available for translation.
		* Translations can be placed in the /languages/ directory.
		*/

		load_theme_textdomain('eb_portfolio', get_template_directory() . '/languages');

		/**
     * Add default posts and comments RSS feed links to <head>.
     */

		 add_theme_support( 'automatic-feed-links' );

		 /**
 	 	* Enable support for post thumbnails and featured images.
 		*/

		add_theme_support('post-thumbnails');

		/**
     * Add support for two custom navigation menus.
     */

	 register_nav_menus(array(
		 'primary' => __('Primary Menu', 'eb_portfolio'),
		 'secondary' => __('Secondary Menu', 'eb_portfolio')
	 ));

	 /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */

		 add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // eb_portfolio_setup
add_action( 'after_setup_theme', 'eb_portfolio_setup' );


//getting style.css
function portfolio_scripts(){
	//echo get_stylesheet_uri();
	// wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );
	wp_enqueue_style( 'portfolio-style',  get_stylesheet_uri());
	wp_enqueue_style( 'headerImg', get_template_directory_uri() . '/css/modules/headerImg.css',false,'1.1','all');
	wp_enqueue_style('google-webfonts-questrial', 'https://fonts.googleapis.com/css?family=Questrial' );
	wp_enqueue_style('google-webfonts-raleway', 'https://fonts.googleapis.com/css?family=Raleway' );
	wp_enqueue_style('google-webfonts-sanchez', 'https://fonts.googleapis.com/css?family=Sanchez' );
}

// Function for creating Widegets
function create_widget($name, $id, $description) {

    register_sidebar(array(
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div id="'.$id.'" class="widget %1$s %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

}

// Create the actual widgets
create_widget("Header", "uptop", "Displays in the header of the site, above the title");

add_action('wp_enqueue_scripts', 'portfolio_scripts');
