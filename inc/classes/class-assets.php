<?php
/**
 * Enqueue Theme Assets
 * @package hoha
 */

 namespace HOHA\Inc;
 use HOHA\Inc\Traits\Singleton;

 class Assets{
    use Singleton;

    protected function __construct(){
    // load classes
    $this->set_hooks();
    }

    protected function set_hooks(){
    /**
     * Actions
     */
    add_action('wp_enqueue_scripts', [ $this, 'register_styles' ]);
    add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ]);
    }

    public function register_styles(){
      wp_register_style('iconic-bootstrap', HOHA_DIR_URI. '/src/assets/css/open-iconic-bootstrap.min.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/open-iconic-bootstrap.min.css'), 'all');
      wp_enqueue_style('iconic-bootstrap');
      
      wp_register_style('animate', HOHA_DIR_URI. '/src/assets/css/animate.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/animate.css'), 'all');
      wp_enqueue_style('animate');

      wp_register_style('owl-carousel', HOHA_DIR_URI. '/src/assets/css/owl.carousel.min.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/owl.carousel.min.css'), 'all');
      wp_enqueue_style('owl-carousel');

      wp_register_style('owl-theme', HOHA_DIR_URI. '/src/assets/css/owl.theme.default.min.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/owl.theme.default.min.css'), 'all');
      wp_enqueue_style('owl-theme');

      wp_register_style('magnetic-popup', HOHA_DIR_URI. '/src/assets/css/magnific-popup.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/magnific-popup.css'), 'all');
      wp_enqueue_style('magnetic-popup');

      wp_register_style('aos', HOHA_DIR_URI. '/src/assets/css/aos.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/aos.css'), 'all');
      wp_enqueue_style('aos');

      wp_register_style('ionicons', HOHA_DIR_URI. '/src/assets/css/ionicons.min.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/ionicons.min.css'), 'all');
      wp_enqueue_style('ionicons');

      wp_register_style('bootstrap-datepicker', HOHA_DIR_URI. '/src/assets/css/bootstrap-datepicker.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/bootstrap-datepicker.css'), 'all');
      wp_enqueue_style('bootstrap-datepicker');

      wp_register_style('jquery.timepicker', HOHA_DIR_URI. '/src/assets/css/jquery.timepicker.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/jquery.timepicker.css'), 'all');
      wp_enqueue_style('jquery.timepicker');

      wp_register_style('flaticon', HOHA_DIR_URI. '/src/assets/css/flaticon.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/flaticon.css'), 'all');
      wp_enqueue_style('flaticon');

      wp_register_style('flaticon', HOHA_DIR_URI. '/src/assets/css/icomoon.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/icomoon.css'), 'all');
      wp_enqueue_style('flaticon');

      wp_register_style('styles', HOHA_DIR_URI. '/src/assets/css/style.css', [], filemtime( HOHA_DIR_PATH .'/src/assets/css/style.css'), 'all');
      wp_enqueue_style('styles');
    }

    public function register_scripts(){
      wp_register_script('popper', HOHA_DIR_URI .'/src/assets/js/popper.min.js', ['jquery'], filemtime( HOHA_DIR_PATH .'/src/assets/js/popper.min.js'), true);
      wp_enqueue_script( 'popper' );

      wp_register_script('bootstrap', HOHA_DIR_URI .'/src/assets/js/bootstrap.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/bootstrap.min.js'), true);
      wp_enqueue_script( 'bootstrap' );

      wp_register_script('jquery-easing', HOHA_DIR_URI .'/src/assets/js/jquery.easing.1.3.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/jquery.easing.1.3.js'), true);
      wp_enqueue_script( 'jquery-easing' );

      wp_register_script('jquery-waypoints', HOHA_DIR_URI .'/src/assets/js/jquery.waypoints.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/jquery.waypoints.min.js'), true);
      wp_enqueue_script( 'jquery-waypoints' );

      wp_register_script('jquery-waypoints', HOHA_DIR_URI .'/src/assets/js/jquery.waypoints.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/jquery.waypoints.min.js'), true);
      wp_enqueue_script( 'jquery-waypoints' );

      wp_register_script('jquery-stellar', HOHA_DIR_URI .'/src/assets/js/jquery.stellar.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/jquery.stellar.min.js'), true);
      wp_enqueue_script( 'jquery-stellar' );

      wp_register_script('owl-carousel', HOHA_DIR_URI .'/src/assets/js/owl.carousel.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/owl.carousel.min.js'), true);
      wp_enqueue_script( 'owl-carousel' );

      wp_register_script('magnific-popup', HOHA_DIR_URI .'/src/assets/js/jquery.magnific-popup.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/jquery.magnific-popup.min.js'), true);
      wp_enqueue_script( 'magnific-popup' );

      wp_register_script('aos', HOHA_DIR_URI .'/src/assets/js/aos.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/aos.js'), true);
      wp_enqueue_script( 'aos' );

      wp_register_script('animateNumber', HOHA_DIR_URI .'/src/assets/js/jquery.animateNumber.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/jquery.animateNumber.min.js'), true);
      wp_enqueue_script( 'animateNumber' );

      wp_register_script('animateNumber', HOHA_DIR_URI .'/src/assets/js/jquery.animateNumber.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/jquery.animateNumber.min.js'), true);
      wp_enqueue_script( 'animateNumber' );

      wp_register_script('bootstrap-datepicker', HOHA_DIR_URI .'/src/assets/js/bootstrap-datepicker.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/bootstrap-datepicker.js'), true);
      wp_enqueue_script( 'bootstrap-datepicker' );

      wp_register_script('jquery-timepicker', HOHA_DIR_URI .'/src/assets/js/jquery.timepicker.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/jquery.timepicker.min.js'), true);
      wp_enqueue_script( 'jquery-timepicker' );

      wp_register_script('scrollax', HOHA_DIR_URI .'/src/assets/js/scrollax.min.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/scrollax.min.js'), true);
      wp_enqueue_script( 'scrollax' );

      wp_register_script('googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', [], false, true);
      wp_enqueue_script( 'googleapis' );

      wp_register_script('google-map', HOHA_DIR_URI .'/src/assets/js/google-map.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/google-map.js'), true);
      wp_enqueue_script( 'google-map' );

      wp_register_script('main', HOHA_DIR_URI .'/src/assets/js/main.js', [], filemtime( HOHA_DIR_PATH .'/src/assets/js/main.js'), true);
      wp_enqueue_script( 'main' );
    }
 }
