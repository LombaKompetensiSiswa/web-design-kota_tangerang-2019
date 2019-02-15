<?php
class wpda_contdown_extend_theme_page{
	
	private $options;
	
	function __construct(){		
		$this->options=self::return_params_array();					
	}
	
	public static function return_params_array(){	
		return array(
			"countdown_theme_general"=>array(
				"heading_name"=>"General Settings",
				"params"=>array(
					"countdown_type"=>array(
						"title"=>"Coundown design type",
						"description"=>"Select the countdown design type",				
						"function_name"=>"simple_select",
						"values"=>array("standart"=>"Standard","vertical"=>"Vertical (Pro feature)","circle"=>"Circle (Pro feature)"),
						"default_value"=>"standart",
						"pro"=>true,
					),
					"countdown_global_width"=>array(
						"title"=>"Countdown width",
						"description"=>"Type here the countdown width",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"100",
					),
					"countdown_global_width_metrick"=>array(
						"title"=>"Countdown width metrical type(px/%)",
						"description"=>"Select the countdown width metrical type",				
						"function_name"=>"simple_select",
						"values"=>array("px"=>"Px","%"=>"Percents(%)"),
						"default_value"=>"%",
					),
					"countdown_date_display"=>array(
						"title"=>"Select the countdown timer fields you want to display",
						"description"=>"Slect the timer fields you want to display in front-end",
						"values"=>array(
							"week"=>"Weeks",
							"day"=>"Days",
							"hour"=>"Hours",
							"minut"=>"Minutes",
							"second"=>"Seconds",
						),
						"function_name"=>"simple_checkbox",
						"default_value"=>array("day","hour","minut","second"),
						"pro"=>true,
					),	
					"countdown_text_type"=>array(
						"title"=>"Type timer texts or use translation file",
						"description"=>"You can type texts manually or use WordPress standard translation method with .po and .mo files",				
						"function_name"=>"simple_select",
						"values"=>array("standart"=>"Type texts","po_mo"=>"Use .mo translation file"),
						"default_value"=>"po_mo",
					),
					"text_for_weeks"=>array(
						"title"=>"Text for weeks",
						"description"=>"Type text for weeks",				
						"function_name"=>"simple_input",
						"default_value"=>"Weeks",
					),
					"text_for_day"=>array(
						"title"=>"Text for days",
						"description"=>"Type text for days",				
						"function_name"=>"simple_input",
						"default_value"=>"Days",
					),
					"text_for_hour"=>array(
						"title"=>"Text for hours",
						"description"=>"Type text for hours",				
						"function_name"=>"simple_input",
						"default_value"=>"Hours",
					),
					"text_for_minute"=>array(
						"title"=>"Text for minutes",
						"description"=>"Type text for minutes",				
						"function_name"=>"simple_input",
						"default_value"=>"Minutes",
					),
					"text_for_second"=>array(
						"title"=>"Text for seconds",
						"description"=>"Type text for seconds",				
						"function_name"=>"simple_input",
						"default_value"=>"Seconds",
					),
					
				)
			),
			"Standart_countdown"=>array(
				"heading_name"=>"Standard countdown",
				"params"=>array(					
					"countdown_standart_elements_width"=>array(
						"title"=>"Countdown elements(fields) width",
						"description"=>"Type here the width of countdown timer elements(fields)",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"80",
					),
					"countdown_standart_elements_distance"=>array(
						"title"=>"Distance between countdown elements",
						"description"=>"Type here distance between countdown elements",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"5",
					),
					"countdown_standart_time_font_size"=>array(
						"title"=>"Time(numbers) font size",
						"description"=>"Type here time(numbers) font size",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"21",
					),
					"countdown_standart_time_text_font_size"=>array(
						"title"=>"Time text font size",
						"description"=>"Type here time text font size",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"11",
					),
					"countdown_standart_time_padding"=>array(
						"title"=>"Time(numbers) padding",
						"description"=>"Type here time(numbers) padding",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"default_value"=>array("top"=>"0","right"=>"5","bottom"=>"0","left"=>"5"),
					),
					"countdown_standart_time_text_padding"=>array(
						"title"=>"Time text padding",
						"description"=>"Type here time text padding",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"default_value"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
					),
					"countdown_standart_time_margin"=>array(
						"title"=>"Time(numbers) margin",
						"description"=>"Type here time(numbers) margin",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"default_value"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
					),
					"countdown_standart_time_text_margin"=>array(
						"title"=>"Time text margin",
						"description"=>"Type here time text margin",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"default_value"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
					),
					"countdown_standart_time_border_width"=>array(
						"title"=>"Time(numbers) fields border width",
						"description"=>"Type here time(numbers) fields border width",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"0",
					),
					"countdown_standart_time_text_border_width"=>array(
						"title"=>"Time text fields border width",
						"description"=>"Type here time text fields border width",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"0",
					),
					"countdown_standart_time_border_radius"=>array(
						"title"=>"Time(numbers) fields border radius",
						"description"=>"Type here time(numbers) fields border radius",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"0",
					),
					"countdown_standart_time_text_border_radius"=>array(
						"title"=>"Time text fields border radius",
						"description"=>"Type here time text fields border radius",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"0",
					),
					"countdown_standart_time_bg_color"=>array(
						"title"=>"Time(numbers) fields background color",
						"description"=>"Select time fields background color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_standart_time_text_bg_color"=>array(
						"title"=>"Time text fields background color",
						"description"=>"Select time text fields(Weeks,Days,Hours,Minutes,Seconds) background color",
						"default_value"=>"#000000",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					
			
					"countdown_standart_time_color"=>array(
						"title"=>"Time(numbers) color",
						"description"=>"Type here time(numbers) color",
						"default_value"=>"#000000",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_standart_time_text_color"=>array(
						"title"=>"Time text color",
						"description"=>"Type here time text color",
						"default_value"=>"#000000",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_standart_time_font_famely"=>array(
						"title"=>"Time(numbers) font family",
						"description"=>"Type here time(numbers) font family",				
						"function_name"=>"font_select",
						"values"=>wpda_contdown_extend_library::fonts_select(),
						"default_value"=>"Arial,Helvetica Neue,Helvetica,sans-serif",
						"pro"=>true,
					),
					"countdown_standart_time_text_font_famely"=>array(
						"title"=>"Time text font family",
						"description"=>"Type here time text font family",				
						"function_name"=>"font_select",
						"values"=>wpda_contdown_extend_library::fonts_select(),
						"default_value"=>"Arial,Helvetica Neue,Helvetica,sans-serif",
						"pro"=>true,
					),
					
					"countdown_standart_time_border_color"=>array(
						"title"=>"Time(numbers) fields border color",
						"description"=>"Type here time(numbers) fields border color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_standart_time_text_border_color"=>array(
						"title"=>"Time text fields border color",
						"description"=>"Type here time text fields border color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_standart_display_inline"=>array(
						"title"=>"Display elements inline",
						"description"=>"Display elements inline",				
						"function_name"=>"simple_select",
						"values"=>array("0"=>"Original sizes","1"=>"Inline"),
						"default_value"=>"0",
						"pro"=>true,
					),
					"countdown_standart_gorup_animation"=>array(
						"title"=>"Set animation for each element or for group",
						"description"=>"Select the animation type for elements",				
						"function_name"=>"simple_select",
						"values"=>array("group"=>"Group","one"=>"One element"),
						"default_value"=>"standart",
						"pro"=>true,
					),					
					"countdown_standart_animation_type"=>array(
						"title"=>"Animation Effect",
						"description"=>"Select the animation effect",				
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
				),
			),	
			"vertical_countdown"=>array(
				"heading_name"=>"Vertical countdown <span class='pro_feature'>(Pro)</span>",
				"params"=>array(	
					"countdown_vertical_time_font_size"=>array(
						"title"=>"Time(numbers) font size",
						"description"=>"Type here time(numbers) font size",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"5",
						"pro"=>true,
					),
					"countdown_vertical_elements_distance"=>array(
						"title"=>"Distance between countdown elements",
						"description"=>"Type here distance between countdown elements",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"12",
						"small_text"=>"px",
						"pro"=>true,
					),
					"countdown_vertical_time_font_famely"=>array(
						"title"=>"Time(numbers) font family",
						"description"=>"Type here time(numbers) font family",				
						"function_name"=>"font_select",
						"values"=>wpda_contdown_extend_library::fonts_select(),
						"default_value"=>"Arial,Helvetica Neue,Helvetica,sans-serif",
						"pro"=>true,
					),
					"countdown_vertical_time_color"=>array(
						"title"=>"Time(numbers) color",
						"description"=>"Type here time(numbers) color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_vertical_background_color"=>array(
						"title"=>"Time(numbers) fields background color",
						"description"=>"Type here time(numbers) fields background color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),	
					"countdown_vertical_time_border_width"=>array(
						"title"=>"Time(numbers) fields border width",
						"description"=>"Type here time(numbers) fields border width",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"1",
						"pro"=>true,
					),
					"countdown_vertical_time_border_color"=>array(
						"title"=>"Time(numbers) fields border color",
						"description"=>"Type here time(numbers) fields border color",
						"default_value"=>"#000000",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_vertical_time_text_bg_color"=>array(
						"title"=>"Time text fields background color",
						"description"=>"Select time text fields(Weeks,Days,Hours,Minutes,Seconds) background color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					
					"countdown_vertical_time_text_font_size"=>array(
						"title"=>"Time text font size",
						"description"=>"Type here time text font size",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"5",
						"pro"=>true,
					),		
					"countdown_vertical_time_text_color"=>array(
						"title"=>"Time text color",
						"description"=>"Type here time text color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_vertical_time_text_font_famely"=>array(
						"title"=>"Time text font family",
						"description"=>"Select here time text font family",				
						"function_name"=>"font_select",
						"values"=>wpda_contdown_extend_library::fonts_select(),
						"default_value"=>"Arial,Helvetica Neue,Helvetica,sans-serif",
						"pro"=>true,
					),
					"countdown_vertical_time_text_padding"=>array(
						"title"=>"Time text padding",
						"description"=>"Type here time text padding",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"default_value"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"pro"=>true,
					),
					"countdown_vertical_time_text_margin"=>array(
						"title"=>"Time text margin",
						"description"=>"Type here time text margin",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"default_value"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"pro"=>true,
					),
					"countdown_vertical_time_text_border_width"=>array(
						"title"=>"Time text fields border width",
						"description"=>"Type here time text fields border width",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"0",
						"pro"=>true,
					),
					"countdown_vertical_time_text_border_radius"=>array(
						"title"=>"Time text fields border radius",
						"description"=>"Type here time text fields border radius",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"0",
						"pro"=>true,
					),
					"countdown_vertical_time_text_border_color"=>array(
						"title"=>"Time text fields border color",
						"description"=>"Type here time text fields border color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),	
					"countdown_vertical_display_inline"=>array(
						"title"=>"Display elements inline",
						"description"=>"Display elements inline",				
						"function_name"=>"simple_select",
						"values"=>array("0"=>"original sizes","1"=>"inline"),
						"default_value"=>"0",
						"pro"=>true,
					),
					"countdown_vertical_gorup_animation"=>array(
						"title"=>"Set animation for each element or for group",
						"description"=>"Select the animation type for elements",				
						"function_name"=>"simple_select",
						"values"=>array("group"=>"Group","one"=>"One element"),
						"default_value"=>"standart",
						"pro"=>true,
					),
					"countdown_vertical_animation_type"=>array(
						"title"=>"Animation Effect",
						"description"=>"Select the animation effect",				
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
				),
			),
			"circle_countdown"=>array(
				"heading_name"=>"Circle countdown <span class='pro_feature'>(Pro)</span>",
				"params"=>array(	
					"countdown_circle_elements_width_height"=>array(
						"title"=>"Circle width(or height)",
						"description"=>"Type here the circle width(or height)",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"120",
						"small_text"=>"px",
						"pro"=>true,
					),
					"countdown_circle_elements_distance"=>array(
						"title"=>"Distance between countdown elements",
						"description"=>"Type here distance between countdown elements",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"12",
						"small_text"=>"px",
						"pro"=>true,
					),
					"countdown_circle_background_color"=>array(
						"title"=>"Circle background color",
						"description"=>"Select circle background color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_circle_background_color_opacity"=>array(
						"title"=>"Circle background opacity",
						"description"=>"Select circle background opacity",
						"function_name"=>"range_input",
						"small_text"=>"(%)",	
						"default_value"=>"100",
						"pro"=>true,
					),
					"countdown_circle_border_color_outside"=>array(
						"title"=>"Fixed border color",
						"description"=>"Select fixed border color",
						"default_value"=>"#167ac6",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_circle_border_color_inside"=>array(
						"title"=>"Rotating border color",
						"description"=>"Select rotating border color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_circle_width_parcents"=>array(
						"title"=>"Circle border width",
						"description"=>"Select the border width of circle",
						"function_name"=>"range_input",
						"small_text"=>"(%)",	
						"default_value"=>"3",
						"pro"=>true,
					),
					"countdown_circle_type_of_rounding"=>array(
						"title"=>"Border radius of circle border ends",
						"description"=>"Select circle border ends type",				
						"function_name"=>"simple_select",
						"values"=>array("butt"=>"Flat","round"=>"Round"),
						"default_value"=>"butt",
						"pro"=>true,
					),
					"countdown_circle_border_direction"=>array(
						"title"=>"Which direction should the circle border rotate",
						"description"=>"Choose on which direction should the circle border rotate",				
						"function_name"=>"simple_select",
						"values"=>array("right"=>"Clockwise","left"=>"Anticlockwise"),
						"default_value"=>"right",
						"pro"=>true,
					),
					"countdown_circle_time_font_size"=>array(
						"title"=>"Time(numbers) font size",
						"description"=>"Type here time(numbers) font size",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"5",
						"pro"=>true,
					),
					"countdown_circle_time_text_font_size"=>array(
						"title"=>"Time text font size",
						"description"=>"Type here time text font size",				
						"function_name"=>"simple_input",
						"type"=>"number",
						"default_value"=>"5",
						"pro"=>true,
					),
			
					"countdown_circle_time_color"=>array(
						"title"=>"Time(numbers) color",
						"description"=>"Type here time(numbers) color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_circle_time_text_color"=>array(
						"title"=>"Time text color",
						"description"=>"Type here time text color",
						"default_value"=>"#FFFFFF",
						"function_name"=>"color_input",
						"pro"=>true,
					),
					"countdown_circle_time_font_famely"=>array(
						"title"=>"Time(numbers) font family",
						"description"=>"Type here time(numbers) font family",				
						"function_name"=>"font_select",
						"values"=>wpda_contdown_extend_library::fonts_select(),
						"default_value"=>"Arial,Helvetica Neue,Helvetica,sans-serif",
						"pro"=>true,
					),
					"countdown_circle_time_text_font_famely"=>array(
						"title"=>"Time text font family",
						"description"=>"Type here time text font family",				
						"function_name"=>"font_select",
						"values"=>wpda_contdown_extend_library::fonts_select(),
						"default_value"=>"Arial,Helvetica Neue,Helvetica,sans-serif",
						"pro"=>true,
					),
					"countdown_circle_time_margin"=>array(
						"title"=>"Time(numbers) margin",
						"description"=>"Type here time(numbers) margin",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"0","bottom"=>"0"),
						"default_value"=>array("top"=>"0","bottom"=>"0"),
						"pro"=>true,
					),
					"countdown_circle_time_text_padding"=>array(
						"title"=>"Time text padding",
						"description"=>"Type here time text padding",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"default_value"=>array("top"=>"0","right"=>"0","bottom"=>"0","left"=>"0"),
						"pro"=>true,
					),
					
					"countdown_circle_time_text_margin"=>array(
						"title"=>"Time text margin",
						"description"=>"Type here time text margin",				
						"function_name"=>"padding_margin_input",
						"values"=>array("top"=>"0","bottom"=>"0"),
						"default_value"=>array("top"=>"0","bottom"=>"0"),
						"pro"=>true,
					),
					"countdown_circle_display_inline"=>array(
						"title"=>"Display elements inline",
						"description"=>"Display elements inline",				
						"function_name"=>"simple_select",
						"values"=>array("0"=>"original sizes","1"=>"inline"),
						"default_value"=>"0",
						"pro"=>true,
					),
					"countdown_circle_gorup_animation"=>array(
						"title"=>"Set animation for each element or for group",
						"description"=>"Select the animation type for elements",				
						"function_name"=>"simple_select",
						"values"=>array("group"=>"Group","one"=>"One element"),
						"default_value"=>"group",
						"pro"=>true,
					),
					"countdown_circle_animation_type"=>array(
						"title"=>"Animation Effect",
						"description"=>"Select the animation effect",				
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
				),
			),
		);
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
	public function controller_page(){
		global $wpdb;
		$task="default";
		$id=0;
		if(isset($_GET["task"])){
			$task=$_GET["task"];
		}
		if(isset($_GET["id"])){
			$id=$_GET["id"];
		}		
		switch($task){
		case 'add_wpda_contdown_extend_theme':	
			$this->add_edit_theme($id);
			break;
			
		case 'add_edit_theme':	
			$this->add_edit_theme($id);
			break;
		
		case 'save_theme':		
			if($id)	
				$this->update_theme($id);
			else
				$this->save_theme();
				
			$this->display_table_list_theme();	
			break;
			
			
		case 'update_theme':		
			if($id){
				$this->update_theme($id);
			}else{
				$this->save_theme();
				$_GET['id']=$wpdb->get_var("SELECT MAX(id) FROM ".wpda_contdown_extend_databese::$table_names['theme']);
				$id=$_GET['id'];
			}
			$this->add_edit_theme($id);
			break;
		case 'set_default_theme':
			$this->set_default_theme($id);
			$this->display_table_list_theme();	
		break;
		case 'remove_theme':	
			$this->remove_theme($id);
			$this->display_table_list_theme();
			break;				
		default:
			$this->display_table_list_theme();
		}
	}
	
/*############  Save function  ################*/
	
	private function save_theme(){
		global $wpdb;
		if(count($_POST)==0)
			return;		
		$params_array=array();
		if(isset($_POST['name'])){
			$name=sanitize_text_field($_POST['name']);
		}else{
			$name="theme";
		}
		
		$params_array=array('name'=>sanitize_text_field($name));
		foreach($this->options as $param_heading_key=>$param_heading_value){
			foreach($param_heading_value['params'] as $key=>$value){
				if(isset($_POST[$key])){
					if(is_array($_POST[$key])){
						$params_array[$key]=$_POST[$key];
					}else{
						$params_array[$key]=stripslashes($_POST[$key]);
					}
				}else{
					$params_array[$key]=$value['default_value'];
				}
			}
		}	
		
		$save_or_no=$wpdb->insert( wpda_contdown_extend_databese::$table_names['theme'], 
			array( 
				'name' => $name,
				'option_value' => json_encode($params_array),
			), 
			array( 
				'%s', 
				'%s',
			) 
		);
		if($save_or_no){
			?><div class="updated"><p><strong>Item Saved</strong></p></div><?php
		}
		else{
			?><div id="message" class="error"><p>Error please reinstall plugin</p></div> <?php
		}
	}
	
/*############  Update theme ID function  ################*/
	
	private function update_theme($id){
		global $wpdb;
		if(count($_POST)==0)
			return;
		$params_array=array();
		if(isset($_POST['name'])){
			$name=sanitize_text_field($_POST['name']);
		}else{
			$name="theme";
		}
		$params_array=array('name'=>sanitize_text_field($name));
		foreach($this->options as $param_heading_key=>$param_heading_value){
			foreach($param_heading_value['params'] as $key=>$value){
				if(isset($_POST[$key]) && !isset($value["pro"])){
					if(is_array($_POST[$key])){
						$params_array[$key]=$_POST[$key];
					}else{
						$params_array[$key]=stripslashes($_POST[$key]);
					}
				}else{
					$params_array[$key]=$value['default_value'];
				}
			}
		}		
		$wpdb->update( wpda_contdown_extend_databese::$table_names['theme'], 
			array( 
				'name' => $name,
				'option_value' => json_encode($params_array),
			), 
			array( 
				'id'=>$id 
			),
			array( 
				'%s', 
				'%s'
			),
			array( 
				'%d'
			)  
		);
		
		?><div class="updated"><p><strong>Item Saved</strong></p></div><?php
		
	}
	
	
	private function remove_theme($id){
		global $wpdb;
		$default_theme = $wpdb->get_var($wpdb->prepare('SELECT `default` FROM ' . wpda_contdown_extend_databese::$table_names['theme'].' WHERE id="%d"', $id));
		if (!$default_theme) {
			$wpdb->query($wpdb->prepare('DELETE FROM ' . wpda_contdown_extend_databese::$table_names['theme'].' WHERE id="%d"', $id));
		}
		else{
			?><div id="message" class="error"><p>You cannot remove default theme</p></div> <?php
		}
	}
	
	private function display_table_list_theme(){
		
		?>
        <style>
        .description_row:nth-child(odd){
			background-color: #f9f9f9;
		}
		
        </style>
        <script> var my_table_list=<?php echo $this->generete_jsone_list(); ?></script>
        <div class="wrap">
            <form method="post"  action="" id="admin_form" name="admin_form" ng-app="" ng-controller="customersController">
			<h2 style="width: 95%">Theme <a href="admin.php?page=wpda_contdown_extend_themes&task=add_wpda_contdown_extend_theme" class="add-new-h2">Add New</a><a class="upgrate_pro_link" target="_blank" href="http://wpdevart.com/wordpress-countdown-extended-version/"><span class="pro_feature"> (Upgrade to Pro Version)</span></a> <a target="blank" href="<?php echo wpdevart_countdown_extended_support_url; ?>" class="wp_support">Support</a></h2>            
   
            <div class="tablenav top" style="width:95%">  
                <input type="text" placeholder="Search" ng-change="filtering_table();" ng-model="searchText">            
                <div class="tablenav-pages"><span class="displaying-num">{{filtering_table().length}} items</span>
                <span ng-show="(numberOfPages()-1)>=1">
                    <span class="pagination-links"><a class="first-page" ng-class="{disabled:(curPage < 1 )}" title="Go to the first page" ng-click="curPage=0">«</a>
                    <a class="prev-page" title="Go to the previous page" ng-class="{disabled:(curPage < 1 )}" ng-click="curPage=curPage-1; curect()">‹</a>
                    <span class="paging-input"><span class="total-pages">{{curPage + 1}}</span> of <span class="total-pages">{{ numberOfPages() }}</span></span>
                    <a class="next-page" title="Go to the next page" ng-class="{disabled:(curPage >= (numberOfPages() - 1))}" ng-click=" curPage=curPage+1; curect()">›</a>
                    <a class="last-page" title="Go to the last page" ng-class="{disabled:(curPage >= (numberOfPages() - 1))}" ng-click="curPage=numberOfPages()-1">»</a></span></div>
                </span>
            </div>
            <table class="wp-list-table widefat fixed pages" style="width:95%">
                <thead>
                    <tr>
                        <th style="width: 100px;" id='oreder_by_id' data-ng-click="order_by='id'; reverse=!reverse; ordering($event,order_by,reverse);" class="manage-column sortable desc" scope="col"><a><span>ID</span><span class="sorting-indicator"></span></a></th>
                        <th data-ng-click="order_by='name'; reverse=!reverse; ordering($event,order_by,reverse)" class="manage-column sortable desc"><a><span>Name</span><span class="sorting-indicator"></span></a></th>
                        <th style="width:100px"><a>Default</span></a></th>
                        <th style="width:80px">Edit</th>                        
                        <th  style="width:80px">Delete</th>
                    </tr>
                </thead>
                <tbody>
                 <tr ng-repeat="rows in names | filter:filtering_table" class="description_row">
					 <td>{{rows.id}}</td>
					 <td><a href="admin.php?page=wpda_contdown_extend_themes&task=add_edit_theme&id={{rows.id}}">{{rows.name}}</a></td>
					 <td><a href="admin.php?page=wpda_contdown_extend_themes&task=set_default_theme&id={{rows.id}}"><img src="<?php echo wpda_contdown_extend_plugin_url.'includes/admin/images/default' ?>{{rows.default}}.png"></a></td>
					 <td><a href="admin.php?page=wpda_contdown_extend_themes&task=add_edit_theme&id={{rows.id}}">Edit</a></td>
					 <td><a href="admin.php?page=wpda_contdown_extend_themes&task=remove_theme&id={{rows.id}}">Delete</a></td>                               
                  </tr> 
                </tbody>
            </table>
        </form>
        </div>
    <script>

jQuery(document).ready(function(e) {
    jQuery('a.disabled').click(function(){return false});
	jQuery('form').on("keyup keypress", function(e) {
		var code = e.keyCode || e.which; 
		if (code  == 13) {               
			e.preventDefault();
			return false;
		}
	});
});
    function customersController($scope,$filter) {
		var orderBy = $filter('orderBy');
		$scope.previsu_search_result='';
		$scope.oredering=new Array();
		$scope.baza = my_table_list;
		$scope.curPage = 0;
		$scope.pageSize = 20;
		$scope.names=$scope.baza.slice( $scope.curPage* $scope.pageSize,( $scope.curPage+1)* $scope.pageSize)
		$scope.numberOfPages = function(){
		   return Math.ceil($scope.filtering_table().length / $scope.pageSize);
	   };
	   $scope.filtering_table=function(){
		   var new_searched_date_array=new Array;
		   new_searched_date_array=[];
		   angular.forEach($scope.baza,function(value,key){
			   var catched=0;
			   angular.forEach(value,function(value_loc,key_loc){
				   if((''+value_loc).indexOf($scope.searchText)!=-1 || $scope.searchText=='' || typeof($scope.searchText) == 'undefined')
					  catched=1;
			   })
			  if(catched)
				  new_searched_date_array.push(value);
		   })
		   if($scope.previsu_search_result != $scope.searchText){
			  
			  $scope.previsu_search_result=$scope.searchText;
			   $scope.ordering($scope.oredering[0],$scope.oredering[1], $scope.oredering[2]);
			   
		   }
		   if(new_searched_date_array.length<=$scope.pageSize)
		   		$scope.curPage = 0;
		   return new_searched_date_array;
	   }
	   $scope.curect=function(){
		   if( $scope.curPage<0){
				$scope.curPage=0;
		   }
		   if( $scope.curPage> $scope.numberOfPages()-1)
			   $scope.curPage=$scope.numberOfPages()-1;
		  $scope.names=$scope.filtering_table().slice( $scope.curPage* $scope.pageSize,( $scope.curPage+1)* $scope.pageSize)
	   }
		
		$scope.ordering=function($event,order_by,revers){
		   if( typeof($event) != 'undefined' && typeof($event.currentTarget) != 'undefined')
		   		element=$event.currentTarget;
			else
				element=jQuery();
		   
			if(revers)
			  indicator='asc'
			else
			  indicator='desc'
			 $scope.oredering[0]=$event;
			 $scope.oredering[1]=order_by;
			 $scope.oredering[2]=revers;
			jQuery(element).parent().find('.manage-column').removeClass('sortable desc asc sorted');
			jQuery(element).parent().find('.manage-column').not(element).addClass('sortable desc');
			jQuery(element).addClass('sorted '+indicator);		  
			$scope.names=orderBy($scope.filtering_table(),order_by,revers).slice( $scope.curPage* $scope.pageSize,( $scope.curPage+1)* $scope.pageSize)
		}
	}
    </script>
		<?php
		$this->generete_jsone_list();
	}
	private function generete_jsone_list(){
		global $wpdb;
		$query = "SELECT `id`,`name`,`default` FROM ".wpda_contdown_extend_databese::$table_names['theme'];
		$rows=$wpdb->get_results($query);
		$json="[";
		$no_frst_storaket=1;
		foreach($rows as $row){
			$json.=(($no_frst_storaket) ? '' : ',' )."{";
			$no_frst_storaket=1;
			foreach($row as $key=>$value){
				if($key!='id'){
					$json.= "".(($no_frst_storaket) ? '' : ',' )."'".$key."':"."'".(($value)?preg_replace('/^\s+|\n|\r|\s+$/m', '',htmlspecialchars_decode(addslashes(strip_tags($value)))):'0')."'";				
				}
				else{					
					$json.= "".(($no_frst_storaket) ? '' : ',' )."'".$key."':".(($value)?htmlspecialchars_decode(addslashes($value)):'0'); 
				}
				
				$no_frst_storaket=0;
			 }			 
			 $json.="}";
		}
		$json.="]";
		return $json;
	}	
	
	private function generete_theme_parametrs($id=0){
		global $wpdb;	
		$theme_params = NULL;
		$new_theme=1;
		if($id){
			$theme_params = $wpdb->get_row('SELECT * FROM '.wpda_contdown_extend_databese::$table_names['theme'].' WHERE id='.$id);	
			$new_theme=0;
		}else{
			$theme_params = $wpdb->get_row('SELECT * FROM '.wpda_contdown_extend_databese::$table_names['theme'].' WHERE `default`=1');	
			
		}
		if($theme_params==NULL){			
			foreach($this->options as $param_heading_key=>$param_heading_value){
				foreach($param_heading_value['params'] as $key=>$value){
					$this->options[$param_heading_key]['params'][$key]["value"]=$this->options[$param_heading_key]['params'][$key]["default_value"];
				}
			}
		}else{
			$databases_parametrs=json_decode($theme_params->option_value, true);
			foreach($this->options as $param_heading_key=>$param_heading_value){
				foreach($param_heading_value['params'] as $key=>$value){
					if(isset($databases_parametrs[$key])){
						$this->options[$param_heading_key]['params'][$key]["value"]=$databases_parametrs[$key];
					}else{
						$this->options[$param_heading_key]['params'][$key]["value"]=$this->options[$param_heading_key]['params'][$key]["default_value"];
					}
				}
			}
			if($new_theme){
				return "New Theme";
			}else{
				return $theme_params->name;
			}
		}
	}
	
	
	private function add_edit_theme($id=0){
		global $wpdb;
		$name=$this->generete_theme_parametrs($id);
		?>		         
		<form action="admin.php?page=wpda_contdown_extend_themes<?php if($id) echo '&id='.$id; ?>" method="post" name="adminForm" class="top_description_table" id="adminForm">
            <div class="conteiner">
                <div class="header">
                    <span><h2 class="wpda_theme_title"><?php echo $id?"Edit":"Add" ?> Theme</h2></span>
                    <div class="header_action_buttons">
                        <span><input type="button" onclick="submitbutton('save_theme')" value="Save" class="button-primary action"> </span> 
                        <span><input type="button" onclick="submitbutton('update_theme')" value="Apply" class="button-primary action"> </span> 
                        <span><input type="button" onclick="window.location.href='admin.php?page=wpda_contdown_extend_themes'" value="Cancel" class="button-secondary action"> </span> 
                    </div>
                </div>
                <div class="option_panel">            
                    <div class="parametr_name"></div>
                    <div class="all_options_panel">
                        <input type="text" class="theme_name" name="name" placeholder="Enter name here" value="<?php echo isset($name)?$name:'' ?>" >
                        <div class="wpda_theme_link_tabs">
							<?php
								echo "<ul>";
								foreach($this->options as $params_grup_name =>$params_group_value){ 
									echo '<li id="'.$params_grup_name.'_tab">'.$params_group_value['heading_name'].'</li>';
								}
								echo "</ul>";
							?>
						</div>
                        <table>
						<?php 
						foreach($this->options as $params_grup_name =>$params_group_value){ 
							wpda_contdown_extend_library::create_table_heading($params_group_value['heading_name'],$params_grup_name);
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
						}

						?>
					</table>
                    </div>
                </div>
            </div>
		</form>
		<?php

		 
	}
	private function set_default_theme($id){
		global $wpdb;
		$wpdb->update(wpda_contdown_extend_databese::$table_names['theme'], array('default' => 0), array('default' => 1));
		$save = $wpdb->update(wpda_contdown_extend_databese::$table_names['theme'], array('default' => 1), array('id' => $id));		
	}
	private function border_types(){
		$border_type[ 'dotted' ] = 'dotted';
		$border_type[ 'dashed' ] = 'dashed';
		$border_type[ 'solid' ] = 'solid';
		$border_type[ 'double' ] = 'double';
		$border_type[ 'groove' ] = 'groove';
		$border_type[ 'ridge' ] = 'ridge';
		$border_type[ 'inset' ] = 'inset';	
		$border_type[ 'outset' ] = 'outset';
		return $border_type;
	}
	private function fonts_options(){
		  $font_choices[ 'Arial,Helvetica Neue,Helvetica,sans-serif' ] = 'Arial *';
		  $font_choices[ 'Arial Black,Arial Bold,Arial,sans-serif' ] = 'Arial Black *';
		  $font_choices[ 'Arial Narrow,Arial,Helvetica Neue,Helvetica,sans-serif' ] = 'Arial Narrow *';
		  $font_choices[ 'Courier,Verdana,sans-serif' ] = 'Courier *';
		  $font_choices[ 'Georgia,Times New Roman,Times,serif' ] = 'Georgia *';
		  $font_choices[ 'Times New Roman,Times,Georgia,serif' ] = 'Times New Roman *';
		  $font_choices[ 'Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Arial,sans-serif' ] = 'Trebuchet MS *';
		  $font_choices[ 'Verdana,sans-serif' ] = 'Verdana *';
		  $font_choices[ 'American Typewriter,Georgia,serif' ] = 'American Typewriter';
		  $font_choices[ 'Andale Mono,Consolas,Monaco,Courier,Courier New,Verdana,sans-serif' ] = 'Andale Mono';
		  $font_choices[ 'Baskerville,Times New Roman,Times,serif' ] = 'Baskerville';
		  $font_choices[ 'Bookman Old Style,Georgia,Times New Roman,Times,serif' ] = 'Bookman Old Style';
		  $font_choices[ 'Calibri,Helvetica Neue,Helvetica,Arial,Verdana,sans-serif' ] = 'Calibri';
		  $font_choices[ 'Cambria,Georgia,Times New Roman,Times,serif' ] = 'Cambria';
		  $font_choices[ 'Candara,Verdana,sans-serif' ] = 'Candara';
		  $font_choices[ 'Century Gothic,Apple Gothic,Verdana,sans-serif' ] = 'Century Gothic';
		  $font_choices[ 'Century Schoolbook,Georgia,Times New Roman,Times,serif' ] = 'Century Schoolbook';
		  $font_choices[ 'Consolas,Andale Mono,Monaco,Courier,Courier New,Verdana,sans-serif' ] = 'Consolas';
		  $font_choices[ 'Constantia,Georgia,Times New Roman,Times,serif' ] = 'Constantia';
		  $font_choices[ 'Corbel,Lucida Grande,Lucida Sans Unicode,Arial,sans-serif' ] = 'Corbel';
		  $font_choices[ 'Franklin Gothic Medium,Arial,sans-serif' ] = 'Franklin Gothic Medium';
		  $font_choices[ 'Garamond,Hoefler Text,Times New Roman,Times,serif' ] = 'Garamond';
		  $font_choices[ 'Gill Sans MT,Gill Sans,Calibri,Trebuchet MS,sans-serif' ] = 'Gill Sans MT';
		  $font_choices[ 'Helvetica Neue,Helvetica,Arial,sans-serif' ] = 'Helvetica Neue';
		  $font_choices[ 'Hoefler Text,Garamond,Times New Roman,Times,sans-serif' ] = 'Hoefler Text';
		  $font_choices[ 'Lucida Bright,Cambria,Georgia,Times New Roman,Times,serif' ] = 'Lucida Bright';
		  $font_choices[ 'Lucida Grande,Lucida Sans,Lucida Sans Unicode,sans-serif' ] = 'Lucida Grande';
		  $font_choices[ 'Palatino Linotype,Palatino,Georgia,Times New Roman,Times,serif' ] = 'Palatino Linotype';
		  $font_choices[ 'Tahoma,Geneva,Verdana,sans-serif' ] = 'Tahoma';
		  $font_choices[ 'Rockwell, Arial Black, Arial Bold, Arial, sans-serif' ] = 'Rockwell';
		  $font_choices[ 'Segoe UI' ] = 'Segoe UI';
		  return $font_choices;
	}
	private function select_font_with_label($select_name,$main_value='',$bind=''){
		?>
        
		<select class="wpda_gallselect" name="<?php echo 'parametrs['.$select_name.']'; ?>" id="<?php echo $select_name ?>" >
		<?php
		
		foreach($this->fonts_options() as $key => $value){
			?>
			<option <?php selected($key,$main_value) ?> value="<?php echo $key ?>" ><?php echo $value ?></option>
			<?php 					
		}
		?>
		</select>																

		<?php
	}
	private function select_border_with_label($select_name,$main_value='',$bind=''){
		?>
		<select class="wpda_gallselect" name="<?php echo 'parametrs['.$select_name.']'; ?>" id="<?php echo $select_name ?>" >
		<?php
		
		foreach($this->border_types() as $key => $value){
			?>
			<option <?php selected($key,$main_value) ?> value="<?php echo $key ?>"><?php echo $value ?></option>
			<?php 					
		}
		?>
		</select>																

		<?php
	}
	private function hex2rgba($color, $opacity = false) {

		$default = 'rgba(0,0,0,1)';
		$opacity=$opacity/100;
		if(empty($color))
			  return $default; 
			if ($color[0] == '#' ) {
				$color = substr( $color, 1 );
			}	
			if (strlen($color) == 6) {
					$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
			} elseif ( strlen( $color ) == 3 ) {
					$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
			} else {
					return $default;
			}
			$rgb =  array_map('hexdec', $hex);
			if($opacity){
				if(abs($opacity) > 1)
					$opacity = 1.0;
				$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
			} else {
				$output = 'rgb('.implode(",",$rgb).')';
			}
			return $output;
	}
	private static function timezone_array(){
		return array(
			'Pacific/Midway'       => "(GMT-11:00) Midway Island",
			'US/Samoa'             => "(GMT-11:00) Samoa",
			'US/Hawaii'            => "(GMT-10:00) Hawaii",
			'US/Alaska'            => "(GMT-09:00) Alaska",
			'US/Pacific'           => "(GMT-08:00) Pacific Time (US &amp; Canada)",
			'America/Tijuana'      => "(GMT-08:00) Tijuana",
			'US/Arizona'           => "(GMT-07:00) Arizona",
			'US/Mountain'          => "(GMT-07:00) Mountain Time (US &amp; Canada)",
			'America/Chihuahua'    => "(GMT-07:00) Chihuahua",
			'America/Mazatlan'     => "(GMT-07:00) Mazatlan",
			'America/Mexico_City'  => "(GMT-06:00) Mexico City",
			'America/Monterrey'    => "(GMT-06:00) Monterrey",
			'Canada/Saskatchewan'  => "(GMT-06:00) Saskatchewan",
			'US/Central'           => "(GMT-06:00) Central Time (US &amp; Canada)",
			'US/Eastern'           => "(GMT-05:00) Eastern Time (US &amp; Canada)",
			'US/East-Indiana'      => "(GMT-05:00) Indiana (East)",
			'America/Bogota'       => "(GMT-05:00) Bogota",
			'America/Lima'         => "(GMT-05:00) Lima",
			'America/Caracas'      => "(GMT-04:30) Caracas",
			'Canada/Atlantic'      => "(GMT-04:00) Atlantic Time (Canada)",
			'America/La_Paz'       => "(GMT-04:00) La Paz",
			'America/Santiago'     => "(GMT-04:00) Santiago",
			'Canada/Newfoundland'  => "(GMT-03:30) Newfoundland",
			'America/Buenos_Aires' => "(GMT-03:00) Buenos Aires",
			'Greenland'            => "(GMT-03:00) Greenland",
			'Atlantic/Stanley'     => "(GMT-02:00) Stanley",
			'Atlantic/Azores'      => "(GMT-01:00) Azores",
			'Atlantic/Cape_Verde'  => "(GMT-01:00) Cape Verde Is.",
			'Africa/Casablanca'    => "(GMT) Casablanca",
			'Europe/Dublin'        => "(GMT) Dublin",
			'Europe/Lisbon'        => "(GMT) Lisbon",
			'Europe/London'        => "(GMT) London",
			'Africa/Monrovia'      => "(GMT) Monrovia",
			'Europe/Amsterdam'     => "(GMT+01:00) Amsterdam",
			'Europe/Belgrade'      => "(GMT+01:00) Belgrade",
			'Europe/Berlin'        => "(GMT+01:00) Berlin",
			'Europe/Bratislava'    => "(GMT+01:00) Bratislava",
			'Europe/Brussels'      => "(GMT+01:00) Brussels",
			'Europe/Budapest'      => "(GMT+01:00) Budapest",
			'Europe/Copenhagen'    => "(GMT+01:00) Copenhagen",
			'Europe/Ljubljana'     => "(GMT+01:00) Ljubljana",
			'Europe/Madrid'        => "(GMT+01:00) Madrid",
			'Europe/Paris'         => "(GMT+01:00) Paris",
			'Europe/Prague'        => "(GMT+01:00) Prague",
			'Europe/Rome'          => "(GMT+01:00) Rome",
			'Europe/Sarajevo'      => "(GMT+01:00) Sarajevo",
			'Europe/Skopje'        => "(GMT+01:00) Skopje",
			'Europe/Stockholm'     => "(GMT+01:00) Stockholm",
			'Europe/Vienna'        => "(GMT+01:00) Vienna",
			'Europe/Warsaw'        => "(GMT+01:00) Warsaw",
			'Europe/Zagreb'        => "(GMT+01:00) Zagreb",
			'Europe/Athens'        => "(GMT+02:00) Athens",
			'Europe/Bucharest'     => "(GMT+02:00) Bucharest",
			'Africa/Cairo'         => "(GMT+02:00) Cairo",
			'Africa/Harare'        => "(GMT+02:00) Harare",
			'Europe/Helsinki'      => "(GMT+02:00) Helsinki",
			'Europe/Istanbul'      => "(GMT+02:00) Istanbul",
			'Asia/Jerusalem'       => "(GMT+02:00) Jerusalem",
			'Europe/Kiev'          => "(GMT+02:00) Kyiv",
			'Europe/Minsk'         => "(GMT+02:00) Minsk",
			'Europe/Riga'          => "(GMT+02:00) Riga",
			'Europe/Sofia'         => "(GMT+02:00) Sofia",
			'Europe/Tallinn'       => "(GMT+02:00) Tallinn",
			'Europe/Vilnius'       => "(GMT+02:00) Vilnius",
			'Asia/Baghdad'         => "(GMT+03:00) Baghdad",
			'Asia/Kuwait'          => "(GMT+03:00) Kuwait",
			'Africa/Nairobi'       => "(GMT+03:00) Nairobi",
			'Asia/Riyadh'          => "(GMT+03:00) Riyadh",
			'Europe/Moscow'        => "(GMT+03:00) Moscow",
			'Asia/Tehran'          => "(GMT+03:30) Tehran",
			'Asia/Baku'            => "(GMT+04:00) Baku",
			'Europe/Volgograd'     => "(GMT+04:00) Volgograd",
			'Asia/Muscat'          => "(GMT+04:00) Muscat",
			'Asia/Tbilisi'         => "(GMT+04:00) Tbilisi",
			'Asia/Yerevan'         => "(GMT+04:00) Yerevan",
			'Asia/Kabul'           => "(GMT+04:30) Kabul",
			'Asia/Karachi'         => "(GMT+05:00) Karachi",
			'Asia/Tashkent'        => "(GMT+05:00) Tashkent",
			'Asia/Kolkata'         => "(GMT+05:30) Kolkata",
			'Asia/Kathmandu'       => "(GMT+05:45) Kathmandu",
			'Asia/Yekaterinburg'   => "(GMT+06:00) Ekaterinburg",
			'Asia/Almaty'          => "(GMT+06:00) Almaty",
			'Asia/Dhaka'           => "(GMT+06:00) Dhaka",
			'Asia/Novosibirsk'     => "(GMT+07:00) Novosibirsk",
			'Asia/Bangkok'         => "(GMT+07:00) Bangkok",
			'Asia/Jakarta'         => "(GMT+07:00) Jakarta",
			'Asia/Krasnoyarsk'     => "(GMT+08:00) Krasnoyarsk",
			'Asia/Chongqing'       => "(GMT+08:00) Chongqing",
			'Asia/Hong_Kong'       => "(GMT+08:00) Hong Kong",
			'Asia/Kuala_Lumpur'    => "(GMT+08:00) Kuala Lumpur",
			'Australia/Perth'      => "(GMT+08:00) Perth",
			'Asia/Singapore'       => "(GMT+08:00) Singapore",
			'Asia/Taipei'          => "(GMT+08:00) Taipei",
			'Asia/Ulaanbaatar'     => "(GMT+08:00) Ulaan Bataar",
			'Asia/Urumqi'          => "(GMT+08:00) Urumqi",
			'Asia/Irkutsk'         => "(GMT+09:00) Irkutsk",
			'Asia/Seoul'           => "(GMT+09:00) Seoul",
			'Asia/Tokyo'           => "(GMT+09:00) Tokyo",
			'Australia/Adelaide'   => "(GMT+09:30) Adelaide",
			'Australia/Darwin'     => "(GMT+09:30) Darwin",
			'Asia/Yakutsk'         => "(GMT+10:00) Yakutsk",
			'Australia/Brisbane'   => "(GMT+10:00) Brisbane",
			'Australia/Canberra'   => "(GMT+10:00) Canberra",
			'Pacific/Guam'         => "(GMT+10:00) Guam",
			'Australia/Hobart'     => "(GMT+10:00) Hobart",
			'Australia/Melbourne'  => "(GMT+10:00) Melbourne",
			'Pacific/Port_Moresby' => "(GMT+10:00) Port Moresby",
			'Australia/Sydney'     => "(GMT+10:00) Sydney",
			'Asia/Vladivostok'     => "(GMT+11:00) Vladivostok",
			'Asia/Magadan'         => "(GMT+12:00) Magadan",
			'Pacific/Auckland'     => "(GMT+12:00) Auckland",
			'Pacific/Fiji'         => "(GMT+12:00) Fiji",
		);
	}
	
}


 ?>