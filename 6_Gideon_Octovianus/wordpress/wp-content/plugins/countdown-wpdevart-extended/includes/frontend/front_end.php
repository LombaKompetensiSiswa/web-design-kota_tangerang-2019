<?php	 
class wpdevart_countdown_extend_frontend{
// previus defined admin constants
// wpda_contdown_extend_plugin_url
// wpda_contdown_extend_plugin_path
	private static $unique_prefix=0;
	function __construct(){
		$this->call_filters();
	}
	private function call_filters(){
		$this->include_files();		
		add_filter('wp_head',array($this,'include_scripts'),0);		
		add_shortcode('wpda_contdown_extend', array($this,'shortcode'));
		
	}
	public function include_scripts(){
		wp_enqueue_script('jquery');
		wp_enqueue_script('wpdevart_countdown_extendex_standart',wpda_contdown_extend_plugin_url.'includes/frontend/js/standart_countdown.js');
		wp_enqueue_style('FontAwesome');		
		wp_enqueue_style('wpdevart_countdown_extend_front',wpda_contdown_extend_plugin_url.'includes/frontend/css/front_end.css');
	}
	private function include_files(){
		require_once(wpda_contdown_extend_plugin_path.'includes/frontend/classes.php');
	}
	private function controller($timer_id,$theme_id){
		$timer=$this->get_timer($timer_id);
		if($timer==null){
			return "invalid timer id";
		}
		$timer=json_decode($timer->option_value,true);
		$theme=$this->get_theme($theme_id);
		$theme=json_decode($theme->option_value,true);
		// get from admin default timer value
		$timer_default=wpda_contdown_extend_timer_page::get_default_values_array();
		// get from admin default theme value
		$theme_default=wpda_contdown_extend_theme_page::get_default_values_array();
		$timer=array_merge($timer_default,$timer);
		$theme=array_merge($theme_default,$theme);
		
		$standart_countdown_object= new wpdevart_countdown_forntend_stanadart_view($timer,$theme);
		return $standart_countdown_object->create_countdown();
	}
	private function get_timer($timer_id){
		global $wpdb;
		return $wpdb->get_row($wpdb->prepare("SELECT * FROM ".wpda_contdown_extend_databese::$table_names["timer"]." WHERE `id`=%d",$timer_id));		
	}
	private function get_theme($theme_id){
		global $wpdb;
		$theme=$wpdb->get_row($wpdb->prepare("SELECT * FROM ".wpda_contdown_extend_databese::$table_names["theme"]." WHERE `id`=%d",$theme_id));
		if($theme==NULL){
			$theme=$wpdb->get_row("SELECT * FROM ".wpda_contdown_extend_databese::$table_names["theme"]." WHERE `default`=1");
		}
		return $theme;
		
	}
	public function shortcode($atts){
		if(!isset($atts['timer_id'])){
			return "<h2>Timer not selected</h2>";
		}
		if(!isset($atts['theme_id'])){
			return "<h2>Theme not selected</h2>";
		}
		return $this->controller($atts['timer_id'],$atts['theme_id']);		
	}
}






?>