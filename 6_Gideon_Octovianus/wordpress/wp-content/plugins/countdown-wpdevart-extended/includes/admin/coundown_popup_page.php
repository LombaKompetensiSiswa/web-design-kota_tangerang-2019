<?php
class wpda_contdown_extend_popup_page{
	
	private $options;
	private $abstract_options;
	private static $text_parametrs=array('parametrs_sucsses_saved'=>'Successfully saved.','error_in_saving'=>'can\'t save "%s" plugin parameter<br>','missing_title'=>'Type Message Title','missing_fromname'=>'Type From Name','missing_frommail'=>'Type From mail','mising_massage'=>'Type Message','sucsses_mailed'=>'Your message was sent successfully.',	'error_maied'=>'error sending email','authorize_problem' => 'Authorization Problem'	);
	
	function __construct(){		
		$this->options=self::return_params_array();	
		$this->generete_abstract_params_list();
		$this->generete_popup_settings();
	}
	
	public static function return_params_array(){
		global $wpdb;
		$timers=$wpdb->get_results('SELECT `id`,`name` FROM ' . wpda_contdown_extend_databese::$table_names['timer']);
		$themes=$wpdb->get_results('SELECT `id`,`name` FROM ' . wpda_contdown_extend_databese::$table_names['theme']);
		$timers_array=array();
		$themes_array=array();
		foreach($timers as $timer){
			$timers_array[$timer->id]=$timer->name;
		}
		foreach($themes as $theme){
			$themes_array[$theme->id]=$theme->name; 
		}
		return array(
			"general_options"=>array(
				"heading_name"=>"General",
				"location"=>"left",
				"image"=>wpda_contdown_extend_plugin_url."left",
				"params"=>array(
					"general_show_popup_action"=>array(
						"title"=>"Show/Hide countdown from below list",
						"description"=>"Choose the action to show or hide countdown from below list.",
						"values"=>array("show"=>"Show from Below selecte list","hide"=>"Hide from Below selecte list"),
						"default_value"=>"hide",						
						"function_name"=>"simple_select",
						"pro"=>true,
					),	
					"general_show_popup_on_multiple_1"=>array(
						"title"=>"Select the list",
						"description"=>"Click on the field and then choose something from list.",
						"default_value"=>'',						
						"function_name"=>"simple_input",
						"pro"=>true,
					),	
					"general_show_quantity"=>array(
						"title"=>"Countdown popup display periodicity",
						"description"=>"Select the countdown popup display periodicity.",
						"values"=>array(
							"one_time"=>"Оne Тime",
							"on_refresh"=>"Еvery Тime",	
						),
						"default_value"=>"on_refresh",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
					"general_show_popup_after"=>array(
						"title"=>"Time to show the countdown popup",
						"description"=>"Type the time when countdown popup will appear.",				
						"function_name"=>"simple_input",
						"small_text"=>"(seconds)",
						"default_value"=>"1",
						"type"=>"number",
						"pro"=>true,
					),
					"general_element_ordering"=>array(
						"title"=>"Countdown popup elements ordering(hiding)",
						"description"=>"Choose the countdown popup elements ordering, also you can hide Popup countdown elements by click on exact element.",				
						"function_name"=>"oredering",
						"values"=>array(
							"title"=>"Title",
							"message"=>"Message",
							"countdown"=>"Countdown",
						),
						"default_value"=>'{"title":[1,"title"],"message":[1,"message"],"countdown":[1,"countdown"]}',
						"type"=>"number",
						"pro"=>true,
					),
					"general_scrolling_content"=>array(
						"title"=>"Visible or hidden scroll inside popup",
						"description"=>"Select visible or hidden scroll inside popup",
						"values"=>array(
							"yes"=>"Visible",			
							"no"=>"Hidden",
						),
						"default_value"=>"no",						
						"function_name"=>"simple_select",
						"pro"=>true,
					),	
				)
			),
			"overlay_options"=>array(
				"heading_name"=>"Overlay",
				"location"=>"right",
				"image"=>wpda_contdown_extend_plugin_url."left",
				"params"=>array(
					"overlay_show_hide"=>array(
						"title"=>"Show overlay",
						"description"=>"Show/Hide Overlay.",
						"values"=>array(
							"1"=>"Show",
							"0"=>"Hide",
						),
						"default_value"=>"true",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
					"overlay_trancparency"=>array(
						"title"=>"Overlay transparency",
						"description"=>"Set the overlay transparency.",						
						"default_value"=>"30",
						"small_text"=>"(%)",
						"function_name"=>"range_input",
						"pro"=>true,
					),	
					"overlay_top_bg_color"=>array(
						"title"=>"Overlay top background color",
						"description"=>"Choose overlay top background color",
						"default_value"=>"#000000",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"overlay_top_bottom_color"=>array(
						"title"=>"Overlay bottom background color",
						"description"=>"Choose overlay bottom background color.",
						"default_value"=>"#000000",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"overlay_fade_efect_time"=>array(
						"title"=>"Overlay fade effect time",
						"description"=>"Set overlay fade effect time.",				
						"function_name"=>"simple_input",
						"small_text"=>"(Miliseconds)",
						"default_value"=>"500",		
						"pro"=>true,
					)
			
				)
			),	
			"popup_options"=>array(
				"heading_name"=>"Popup",
				"location"=>"right",
				"image"=>wpda_contdown_extend_plugin_url."left",
				"params"=>array(
					"popup_width"=>array(
						"title"=>"Width",
						"description"=>"Type width for popup",						
						"default_value"=>"550",
						"small_text"=>"(Px)",
						"type"=>"number",
						"function_name"=>"simple_input",
						"pro"=>true,
					),	
					"popup_height"=>array(
						"title"=>"Height",
						"description"=>"Type height for popup",						
						"default_value"=>"300",
						"small_text"=>"(Px)",
						"type"=>"number",
						"function_name"=>"simple_input",
						"pro"=>true,
					),	
					"popup_position"=>array(
						"title"=>"Popup position",
						"description"=>"Select popup position",
						"values"=>array(
							"1"=>"Top Left",
							"2"=>"Top center",
							"3"=>"Top right",
							"4"=>"Middle Left",
							"5"=>"Middle center",
							"6"=>"Middle right",
							"7"=>"Bottom Left",
							"8"=>"Bottom center",
							"9"=>"Bottom right",	
						),
						"default_value"=>"5",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
					"popup_fixed_position"=>array(
						"title"=>"Popup fixed position",
						"description"=>"Enable/Disable fixed position for Popup",
						"values"=>array(
							"true"=>"Enable",
							"false"=>"Dsiable",
						),
						"default_value"=>"true",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
					"popup_outside_margin"=>array(
						"title"=>"Popup distance from window",
						"description"=>"Type Popup distance from window when position is 1,2,3,4,6,7,8,9(except Middle center position)",				
						"function_name"=>"simple_input",
						"small_text"=>"(Px)",
						"default_value"=>"20",	
						"pro"=>true,
					),
					"popup_border_color"=>array(
						"title"=>"Popup border color",
						"description"=>"Set the Popup border color",						
						"function_name"=>"color_input",
						"default_value"=>"#000000",
						"pro"=>true,
					),			
					"popup_border_width"=>array(
						"title"=>"Popup border width",
						"description"=>"Type the Popup border width",				
						"function_name"=>"simple_input",
						"small_text"=>"(Px)",
						"default_value"=>"2",	
						"pro"=>true,
					),
					"popup_border_radius"=>array(
						"title"=>"Popup border radius",
						"description"=>"Set the Popup border radius",				
						"function_name"=>"simple_input",
						"small_text"=>"(Px)",
						"default_value"=>"8",	
						"pro"=>true,
					),
					"popup_animation_type"=>array(
						"title"=>"Popup opening animation type",
						"description"=>"Choose popup opening animation type",
						"values"=>array(
							"disable"=>"Disabel",
							"fade"=>"Fade",
							"zoom_out"=>"Zoom  out",
							"zoom_in"=>"Zoom  in",
							"slide_in_right"=>"Slide in from right",
							"slide_in_left"=>"Slide in from left",
							"slide_from_top"=>"Slide in from top",
							"slide_from_bottom"=>"Slide in from Bottom",
							"newspaper"=>"Newspaper",
							"flip_hor_left"=>"Flip Horizontal Left",
							"flip_hor_right"=>"Flip Horizontal Right",
							"flip_ver_bottom"=>"Flip Vertical Top",
							"wpdevart_lb_flip_ver_bottom"=>"Flip Vertical Bottom",
						),
						"default_value"=>"disable",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
					"popup_animation_time"=>array(
						"title"=>"Popup animation duration",
						"description"=>"Choose duration of Popup animation",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"small_text"=>"(Miliseconds)",
						"default_value"=>"500",	
						"pro"=>true,
					)			
				),
			
			),
			"control_buttons"=>array(
				"heading_name"=>"Close Button",
				"location"=>"right",
				"image"=>wpda_contdown_extend_plugin_url."left",
				"params"=>array(
					"control_buttons_show_hide"=>array(
						"title"=>"Show Close button section",
						"description"=>"Select to show/hide close button section",
						"values"=>array(
							"1"=>"Show",
							"0"=>"Hide",
						),
						"default_value"=>"true",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
					"control_buttons_line_position"=>array(
						"title"=>"Close button section position",
						"description"=>"Select close button section position",
						"values"=>array(
							"0"=>"Top inside popup",
							"1"=>"Top outside popup",
							"2"=>"Bottom inside popup",
							"3"=>"Bottom outside popup",
						),
						"default_value"=>"0",
						"function_name"=>"simple_select",
						"pro"=>true,
					),					
					"control_buttons_line_height"=>array(
						"title"=>"Close button section line height",
						"description"=>"Type close button section line height",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"small_text"=>"(px)",
						"default_value"=>"30",	
						"pro"=>true,
					),
					"control_buttons_line_bg_color"=>array(
						"title"=>"Close button section background color",
						"description"=>"Select close button section background color",						
						"function_name"=>"color_input",
						"default_value"=>"#000000",
						"pro"=>true,
					),
					"control_buttons_transparency"=>array(
						"title"=>"Close button section transparency",
						"description"=>"Select close button section transparency",						
						"default_value"=>"60",
						"small_text"=>"(%)",
						"function_name"=>"range_input",
						"pro"=>true,
					),	
					"control_buttons_transparency_hover"=>array(
						"title"=>"Close button section hover transparency",
						"description"=>"Select close button section hover transparency",						
						"default_value"=>"100",
						"small_text"=>"(%)",
						"function_name"=>"range_input"
					),	
					"control_buttons_close_position"=>array(
						"title"=>"Close button position",
						"description"=>"Select close button position",
						"values"=>array(
							"right"=>"Right",
							"left"=>"Left",
						),
						"default_value"=>"right",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
					"control_buttons_close_icon_src"=>array(
						"title"=>"Close img(icon)",
						"description"=>"Upload or type url of close img(icon)",						
						"default_value"=>wpda_contdown_extend_plugin_url."includes/admin/images/close.png",
						"function_name"=>"upload_input"
					),	
					"control_buttons_close_icon_hover_src"=>array(
						"title"=>"Close img(icon) when hovering",
						"description"=>"Upload or type url of close img(icon) when hovering",						
						"default_value"=>wpda_contdown_extend_plugin_url."includes/admin/images/close_hover.png",
						"function_name"=>"upload_input",
						"pro"=>true,
					),	
				),
			),
			"title_options"=>array(
				"heading_name"=>"Popup Title",
				"location"=>"left",
				"image"=>wpda_contdown_extend_plugin_url."left",
				"params"=>array(
					"popup_page_title_text"=>array(
						"title"=>"Title",
						"description"=>"Type here the popup title.",				
						"function_name"=>"simple_input",
						"default_value"=>"Countdown",	
						"pro"=>true,
					),
					"popup_page_title_color"=>array(
						"title"=>"Title color",
						"description"=>"Select the popup title color.",						
						"function_name"=>"color_input",
						"default_value"=>"#000000",
						"pro"=>true,
					),
					"popup_page_title_font_size"=>array(
						"title"=>"Title font size",
						"description"=>"Type here the popup title font size.",				
						"function_name"=>"simple_input",
						"small_text"=>"(px)",
						"default_value"=>"24",	
						"pro"=>true,
					),
					"popup_page_title_font_family"=>array(
						"title"=>"Title font family",
						"description"=>"Select the popup title font family.",				
						"function_name"=>"font_select",
						"values"=>wpda_contdown_extend_library::fonts_select(),
						"default_value"=>"Arial,Helvetica Neue,Helvetica,sans-serif",
						"pro"=>true,
					),
					"popup_page_title_position"=>array(
						"title"=>"Title position",
						"description"=>"Select the popup title position.",
						"values"=>array(
							"left"=>"Left",
							"center"=>"Center",	
							"right"=>"Right",	
						),
						"default_value"=>"center",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
					"popup_page_title_padding"=>array(
						"title"=>"Title padding",
						"description"=>"Type here the popup title padding.",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"30","right"=>"0","bottom"=>"0","left"=>"0"),
						"default_value"=>array("top"=>"30","right"=>"0","bottom"=>"0","left"=>"0"),
						"pro"=>true,
					),
					"popup_page_title_animation"=>array(
						"title"=>"Title animation type",
						"description"=>"Select the popup title animation type.",				
						"function_name"=>"simple_select",
						"values"=>array(
							"none"=>"None",
							"random"=>"Random",
							"Attention_Seekers"=>array(
								"bounce"=>"Bounce",
								"flash"=>"Flash",
								"pulse"=>"Pulse",
								"rubberBand"=>"RubberBand",
								"shake"=>"Shake",
								"swing"=>"Swing",
								"tada"=>"tada",
								"wobble"=>"wobble",
							),		
							"Bouncing_Entrances"=>array(
								"bounceIn"=>"BounceIn",
								"bounceInDown"=>"BounceInDown",
								"bounceInLeft"=>"BounceInLeft",
								"bounceInRight"=>"BounceInRight",
								"bounceInUp"=>"BounceInUp",
							),						
							"Fading_Entrances"=>array(
								"fadeIn"=>"FadeIn",
								"fadeInDown"=>"FadeInDown",
								"fadeInDownBig"=>"FadeInDownBig",
								"fadeInLeft"=>"FadeInLeft",
								"fadeInLeftBig"=>"FadeInLeftBig",
								"fadeInRight"=>"FadeInRight",
								"fadeInRightBig"=>"FadeInRightBig",
								"fadeInUp"=>"FadeInUp",
								"fadeInUpBig"=>"FadeInUpBig",
							),
							"Flippers"=>array(
								"flip"=>"Flip",
								"flipInX"=>"FlipInX",
								"flipInY"=>"FlipInY",
							),
							"Lightspeed"=>array(
								"lightSpeedIn"=>"LightSpeedIn",
							),
							"Rotating_Entrances"=>array(
								"rotateIn"=>"RotateIn",
								"rotateInDownLeft"=>"RotateInDownLeft",
								"rotateInDownRight"=>"RotateInDownRight",
								"rotateInUpLeft"=>"RotateInUpLeft",
								"rotateInUpRight"=>"RotateInUpRight",
							),
							"Specials"=>array(
								"rollIn"=>"RollIn",
							),
							"Zoom_Entrances"=>array(
								"zoomIn"=>"ZoomIn",
								"zoomInDown"=>"ZoomInDown",
								"zoomInLeft"=>"ZoomInLeft",
								"zoomInRight"=>"ZoomInRight",
								"zoomInUp"=>"ZoomInUp",
							),
						),
						"default_value"=>"none",
						"pro"=>true,
					),
					"popup_page_title_animation_time"=>array(
						"title"=>"Animation waiting time",
						"description"=>"Type here the animation waiting time.",				
						"function_name"=>"simple_input",
						"small_text"=>"(milliseconds)",
						"default_value"=>"0",	
						"pro"=>true,
					),			
				)
			),
			"message_options"=>array(
				"heading_name"=>"Popup message",
				"location"=>"left",
				"image"=>wpda_contdown_extend_plugin_url."left",
				"params"=>array(
					"popup_page_message"=>array(
						"title"=>"Message",
						"description"=>"type message",				
						"function_name"=>"tinmce",
						"default_value"=>"Countdown message",
					),
					"popup_page_message_animation"=>array(
						"title"=>"Message animation type",
						"description"=>"Select the popup message animation type.",				
						"function_name"=>"simple_select",
						"values"=>array(
							"none"=>"None",
							"random"=>"Random",
							"Attention_Seekers"=>array(
								"bounce"=>"Bounce",
								"flash"=>"Flash",
								"pulse"=>"Pulse",
								"rubberBand"=>"RubberBand",
								"shake"=>"Shake",
								"swing"=>"Swing",
								"tada"=>"tada",
								"wobble"=>"wobble",
							),		
							"Bouncing_Entrances"=>array(
								"bounceIn"=>"BounceIn",
								"bounceInDown"=>"BounceInDown",
								"bounceInLeft"=>"BounceInLeft",
								"bounceInRight"=>"BounceInRight",
								"bounceInUp"=>"BounceInUp",
							),						
							"Fading_Entrances"=>array(
								"fadeIn"=>"FadeIn",
								"fadeInDown"=>"FadeInDown",
								"fadeInDownBig"=>"FadeInDownBig",
								"fadeInLeft"=>"FadeInLeft",
								"fadeInLeftBig"=>"FadeInLeftBig",
								"fadeInRight"=>"FadeInRight",
								"fadeInRightBig"=>"FadeInRightBig",
								"fadeInUp"=>"FadeInUp",
								"fadeInUpBig"=>"FadeInUpBig",
							),
							"Flippers"=>array(
								"flip"=>"Flip",
								"flipInX"=>"FlipInX",
								"flipInY"=>"FlipInY",
							),
							"Lightspeed"=>array(
								"lightSpeedIn"=>"LightSpeedIn",
							),
							"Rotating_Entrances"=>array(
								"rotateIn"=>"RotateIn",
								"rotateInDownLeft"=>"RotateInDownLeft",
								"rotateInDownRight"=>"RotateInDownRight",
								"rotateInUpLeft"=>"RotateInUpLeft",
								"rotateInUpRight"=>"RotateInUpRight",
							),
							"Specials"=>array(
								"rollIn"=>"RollIn",
							),
							"Zoom_Entrances"=>array(
								"zoomIn"=>"ZoomIn",
								"zoomInDown"=>"ZoomInDown",
								"zoomInLeft"=>"ZoomInLeft",
								"zoomInRight"=>"ZoomInRight",
								"zoomInUp"=>"ZoomInUp",
							),
						),
						"default_value"=>"none",
						"pro"=>true,
					),
					"popup_page_message_animation_time"=>array(
						"title"=>"Animation waiting time",
						"description"=>"Type here the animation waiting time.",				
						"function_name"=>"simple_input",
						"small_text"=>"(milliseconds)",
						"default_value"=>"0",		
						"pro"=>true,
					),			
				)
			),
			"countdown_options"=>array(
				"heading_name"=>"Countdown",
				"location"=>"left",
				"image"=>wpda_contdown_extend_plugin_url."left",
				"params"=>array(
					"countdown_timer"=>array(
						"title"=>"Countdown timer",
						"description"=>"Select the countdown timer.",
						"values"=>$timers_array,
						"default_value"=>"1",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
					"countdown_theme"=>array(
						"title"=>"Countdown theme",
						"description"=>"Select the countdown theme.",
						"values"=>$themes_array,
						"default_value"=>"1",
						"function_name"=>"simple_select",
						"pro"=>true,
					),
				),
			),
		);
	}
	public static function save_in_db(){
		$kk=1;	
		$params_array=self::return_params_array();
		$databases_parametrs=json_decode(get_option("wpda_countdown_extended_params"), true);
		if(isset($_POST['curent_page']) && isset($_POST['countdown_extended_options_nonce']) && wp_verify_nonce( $_POST['countdown_extended_options_nonce'],'countdown_extended_options_nonce')){
			if($_POST['curent_page']=="general_save_parametr"){
				update_option("wpdevart_countdown_extended_popup_enable",$_POST['countdown_extended_page_mode']);
			}else{
				foreach($params_array[$_POST['curent_page']]["params"] as $key => $value){				
					if(isset($_POST[$key])){
						$databases_parametrs[$key]=stripslashes($_POST[$key]);					
					}
					else{
						$kk=0;
						
					}
				}
				update_option("wpda_countdown_extended_params",json_encode($databases_parametrs));
			}
		}
		else{		
			die(self::$text_parametrs['authorize_problem']);
		}
		if($kk==0){
			exit;
		}
		die(self::$text_parametrs['parametrs_sucsses_saved']);
		exit;
	}
	public static function get_default_values_array(){
		$array_of_returned=array();
		$options=self::return_params_array();
		foreach($options as $param_heading_key=>$param_heading_value){
			foreach($param_heading_value['params'] as $key=>$value){
				$array_of_returned[$key]=$value['default_value'];
			}
		}	
		return $array_of_returned;
	}
	private function generete_popup_settings(){
		$databases_parametrs=json_decode(get_option("wpda_countdown_extended_params"), true);
		foreach($this->options as $param_heading_key=>$param_heading_value){
			foreach($param_heading_value['params'] as $key=>$value){
				if(isset($databases_parametrs[$key])){
					$this->options[$param_heading_key]['params'][$key]["value"]=$databases_parametrs[$key];
				}else{
					$this->options[$param_heading_key]['params'][$key]["value"]=$this->options[$param_heading_key]['params'][$key]["default_value"];
				}
			}
		}
	}
	private function generete_abstract_params_list(){
		$abstract_options=array();
		foreach($this->options as $param_heading_key=>$param_heading_value){
			foreach($param_heading_value['params'] as $key=>$value){	
				if(is_array($this->options[$param_heading_key]['params'][$key]["default_value"])){
					$abstract_options[$param_heading_key][$key]=json_encode($this->options[$param_heading_key]['params'][$key]["default_value"], true);
				}
				else{
					$abstract_options[$param_heading_key][$key]=$this->options[$param_heading_key]['params'][$key]["default_value"];
				}
			}
		}
		$this->abstract_options=$abstract_options;
	}
	public function controller_page(){
		$enable_disable=get_option("wpdevart_countdown_extended_popup_enable","off");
		?>
		<script>
			var countdown_extended_ajaxurl="<?php echo admin_url( 'admin-ajax.php'); ?>";
			var countdown_extended_plugin_url="<?php echo wpda_contdown_extend_plugin_url; ?>";
			var countdown_extended_parametrs_sucsses_saved="<?php echo self::$text_parametrs['parametrs_sucsses_saved'] ?>";
			var countdown_extended_all_parametrs = <?php echo json_encode($this->abstract_options); ?>;
		</script>
		<div class="countdown_title"><h1><span>Countdown Popup</span><a class="upgrate_pro_link" target="_blank" href="http://wpdevart.com/wordpress-countdown-extended-version/"><span class="pro_feature"> (Upgrade to Pro Version)</span></a><a target="blank" href="<?php echo wpdevart_countdown_extended_support_url; ?>" class="wp_support">Support</a></h1></div>    
		<div id="countdown_extended_enable" class="field switch">
			<label for="radio1" class="cb-enable <?php if($enable_disable=='on') echo 'selected'; ?>"><span>Enable</span></label>
			<label for="radio2" class="cb-disable <?php if($enable_disable=='off') echo 'selected'; ?>"><span>Disable</span></label>
			<span class="progress_enable_disable_buttons"><span class="saving_in_progress"> </span><span class="sucsses_save"> </span><span class="error_in_saving"> </span><span class="error_massage"></span></span>
			<div style="clear:both"></div>
			<br>
		  </div>  
		<div class="wp-table right_margin">
			<table class="wp-list-table widefat fixed posts">
				<thead>
				<tr>
				<th>     
				<h4 class="params_subtitle">Parameters </h4>              
				<span class="save_all_paramss"> <button type="button" id="save_all_parametrs" class="save_all_section_parametrs button button-primary"><span class="save_button_span">Save All Sections</span> <span class="saving_in_progress"> </span><span class="sucsses_save"> </span><span class="error_in_saving"> </span></button></span>
				</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div id="countdown_extended_page">
								<div class="left_sections">
								<?php 
								foreach($this->options as $params_grup_name =>$params_group_value){					
									if($params_group_value["location"]!="right"){
								?>
									<div class="main_parametrs_group_div closed_params " >
									<div class="head_panel_div" title="Click to toggle">
										<span class="title_parametrs_group"><?php echo $params_group_value["heading_name"] ?></span>
										<span class="enabled_or_disabled_parametr"></span>
										<span class="open_or_closed"></span>         
									</div>
									<div class="inside_information_div">
										<table class="wp-list-table widefat fixed posts section_parametrs_table">                            
											<tbody> 
											<?php
											foreach($params_group_value['params'] as $param_name => $param_value){
												$args=array(
												"name"=>$param_name,
												"heading_name"=>$params_group_value['heading_name'],
												"heading_group"=>$params_grup_name,
												);
												$args=array_merge($args,$param_value);
												$function_name=$param_value['function_name'];
												wpda_contdown_extend_library::$function_name($args);
											}
											?>
											</tbody>
											<tfoot>
												<?php if($params_grup_name!="general_options"){ ?>
												<th colspan="2" width="100%"><button type="button" id="<?php echo $params_grup_name ?>" class="save_section_parametrs button button-primary"><span class="save_button_span">Save Section</span> <span class="saving_in_progress"> </span><span class="sucsses_save"> </span><span class="error_in_saving"> </span></button><span class="error_massage"> </span></th>
												<?php }else{ ?>
												<th colspan="1"><button type="button" id="<?php echo $params_grup_name ?>" class="save_section_parametrs button button-primary"><span class="save_button_span">Save Section</span> <span class="saving_in_progress"> </span><span class="sucsses_save"> </span><span class="error_in_saving"> </span></button><span class="error_massage"> </span></th>
												<th><button type="button" onclick="countdown_set_cookies('countdown_extended_popup','',2); alert('cookie removed')" class="save_button button button-primary" style="float:right;"><span class="save_button_span">Remove cookies</span></button></th>													
												<?php } ?>
											</tfoot>       
										</table>
									</div>     
									</div>
									<?php }} ?>
								</div>
								<div class="right_sections">
									<?php 
									foreach($this->options as $params_grup_name =>$params_group_value){					
										if($params_group_value["location"]=="right"){
									?>
									<div class="main_parametrs_group_div closed_params " >
									<div class="head_panel_div" title="Click to toggle">
										<span class="title_parametrs_group"><?php echo $params_group_value["heading_name"] ?></span>
										<span class="enabled_or_disabled_parametr"></span>
										<span class="open_or_closed"></span>         
									</div>
									<div class="inside_information_div">
										<table class="wp-list-table widefat fixed posts section_parametrs_table">                            
											<tbody> 
											<?php
											foreach($params_group_value['params'] as $param_name => $param_value){
												$args=array(
												"name"=>$param_name,
												"heading_name"=>$params_group_value['heading_name'],
												"heading_group"=>$params_grup_name,
												);
												$args=array_merge($args,$param_value);
												$function_name=$param_value['function_name'];
												wpda_contdown_extend_library::$function_name($args);
											}
											?>
											</tbody>
											<tfoot>
												<tr>												
													<?php if($params_grup_name!="general_options"){ ?>
													<th colspan="2" width="100%"><button type="button" id="<?php echo $params_grup_name ?>" class="save_section_parametrs button button-primary"><span class="save_button_span">Save Section</span> <span class="saving_in_progress"> </span><span class="sucsses_save"> </span><span class="error_in_saving"> </span></button><span class="error_massage"> </span></th>
													<?php }else{ ?>
													<th colspan="1"><button type="button" id="<?php echo $params_grup_name ?>" class="save_section_parametrs button button-primary"><span class="save_button_span">Save Section</span> <span class="saving_in_progress"> </span><span class="sucsses_save"> </span><span class="error_in_saving"> </span></button><span class="error_massage"> </span></th>
													<th><button type="button" onclick="countdown_set_cookies('countdown_extended_popup','',2); alert('cookie removed')" class="save_button button button-primary" style="float:right;"><span class="save_button_span">Remove cookies</span></button></th>													
													<?php } ?>
												</tr>
											</tfoot>       
										</table>
									</div>     
									</div>
									<?php }} ?>       
								</div>
							</div>
							<div style="clear:both"></div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>                   
							<span class="save_all_paramss"><button type="button" id="save_all_parametrs" class="save_all_section_parametrs button button-primary"><span class="save_button_span">Save All Sections</span> <span class="saving_in_progress"> </span><span class="sucsses_save"> </span><span class="error_in_saving"> </span></button></span>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>      
		<?php
		wp_nonce_field('countdown_extended_options_nonce','countdown_extended_options_nonce');
	}
		
}


 ?>