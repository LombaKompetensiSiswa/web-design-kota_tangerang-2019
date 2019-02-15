<?php
//instaling databese
class wpda_contdown_extend_databese{
	public static $table_names;
	public static $popup_settings;
	function __construct(){
		global $wpdb;
		self::$table_names=array(
			'timer'=>$wpdb->prefix.'wpda_contdown_extend_timer',
			'theme'=>$wpdb->prefix.'wpda_contdown_extend_theme'
		);
	}
	public function install_countdown_table(){
		global $wpdb;
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		//install countdown timer databese
		$table_name =  self::$table_names['timer'];	
		$charset_collate = $wpdb->get_charset_collate();
		//img
		$sql = "CREATE TABLE IF NOT EXISTS $table_name (
		`id` int(10) NOT NULL AUTO_INCREMENT,
		  `name` varchar(512) NOT NULL,
		  `option_value` longtext NOT NULL,
			UNIQUE KEY id (id)		
		) $charset_collate;";	
		dbDelta( $sql );
	}
	
	/*###################### Install theme table function ##################*/	
		
	public function install_theme_tabel(){
		global $wpdb;
		//install countdown theme databese
		$table_name =  self::$table_names['theme'];	
		$charset_collate = $wpdb->get_charset_collate();
		$sql = "CREATE TABLE IF NOT EXISTS $table_name (
		`id` int(10) NOT NULL AUTO_INCREMENT,
		  `name` varchar(512) NOT NULL,
		  `option_value` longtext NOT NULL,
		  `default` tinyint(4) NOT NULL,
			UNIQUE KEY id (id)		
		) $charset_collate;";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );	
		$this->insert_to_theme_default_values();
	}
	private function insert_to_theme_default_values(){
		global $wpdb;
		$isset_theme=$wpdb->get_var("SELECT `id` FROM ".self::$table_names['theme'] ." WHERE id=1");
		if(!$isset_theme){
			$install_theme='{"name":"Default","countdown_type":"standart","countdown_global_width":"100","countdown_global_width_metrick":"%","countdown_date_display":{"day":"day","hour":"hour","minut":"minut","second":"second"},"countdown_text_type":"po_mo","text_for_weeks":"Weeks","text_for_day":"Days","text_for_hour":"Hours","text_for_minute":"Minutes","text_for_second":"Seconds","countdown_standart_elements_width":"65","countdown_standart_elements_distance":"4","countdown_standart_time_font_size":"22","countdown_standart_time_text_font_size":"11","countdown_standart_time_padding":{"top":"0","right":"0","bottom":"0","left":"0"},"countdown_standart_time_text_padding":{"top":"0","right":"0","bottom":"0","left":"0"},"countdown_standart_time_margin":{"top":"0","right":"0","bottom":"0","left":"0"},"countdown_standart_time_text_margin":{"top":"0","right":"0","bottom":"0","left":"0"},"countdown_standart_time_border_width":"1","countdown_standart_time_text_border_width":"0","countdown_standart_time_border_radius":"3","countdown_standart_time_text_border_radius":"0","countdown_standart_time_bg_color":"#dff5f9","countdown_standart_time_text_bg_color":"#FFFFFF","countdown_standart_time_color":"#1e73be","countdown_standart_time_text_color":"#212121","countdown_standart_time_font_famely":"Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Arial,sans-serif","countdown_standart_time_text_font_famely":"Segoe UI","countdown_standart_time_border_color":"#1e73be","countdown_standart_time_text_border_color":"#000000","countdown_standart_display_inline":"0","countdown_standart_gorup_animation":"one","countdown_standart_animation_type":"random","countdown_vertical_time_font_size":"35","countdown_vertical_elements_distance":"12","countdown_vertical_time_font_famely":"Rockwell, Arial Black, Arial Bold, Arial, sans-serif","countdown_vertical_time_color":"#000000","countdown_vertical_background_color":"#79eef2","countdown_vertical_time_border_width":"1","countdown_vertical_time_border_color":"#1eacbc","countdown_vertical_time_text_bg_color":"#FFFFFF","countdown_vertical_time_text_font_size":"13","countdown_vertical_time_text_color":"#000000","countdown_vertical_time_text_font_famely":"Palatino Linotype,Palatino,Georgia,Times New Roman,Times,serif","countdown_vertical_time_text_padding":{"top":"0","right":"0","bottom":"2","left":"0"},"countdown_vertical_time_text_margin":{"top":"0","right":"3","bottom":"5","left":"3"},"countdown_vertical_time_text_border_width":"0","countdown_vertical_time_text_border_radius":"6","countdown_vertical_time_text_border_color":"#0c0c0c","countdown_vertical_display_inline":"0","countdown_vertical_gorup_animation":"one","countdown_vertical_animation_type":"random","countdown_circle_elements_width_height":"115","countdown_circle_elements_distance":"5","countdown_circle_background_color":"#b3e2e2","countdown_circle_background_color_opacity":"100","countdown_circle_border_color_outside":"#ededed","countdown_circle_border_color_inside":"#0bd9e8","countdown_circle_width_parcents":"9","countdown_circle_type_of_rounding":"round","countdown_circle_border_direction":"right","countdown_circle_time_font_size":"40","countdown_circle_time_text_font_size":"17","countdown_circle_time_color":"#000000","countdown_circle_time_text_color":"#39417d","countdown_circle_time_font_famely":"American Typewriter,Georgia,serif","countdown_circle_time_text_font_famely":"Constantia,Georgia,Times New Roman,Times,serif","countdown_circle_time_margin":{"top":"10","bottom":"0"},"countdown_circle_time_text_padding":{"top":"0","right":"0","bottom":"0","left":"0"},"countdown_circle_time_text_margin":{"top":"0","bottom":"24"},"countdown_circle_display_inline":"0","countdown_circle_gorup_animation":"one","countdown_circle_animation_type":"random"}';
			$wpdb->insert( self::$table_names['theme'], 
				array( 
					'id' => 1,
					'name' => "Default",
					'option_value' => $install_theme,
					'default' => 1,				
				), 
				array( 
					'%d',
					'%s', 
					'%s',
					'%d',
				) 
			);
		}
	}
} 
?>