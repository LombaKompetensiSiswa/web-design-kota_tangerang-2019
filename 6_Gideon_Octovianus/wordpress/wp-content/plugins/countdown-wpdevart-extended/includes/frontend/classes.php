<?php
/* Clases For wordpress countdown*/

class wpdevart_countdown_forntend_main{
	protected static $id_counter=0; // for seting counter
	protected $timer; // timer information
	protected $theme; // design information
	// apply settings to 
	function __construct($timer,$theme){
		$this->timer=$timer;
		$this->theme=$theme;
		self::$id_counter++;
	}
	
	
	protected function get_texts(){
		if($this->theme["countdown_text_type"]=="standart"){
			return array(
				"week"=>$this->theme["text_for_weeks"],
				"day"=>$this->theme["text_for_day"],
				"hour"=>$this->theme["text_for_hour"],
				"minut"=>$this->theme["text_for_minute"],
				"second"=>$this->theme["text_for_second"],
			);
		}else{
			return array(
				"week"=>__("Weeks","wpdevart_countdown_n"),
				"day"=>__("Days","wpdevart_countdown_n"),
				"hour"=>__("Hours","wpdevart_countdown_n"),
				"minut"=>__("Minutes","wpdevart_countdown_n"),
				"second"=>__("Seconds","wpdevart_countdown_n"),
			);
		}
	}
	// how many seconds left
	protected function get_secons_left(){
		$this->timer['timer_end_date'];
		$exploded_date_time=explode(" ",$this->timer['timer_end_date']);
		$exploded_date=explode("/",$exploded_date_time[0]);
		$exploded_time=explode(":",$exploded_date_time[1]);
		$year=(int)$exploded_date[2];
		$month=(int)$exploded_date[1];
		$day=(int)$exploded_date[0];		
		$hour=(int)$exploded_time[0];
		$minute=(int)$exploded_time[1];
		
		// set timezone
		$curent_timezone=date_default_timezone_get();
		date_default_timezone_set($this->timer['timer_timezone']);
		// get end of date
		$end_date=mktime ($hour, $minute, 0, $month, $day, $year);
		// get curent date		
		$curent_date=mktime ((int)date("H"),(int)date("i"),(int)date("s") ,(int)date("n"), (int)date("j"),(int)date("Y"));
		// return default timezone
		date_default_timezone_set($curent_timezone);
		// calculate seconds left
		$seconds_left=$end_date-$curent_date;
		
		if($seconds_left<=0){
			// when coundown enabled repeat method
			return 0;
		}else{
			return $seconds_left;
		}
	}
	protected function get_second_from_start(){
		$this->timer['timer_end_date'];
		$exploded_date_time=explode(" ",$this->timer['timer_end_date']);
		$exploded_date=explode("/",$exploded_date_time[0]);
		$exploded_time=explode(":",$exploded_date_time[1]);
		$year=(int)$exploded_date[2];
		$month=(int)$exploded_date[1];
		$day=(int)$exploded_date[0];		
		$hour=(int)$exploded_time[0];
		$minute=(int)$exploded_time[1];
		
		// set timezone
		$curent_timezone=date_default_timezone_get();
		date_default_timezone_set($this->timer['timer_timezone']);
		// get end of date
		$end_date=mktime ($hour, $minute, 0, $month, $day, $year);
		// get curent date		
		$curent_date=mktime ((int)date("H"),(int)date("i"),(int)date("s") ,(int)date("n"), (int)date("j"),(int)date("Y"));
		// return default timezone
		date_default_timezone_set($curent_timezone);
		// calculate seconds left
		$seconds_left=$end_date-$curent_date;
		
		if($seconds_left<=0){
			return 0;
		}else{
			return max($seconds_left,($end_date-$this->timer['start_time']));			
		}
	}
}

// standart_countdown class
class wpdevart_countdown_forntend_stanadart_view extends wpdevart_countdown_forntend_main{

