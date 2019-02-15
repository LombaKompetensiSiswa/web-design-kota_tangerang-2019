<?php

// previus defined admin constants
// wpda_contdown_extend_plugin_url
// wpda_contdown_extend_plugin_path
class wpda_countdown_extended_gutenberg{	
	function __construct(){
		$this->hooks_for_gutenberg();
	}
	private function hooks_for_gutenberg(){
		add_action( 'init', array($this,'guthenberg_init') );
	}
	public function guthenberg_init(){
		if ( ! function_exists( 'register_block_type' ) ) {
		// Gutenberg is not active.
		return;
		}
		register_block_type( 'wpdevart-countdownextended/countdown-extended', array(
			'style' => 'wpda_countdown_extended_gutenberg_css',
			'editor_script' => 'wpda_countdown_extended_gutenberg_js',
		) );
		wp_add_inline_script(
			'wpda_countdown_extended_gutenberg_js',
			sprintf('var wpda_countdown_extended_gutenberg = { timers: %s, themes: %s,other_data: %s};', json_encode($this->get_timers(),JSON_PRETTY_PRINT), json_encode($this->get_themes(),JSON_PRETTY_PRINT), json_encode($this->other_dates(),JSON_PRETTY_PRINT)),
			'before'
		);
	}
	private function get_timers(){
		
		global $wpdb;
		$timers=$wpdb->get_results('SELECT `id`,`name` FROM ' . wpda_contdown_extend_databese::$table_names['timer']);
		$array=array();
		foreach($timers as $timer){
			$array[$timer->id]=$timer->name;
		}
		return $array;
	}
	private function other_dates(){
		$array=array('icon_src'=>wpda_contdown_extend_plugin_url."includes/admin/images/icon.svg");
		return $array;
	}
	private function get_themes(){
		global $wpdb;
		$themes=$wpdb->get_results('SELECT `id`,`name` FROM ' . wpda_contdown_extend_databese::$table_names['theme']);
		foreach($themes as $theme){
			$array[$theme->id]=$theme->name;
		}
		return $array;
	}
	
}

