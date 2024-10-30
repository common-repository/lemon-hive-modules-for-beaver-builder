<?php
	
/**
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 */
class LH_Custom_Modules_Loader {
	
	/**
	 * Initializes the class once all plugins have loaded.
	 */
	static public function init() {
		add_action( 'plugins_loaded', __CLASS__ . '::setup_hooks' );
	}
	
	/**
	 * Setup hooks if the builder is installed and activated.
	 */
	static public function setup_hooks() {
		if ( ! class_exists( 'FLBuilder' ) ) {
			return;	
		}
		
		// Load custom modules.
		add_action( 'init', __CLASS__ . '::load_modules' );

        // Enqueue Script and Style
        add_action('wp_enqueue_scripts', __CLASS__ . '::lh_modules_assets');
	}
	
	/**
	 * Loads our custom modules.
	 */
	static public function load_modules() {
		require_once LH_MODULE_DIR . 'modules/lh-dual-heading/lh-dual-heading.php';
		require_once LH_MODULE_DIR . 'modules/lh-flip-box/lh-flip-box.php';
		require_once LH_MODULE_DIR . 'modules/lh-timeline/lh-timeline.php';
		require_once LH_MODULE_DIR . 'modules/lh-testimonial-quote/lh-testimonial-quote.php';
		require_once LH_MODULE_DIR . 'modules/lh-recent-post/lh-recent-post.php';
		require_once LH_MODULE_DIR . 'modules/lh-services/lh-services.php';
		require_once LH_MODULE_DIR . 'modules/lh-team/lh-team.php';
		require_once LH_MODULE_DIR . 'modules/lh-gallery/lh-gallery.php';
		require_once LH_MODULE_DIR . 'modules/lh-hero-section/lh-hero-section.php';
		require_once LH_MODULE_DIR . 'modules/lh-cta/lh-cta.php';
	}
	

    /**
     * Enqueues custom field assets
     */

    static public function lh_modules_assets() {
        wp_register_style( 'bootstrap', LH_MODULE_URL . 'assets/css/bootstrap.min.css',[],'4.6.0');
        wp_register_script( 'bootstrap', LH_MODULE_URL . 'assets/js/bootstrap.min.js',['jquery'],'4.6.0', true);
        wp_register_style( 'slick', LH_MODULE_URL . 'assets/css/slick.css',[],'1.8.1');
        wp_register_style( 'justifiedGallery', LH_MODULE_URL . 'assets/css/justifiedGallery.min.css',[],'2.5.0');
        wp_register_style( 'magnific', LH_MODULE_URL . 'assets/css/magnific-popup.css',[],'1.5.0');
        wp_register_script( 'slick', LH_MODULE_URL . 'assets/js/slick.min.js',['jquery'],'1.8.1', true);
        wp_register_script( 'justifiedGallery', LH_MODULE_URL . 'assets/js/jquery.justifiedGallery.js',['jquery'],'2.5.0', true);
        wp_register_script( 'magnific', LH_MODULE_URL . 'assets/js/jquery.magnific-popup.js',['jquery'],'1.5.0', true);
        wp_register_style( 'swiper-css', LH_MODULE_URL . 'assets/css/swiper.min.css',[],'1.8.1');
        wp_register_script( 'slick', LH_MODULE_URL . 'assets/js/slick.min.js',['jquery'],'1.8.1', true);
        wp_register_script( 'swiper-js', LH_MODULE_URL . 'assets/js/swiper.min.js',['jquery'],'8.1.0', false);
    }
}

LH_Custom_Modules_Loader::init();