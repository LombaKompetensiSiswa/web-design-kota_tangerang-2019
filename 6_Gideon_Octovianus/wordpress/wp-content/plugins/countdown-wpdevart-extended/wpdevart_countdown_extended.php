<?php
/*
* Plugin Name: Countdown Wpdevart Extended
* Plugin URI: http://wpdevart.com/wordpress-countdown-extended-version
* Description: Countdown extended is an fresh and extended version of countdown timer. You can easily create and add countdown timers to your website.
* Version: 1.0.6
* Author: wpdevart
* License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/

class wpda_countdown_extend{
	
	/*###################### Construct function ##################*/	
		
	function __construct(){		
		
		$this->define_constants();
		// include files 
		$this->include_files();
		// call filters for plugin
		$this->call_base_filters();
		// crate admin panel	
		$this->databese = new wpda_contdown_extend_databese();
		$this->create_admin();
		$this->front_end();		
	}	
	private function create_admin(){
		// create admin menu		
		$this->admin_menu = new wpda_contdown_extend_admin_panel();		
	}
	
	/*###################### Front end function ##################*/	
		
	public function front_end(){
		// create front end	
		$wpda_coundown_fornt_end = new wpdevart_countdown_extend_frontend();	
	}
	
	public function registr_requeried_scripts(){		
		wp_register_style('FontAwesome',wpda_contdown_extend_plugin_url.'includes/admin/css/font-awesome.min.css');
		wp_register_style('wpda_countdown_extended_gutenberg_css',wpda_contdown_extend_plugin_url.'includes/admin/gutenberg/style.css');
		wp_register_style( 'jquery-ui', wpda_contdown_extend_plugin_url.'includes/admin/css/jquery-ui-style.css' );		
		wp_register_script('wpdevart_countdown_extended_popup_front',wpda_contdown_extend_plugin_url.'includes/frontend/js/popup.js');
		wp_register_style( 'jquery-ui-date-time-picker-css', wpda_contdown_extend_plugin_url.'includes/admin/js/date-time-picker/jquery-ui-timepicker-addon.css' );		
		wp_register_script('jquery-ui-date-time-picker-js',wpda_contdown_extend_plugin_url.'includes/admin/js/date-time-picker/jquery-ui-timepicker-addon.js',array(),"1.0",true);
		wp_register_script('wpda_countdown_extended_gutenberg_js',wpda_contdown_extend_plugin_url.'includes/admin/gutenberg/block.js',array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor', 'underscore' ));
	}
	public function plugin_multilanguage(){	
		load_plugin_textdomain( 'wpdevart_countdown_n', FALSE, basename(dirname(__FILE__)).'/languages' );
	}
	private function call_base_filters(){
		register_activation_hook( __FILE__, array($this,'install_databese') );
		add_action('init',  array($this,'registr_requeried_scripts') );
		add_action('init',  array($this,'plugin_multilanguage') );
		
	}
  	private function define_constants(){
		 define('wpda_contdown_extend_plugin_url',trailingslashit( plugins_url('', __FILE__ ) ));
		 define('wpda_contdown_extend_plugin_path',trailingslashit( plugin_dir_path( __FILE__ ) ));
		 define('wpdevart_countdown_extended_support_url',"https://wordpress.org/support/plugin/widget-countdown");
		
	}
	private function include_files(){
		require_once(wpda_contdown_extend_plugin_path.'includes/wpdevart_library.php'); 
		require_once(wpda_contdown_extend_plugin_path.'includes/install_databese.php');
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/coundown_timer_page.php'); // for geting popup parametrs	
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/coundown_theme_page.php'); // for geting theme parametrs	
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/coundown_popup_page.php'); // for geting theme parametrs
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/admin.php'); 	
		require_once(wpda_contdown_extend_plugin_path.'includes/frontend/front_end.php');
		require_once(wpda_contdown_extend_plugin_path.'includes/wpdevart_widget.php');
	}	
	public function install_databese(){
		// new class for installing databese
		$this->databese->install_countdown_table();
		$this->databese->install_theme_tabel();
	}
}
$wpda_contdown_extend = new wpda_countdown_extend();
?>