	public function create_countdown(){
		$params_array=array();
		$params_array["seconds_left"]=$this->get_secons_left();
		$params_array["after_countdown_end_type"]=$this->timer["after_countdown_end_type"];;
		$params_array["after_countdown_text"]=$this->timer["after_countdown_text"];
		$params_array["display_days"]=array('day'=>'day','hour'=>'hour','minut'=>'minut','second'=>'second');
		$params_array["gorup_animation"]=$this->theme["countdown_standart_gorup_animation"];
		$params_array["inline"]=$this->theme["countdown_standart_display_inline"];		
		$params_array["effect"]=($this->theme["countdown_standart_animation_type"]=="random")?wpda_contdown_extend_library::get_randowm_animation():$this->theme["countdown_standart_animation_type"];
		$params_array["display_days_texts"]=$this->get_texts();
		$params_converted_to_js_objec=json_encode($params_array);
		$countdown_html='<div class="wpdevart_countdown_extend_standart" id="wpdevart_countdown_'.self::$id_counter.'"></div>';
		$countdown_script='<script>jQuery("#wpdevart_countdown_'.self::$id_counter.'").wpdevart_countdown_extend_standart('.$params_converted_to_js_objec.')</script>';
		$countdown_style='<style>'.$this->get_css('wpdevart_countdown_'.self::$id_counter).'</style>';
		return $countdown_html.$countdown_script.$countdown_style;
	}
	
	public function get_css($main_id){
		$main_id="#".$main_id;
		$css="";
		$css.=$main_id."{width:".$this->theme["countdown_global_width"].$this->theme["countdown_global_width_metrick"].";}";
		$css.=$main_id." .wpdevart_countdown_extend_element{min-width:".$this->theme["countdown_standart_elements_width"]."px;}";
		$css.=$main_id." .wpdevart_countdown_extend_element{margin-right:".$this->theme["countdown_standart_elements_distance"]."px;}";
		//$css.=$main_id." .wpdevart_countdown_extend_element:last-child{margin-right:0px;}";
		$css.=$main_id." .time_left_extended{";
		$css.="background-color:#ffffff;";
		$css.="font-size:".$this->theme["countdown_standart_time_font_size"]."px;";
		$css.="color:#1e73be;";
		$css.="padding:".$this->theme["countdown_standart_time_padding"]["top"]."px ".$this->theme["countdown_standart_time_padding"]["right"]."px ".$this->theme["countdown_standart_time_padding"]["bottom"]."px ".$this->theme["countdown_standart_time_padding"]["left"]."px;";
		$css.="margin:".$this->theme["countdown_standart_time_margin"]["top"]."px ".$this->theme["countdown_standart_time_margin"]["right"]."px ".$this->theme["countdown_standart_time_margin"]["bottom"]."px ".$this->theme["countdown_standart_time_margin"]["left"]."px;";
		$css.="border-width:".$this->theme["countdown_standart_time_border_width"]."px;";
		$css.="border-radius:".$this->theme["countdown_standart_time_border_radius"]."px;";
		$css.="border-color:#000000;";
		$css.="}";
		$css.=$main_id." .time_text{";
		$css.="background-color:#ffffff;";
		$css.="font-size:".$this->theme["countdown_standart_time_text_font_size"]."px;";
		$css.="color:000000;";	
		$css.="padding:".$this->theme["countdown_standart_time_text_padding"]["top"]."px ".$this->theme["countdown_standart_time_text_padding"]["right"]."px ".$this->theme["countdown_standart_time_text_padding"]["bottom"]."px ".$this->theme["countdown_standart_time_text_padding"]["left"]."px;";
		$css.="margin:".$this->theme["countdown_standart_time_text_margin"]["top"]."px ".$this->theme["countdown_standart_time_text_margin"]["right"]."px ".$this->theme["countdown_standart_time_text_margin"]["bottom"]."px ".$this->theme["countdown_standart_time_text_margin"]["left"]."px;";
		$css.="border-width:".$this->theme["countdown_standart_time_text_border_width"]."px;";
		$css.="border-radius:".$this->theme["countdown_standart_time_text_border_radius"]."px;";
		$css.="border-color:000000;";
		$css.="}";
		$css.=$main_id." .wpdevart_countdown_extend_element{";
		$css.="visibility: visible;";
		$css.="}";		
		return $css;
	}
}




?>