( function( blocks, editor, i18n, element, components, _ ) {
	var el = element.createElement;
	var RichText = editor.RichText;
	var MediaUpload = editor.MediaUpload;
	var currentdate = new Date();
	var pro_feature_text="If you want to use this feature upgrade to Countdown Pro";
	
	blocks.registerBlockType( 'wpdevart-countdown/countdown', {
		title: 'WpDevArt Countdown',
		icon: "clock" ,
		category: 'common',
		keywords:['countdown','timer'],
		attributes: {			
			open_or_close: {
				type: 'boolean',
				value: true,
				default: true
			},
			countdown_days_text:{
				type: 'string',
				value: "",
				default: "Days",
			},
			countdown_hourse_text:{
				type: 'string',
				value: "Hours",
				default: "Hours"
			},
			countdown_minuts_text:{
				type: 'string',
				value: "Minutes",
				default: "Minutes"
			},
			countdown_seconds_text:{
				type: 'string',
				value: "Seconds",
				default: "Seconds"
			},
			countdown_experet_type:{
				type: 'string',
				value: "time",
				default: "time"
			},
			countdown_experet_date:{
				type: 'string',
				value:"",
				default:""
			},
			countdownday:{
				type: 'string',
				value: "0",
				default: "0"
			},
			countdownhour:{
				type: 'string',
				value: "1",
				default: "1"
			},
			countdownminute:{
				type: 'string',
				value: "1",
				default: "1"
			},			
			countdown_start_date:{
				type: 'string',
				value: "",
				default: ""
			},			
			countdownstart_on:{
				type: 'string',
				value: "hide",
				default: "hide"
			},
			expeiret_text:{
				type: 'string',
				value: "",
				default: ""
			},
			countdown_in_content_position:{
				type: 'string',
				value: "center",
				default: "center"
			},
			countdown_top_distance:{
				type: 'string',
				value: "10",
				default: "10"
			},
			countdown_bottom_distance:{
				type: 'string',
				value: "10",
				default: "10"
			},
			countdown_type:{
				type: 'string',
				value: "button",
				default: "button"
			},
			countdown_font_color:{
				type: 'string',
				value: "#000000",
				default: "#000000"
			},
			countdown_button_color:{
				type: 'string',
				value: "#3DA8CC",
				default: "#3DA8CC"
			},
			countdown_circle_size:{
				type: 'string',
				value: "130",
				default: "130"
			},
			countdown_circle_border:{
				type: 'string',
				value: "5",
				default: "5"
			},
			countdown_border_radius:{
				type: 'string',
				value: "8",
				default: "8"
			},
			countdown_font_size:{
				type: 'string',
				value: "30",
				default: "30"
			},
			countdown_font_famaly:{
				type: 'string',
				value: "monospace",
				default: "monospace"
			},
			countdown_animation_type:{
				type: 'string',
				value: "",
				default: ""
			}
		},
		edit: function( props ) {
			if(props.attributes.countdown_start_date===""){
				props.setAttributes({countdown_start_date:(parseInt(Date.now()/1000)+"")})			
			}
			return el( 'span', { },create_open_hide_block()
					 
					 );
			
			function create_open_hide_block(){
				var open_or_close_class="";
				if(props.attributes.open_or_close===false){
					open_or_close_class=" closed_params";
				}
				return el("div",{className:"wpdevart_countdown_main_collapsible_element"+open_or_close_class},create_head(),create_content())
			}
			function create_head(){
				return el("div",{className:"head_block",onClick:function(value){open_close_element(value)}},
						  el("span",{className:"title_image"},
									 el("img",{src:wpda_countdown_gutenberg['other_data']['content_icon']})
						  ),
						  el("span",{className:"title fdghdfg"},"WpDevArt Countdown"

						  ),
						  el("span",{className:"head_block"},

						  ),
						  el("span",{className:"open_or_closed"},

						  ),
					   );
			}
			function create_content(){
				var wpda_countdown_fields=new Array();
				var aditional_css_for_countdownday={};
				var aditional_css_countdown_experet_date={};
				var font_familis={"Arial,Helvetica Neue,Helvetica,sans-serif":"Arial *","Arial Black,Arial Bold,Arial,sans-serif":"Arial Black *","Arial Narrow,Arial,Helvetica Neue,Helvetica,sans-serif":"Arial Narrow *","Courier,Verdana,sans-serif":"Courier *","Georgia,Times New Roman,Times,serif":"Georgia *","Times New Roman,Times,Georgia,serif":"Times New Roman *","Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Arial,sans-serif":"Trebuchet MS *","Verdana,sans-serif":"Verdana *","American Typewriter,Georgia,serif":"American Typewriter","Andale Mono,Consolas,Monaco,Courier,Courier New,Verdana,sans-serif":"Andale Mono","Baskerville,Times New Roman,Times,serif":"Baskerville","Bookman Old Style,Georgia,Times New Roman,Times,serif":"Bookman Old Style","Calibri,Helvetica Neue,Helvetica,Arial,Verdana,sans-serif":"Calibri","Cambria,Georgia,Times New Roman,Times,serif":"Cambria","Candara,Verdana,sans-serif":"Candara","Century Gothic,Apple Gothic,Verdana,sans-serif":"Century Gothic","Century Schoolbook,Georgia,Times New Roman,Times,serif":"Century Schoolbook","Consolas,Andale Mono,Monaco,Courier,Courier New,Verdana,sans-serif":"Consolas","Constantia,Georgia,Times New Roman,Times,serif":"Constantia","Corbel,Lucida Grande,Lucida Sans Unicode,Arial,sans-serif":"Corbel","Franklin Gothic Medium,Arial,sans-serif":"Franklin Gothic Medium","Garamond,Hoefler Text,Times New Roman,Times,serif":"Garamond","Gill Sans MT,Gill Sans,Calibri,Trebuchet MS,sans-serif":"Gill Sans MT","Helvetica Neue,Helvetica,Arial,sans-serif":"Helvetica Neue","Hoefler Text,Garamond,Times New Roman,Times,sans-serif":"Hoefler Text","Lucida Bright,Cambria,Georgia,Times New Roman,Times,serif":"Lucida Bright","Lucida Grande,Lucida Sans,Lucida Sans Unicode,sans-serif":"Lucida Grande","monospace":"monospace","Palatino Linotype,Palatino,Georgia,Times New Roman,Times,serif":"Palatino Linotype","Tahoma,Geneva,Verdana,sans-serif":"Tahoma","Rockwell, Arial Black, Arial Bold, Arial, sans-serif":"Rockwell"};
				var animation_efects={"none":"none","random":"random","bounce":"bounce","flash":"flash","pulse":"pulse","rubberBand":"rubberBand","shake":"shake","swing":"swing","tada":"tada","wobble":"wobble","bounceIn":"bounceIn","bounceInDown":"bounceInDown","bounceInLeft":"bounceInLeft","bounceInRight":"bounceInRight","bounceInUp":"bounceInUp","fadeIn":"fadeIn","fadeInDown":"fadeInDown","fadeInDownBig":"fadeInDownBig","fadeInLeft":"fadeInLeft","fadeInLeftBig":"fadeInLeftBig","fadeInRight":"fadeInRight","fadeInRightBig":"fadeInRightBig","fadeInUp":"fadeInUp","fadeInUpBig":"fadeInUpBig","flip":"flip","flipInX":"flipInX","flipInY":"flipInY","lightSpeedIn":"lightSpeedIn","rotateIn":"rotateIn","rotateInDownLeft":"rotateInDownLeft","rotateInDownRight":"rotateInDownRight","rotateInUpLeft":"rotateInUpLeft","rotateInUpRight":"rotateInUpRight","rollIn":"rollIn","zoomIn":"zoomIn","zoomInDown":"zoomInDown","zoomInLeft":"zoomInLeft","zoomInRight":"zoomInRight","zoomInUp":"zoomInUp"};
				
				if(props.attributes.countdown_experet_type=="time"){
					aditional_css_countdown_experet_date["display"]="none";
				}else{
					aditional_css_for_countdownday["display"]="none";					
				}
				
				wpda_countdown_fields.push(wpda_countdown_lb_simple_input("countdown_days_text","Day field text","Type here text for Day field."));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_input("countdown_hourse_text","Hour field text","Type here text for Hour field."));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_input("countdown_minuts_text","Minute field text","Type here text for Minute field."));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_input("countdown_seconds_text","Second field text","Type here text for Second field."));
				wpda_countdown_fields.push(wpda_countdown_lb_select_open_hide_params("countdown_experet_type",{"time":"Time","date":"Date"},["countdownday","countdown_experet_date"],"Countdown date picker type","Select the Countdown date picker type."));
				wpda_countdown_fields.push(wpda_countdown_lb_days_hourse_minutes("countdownday","countdownhour","countdownminute","Countdown expire time","Type the Countdown expire time.",false,aditional_css_for_countdownday));
				wpda_countdown_fields.push(wpda_countdown_lb_calendar_input("countdown_experet_date","Countdown expire date","Type the Countdown expire date.",false,aditional_css_countdown_experet_date));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_select("countdownstart_on",{"hide":"Hide countdown","show_text":"Show text"},"After Countdown expire","Select the action you prefere after Countdown time expire.",false,{color:'red'}));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_textarea("expeiret_text","Message after countdown expire","Type the message that will appear after countdown time expire."));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_select("countdown_in_content_position",{"left":"Left","center":"Center","right":"Right"},"Countdown timer position","Select the Countdown Timer position."));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_input_with_small("countdown_top_distance","Countdown distance from top","Type the Countdown distance from top(px).","(px)"));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_input_with_small("countdown_bottom_distance","Countdown distance from bottom","Type the Countdown distance from bottom(px).","(px)"));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_select("countdown_type",{"button":"Button","circle":"Circle","vertical_slide":"Vertical Slider"},"Countdown timer buttons type","Choose the Countdown buttons type.",true));
				wpda_countdown_fields.push(wpda_countdown_lb_color_input("timer_text_color","Countdown timer text color","Choose the Countdown text color.",true));
				wpda_countdown_fields.push(wpda_countdown_lb_color_input("timer_bg_color","Countdown timer background color","Select the Countdown background color.",true));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_input_with_small("countdown_border_radius","Countdown timer border radius","Type the Countdown border radius(px).","(px)",true));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_input_with_small("countdown_font_size","Countdown timer font size","Type the Countdown font-size(px).","(px)",true));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_select("countdown_font_famaly",font_familis,"Countdown timer Font Family","Select the Countdown Font family.",true));
				wpda_countdown_fields.push(wpda_countdown_lb_simple_select("countdown_type",animation_efects,"Countdown animation type","Select the Countdown animation type.",true));
				wpda_countdown_fields.push(wpdevart_countdown_upgrate_pro_version());
				var table=el("tabel",{className:"wpdevart_countdown_content_block"},wpda_countdown_fields)
				return el("div",{className:"wpdevart_countdown_content_block"},table)
			}
			function open_close_element(colapsible_element){
				var target=colapsible_element.target;
				var head_element;
				if(target.parentNode.classList[0]=="wpdevart_countdown_main_collapsible_element"){
				   head_element=target.parentNode;
				}
				if(target.parentNode.parentNode.classList[0]=="wpdevart_countdown_main_collapsible_element"){
				   head_element=target.parentNode.parentNode;
				}
				if(target.parentNode.parentNode.parentNode.classList[0]=="wpdevart_countdown_main_collapsible_element"){
				   head_element=target.parentNode.parentNode.parentNode;
				}
				if(target.parentNode.parentNode.parentNode.parentNode.classList[0]=="wpdevart_countdown_main_collapsible_element"){
				   head_element=target.parentNode.parentNode.parentNode.parentNode;
				}
				if(typeof(head_element.classList[1])=="undefined"){
					props.setAttributes( { open_or_close:false } );
					head_element.classList.add("closed_params");
				}else{
					props.setAttributes( { open_or_close:true } );
					head_element.classList.remove("closed_params");
				}
			}
			function wpda_countdown_lb_simple_input(element_name,element_title,element_description,pro_feature=false,aditional_css={},){
				return el('tr',{className:"wpda_simple_input_tr "+"wpda_countdown_"+element_name,style:aditional_css},
						  wpda_countdown_title_and_description(element_title,element_description,pro_feature),
						  el('td',{className:"wpda_simple_input_td"},
							el('input',{type:"text",Value:props.attributes[element_name],onMouseDown:function(){if(pro_feature){alert(pro_feature_text); return false;}},className:'wpda_simple_input',onChange: function( value ) {var select=value.target; var params={}; params[element_name]=select.value;  props.setAttributes(params)}})
						  )
						
						);			 	
					 	 
			}
			function wpda_countdown_lb_simple_input_with_small(element_name,element_title,element_description,small_text,pro_feature=false,aditional_css={},){
				return el('tr',{className:"wpda_simple_input_tr "+"wpda_countdown_"+element_name,style:aditional_css},
						  wpda_countdown_title_and_description(element_title,element_description,pro_feature),
						  el('td',{className:"wpda_simple_input_td"},
							el('input',{type:"text",Value:props.attributes[element_name],onMouseDown:function(){if(pro_feature){alert(pro_feature_text); return false;}},className:'wpda_simple_input',onChange: function( value ) {var select=value.target; var params={}; params[element_name]=select.value;  props.setAttributes(params)}}),
							el('small',{className:'wpda_countdown_small_text'},small_text)
						  )
						
						);			 	
					 	 
			}
			
			function wpda_countdown_lb_simple_textarea(element_name,element_title,element_description,pro_feature=false,aditional_css={}){
				return el('tr',{className:"wpda_simple_input_tr "+"wpda_countdown_"+element_name,style:aditional_css},
						  wpda_countdown_title_and_description(element_title,element_description,pro_feature),
						  el('td',{className:"wpda_simple_input_td"},
							el('textarea',{type:"text",className:'wpda_simple_input',onChange: function( value ) {var select=value.target; var params={}; params[element_name]=select.value; props.setAttributes(params)}},props.attributes[element_name])
						  )
						
						);			 	
					 	 
			}
			function wpda_countdown_lb_simple_select(element_name,options_list,element_title,element_description,pro_feature=false,aditional_css={}){
				var created_options=new Array();
				for(var key in options_list) {
					selected_option=false;
					if(props.attributes[element_name]==key){
						selected_option=true;
					}
					created_options.push(el('option',{value:''+key+'',selected:selected_option},options_list[key]))
				}
				return el('tr',{className:"wpda_simple_input_tr "+"wpda_countdown_"+element_name, style:aditional_css},
						  wpda_countdown_title_and_description(element_title,element_description,pro_feature),
						  el('td',{className:"wpda_simple_input_td"},
							el( 'select', { className: "wpda_countdown_select",onMouseDown:function(){if(pro_feature){alert(pro_feature_text); return false;}},onChange: function( value ) {var select=value.target; var params={};  params[element_name]=select.options[select.selectedIndex].value;  props.setAttributes( params)}},created_options),
						  )						
						);			 	
					 	 
			}
			
			function wpda_countdown_lb_select_open_hide_params(element_name,options_list,open_closed_ids,element_title,element_description,pro_feature=false,aditional_css=""){
				var created_options=new Array();
				
				for(var key in options_list) {
					selected_option=false;
					if(props.attributes[element_name]==key){
						selected_option=true;
					}
					created_options.push(el('option',{value:''+key+'',selected:selected_option},options_list[key]))
				}
				return el('tr',{className:"wpda_simple_input_tr "+"wpda_countdown_"+element_name},
						  wpda_countdown_title_and_description(element_title,element_description,pro_feature),
						  el('td',{className:"wpda_simple_input_td"},
							el( 'select', { className: "wpda_countdown_select",onChange: function( value ) {
									var select=value.target;
									var curent_element_parent_div=select.parentNode.parentNode.parentNode;
									var params={};
									params[element_name]=select.options[select.selectedIndex].value;
								
									for(var i=0;i<open_closed_ids.length;i++){
										
										curent_element_parent_div.getElementsByClassName("wpda_countdown_"+open_closed_ids[i])[0].style.display="none";
									}
									curent_element_parent_div.getElementsByClassName("wpda_countdown_"+open_closed_ids[select.selectedIndex])[0].style.display="initial";
									props.setAttributes( params );
								}
							},created_options),
						  )						
						);			 	
					 	 
			}
			
			function wpda_countdown_lb_days_hourse_minutes(element_day_name,element_hour_name,element_minut_name,element_title,element_description,pro_feature=false,aditional_css={}){
				return el('tr',{className:"wpda_simple_input_tr "+"wpda_countdown_"+element_day_name, style:aditional_css},
						  wpda_countdown_title_and_description(element_title,element_description,pro_feature),
						  el('td',{className:"wpda_simple_input_td"},
							 el('span',{className:'wpda_simple_span_time'},
									el('input',{seze:"3",type:"text",Value:props.attributes[element_day_name],className:'wpda_simple_input_time',onChange: function( value ) {var select=value.target; var params={}; params[element_day_name]=select.value;  props.setAttributes(params)}}),
									el("small",{className:"wpda_simple_input_time_small"},"Day")
							   ),
							 el('span',{className:'wpda_simple_span_time'},
									el('input',{seze:"3",type:"text",Value:props.attributes[element_hour_name],className:'wpda_simple_input_time',onChange: function( value ) {var select=value.target; var params={}; params[element_hour_name]=select.value;  props.setAttributes(params)}}),
									el("small",{className:"wpda_simple_input_time_small"},"Hour")
							   ),
							 el('span',{className:'wpda_simple_span_time'},
									el('input',{seze:"3",type:"text",Value:props.attributes[element_minut_name],className:'wpda_simple_input_time',onChange: function( value ) {var select=value.target; var params={}; params[element_minut_name]=select.value;  props.setAttributes(params)}}),
									el("small",{className:"wpda_simple_input_time_small"},"Minut")
							   )
						  )
						
						);		 	
					 	 
			}
			
			function wpda_countdown_lb_calendar_input(element_name,element_title,element_description,pro_feature=false,aditional_css={}){
				var date="";

				if(props.attributes[element_name]===""){
					var params={};
					params[element_name]=moment().format("YYYY-MM-DDTHH:mm:ss");
					props.setAttributes(params[element_name]);
				}
				if(props.attributes[element_name]===""){
					date=moment().format("YYYY-MM-DDTHH:mm:ss");
				}else{
					date=props.attributes[element_name];
				}
				return el('tr',{className:"wpda_simple_input_tr "+"wpda_countdown_"+element_name, style:aditional_css},
						  wpda_countdown_title_and_description(element_title,element_description,pro_feature),
						  el('td',{className:"wpda_simple_input_td"},
							
							el(components.DateTimePicker,{type:"input",currentDate:date, onChange: function( value ) { var params={}; params[element_name]=value;  props.setAttributes(params)}})
						  )
						
						);			 	
					 	 
			}
			
			function wpda_countdown_lb_color_input(element_name,element_title,element_description,pro_feature=false,aditional_css={}){
				return el('tr',{className:"wpda_simple_input_tr "+"wpda_countdown_"+element_name,style:aditional_css},
						  wpda_countdown_title_and_description(element_title,element_description,pro_feature),
						  el('td',{className:"wpda_color_input_td"},
							el('input',{type:"color",onMouseDown:function(){if(pro_feature){alert(pro_feature_text); return false;}},Value:props.attributes[element_name],className:'wpda_simple_input',onChange: function( value ) {var select=value.target; var params={}; params[element_name]=select.value;  props.setAttributes(params)}})
						  )
						
						);			 	
					 	 
			}
			
			function wpda_countdown_title_and_description(element_title,element_description,pro_feature=false){
				if(pro_feature){
					var pro_element=el("span",{className:"pro_feature"}," (pro)");
				}else{
					var pro_element="";
				}
				return el('td',{className:"wpda_title_description_td"},
						   el('span',{className:"wpda_countdown_element_title"},element_title

						   ),
						  
						   pro_element,
						  
						   el('span',{className:"wpda_countdown_element_description",title:element_description},"?"
						   )							
					  )
			}
			function wpdevart_countdown_upgrate_pro_version(){
				return el("tr",{},
						 el("td",{colspan:"2",className:"wpdevart_countdown_upgrate_pro_link_td"},
						   el("a",{href:"https://wpdevart.com/wordpress-countdown-plugin",target:"_blank",style:{'text-align':'center','color': 'rgba(10, 154, 62, 1)','font-weight': 'bold','font-size':'18px', 'text-decoration': 'none'}},'Upgrade to Pro Version')
						   )
						 )
			}
			
		},
		
		save: function( props ) {	
			var shortcode_atributes="";
			start_time="";
			start_time=props.attributes.countdown_start_date+"";
			var end_date=""
			var datetime=new Array();
			var date=new Array();
			var time=new Array();
			if(props.attributes.countdown_experet_date.length!=0){
				datetime=props.attributes.countdown_experet_date.split('T');
				date=datetime[0].split('-');
				time=datetime[1].split(':');
				end_date=date[2]+"-"+date[1]+"-"+date[0]+" "+time[0]+":"+time[1];
			}
			
			
			shortcode_atributes = shortcode_atributes + 'text_for_day="' + props.attributes.countdown_days_text + '"';
			shortcode_atributes = shortcode_atributes + ' text_for_hour="' + props.attributes.countdown_hourse_text + '"';
			shortcode_atributes = shortcode_atributes + ' text_for_minut="' + props.attributes.countdown_minuts_text + '"';
			shortcode_atributes = shortcode_atributes + ' text_for_second="' + props.attributes.countdown_seconds_text + '"';
			shortcode_atributes = shortcode_atributes + ' countdown_end_type="' + props.attributes.countdown_experet_type + '"';
			shortcode_atributes = shortcode_atributes + ' end_date="' + end_date + '"';
			shortcode_atributes = shortcode_atributes + ' start_time="' + start_time + '"';
			shortcode_atributes = shortcode_atributes + ' end_time="' + props.attributes.countdownday + ',' + props.attributes.countdownhour + ',' +  props.attributes.countdownminute +'"';
			shortcode_atributes = shortcode_atributes + ' action_end_time="' + props.attributes.countdownstart_on + '"';
			shortcode_atributes = shortcode_atributes + ' content_position="' + props.attributes.countdown_in_content_position + '"';
			shortcode_atributes = shortcode_atributes + ' top_ditance="' + props.attributes.countdown_top_distance + '"';
			shortcode_atributes = shortcode_atributes + ' bottom_distance="' + props.attributes.countdown_bottom_distance + '"';
			shortcode_atributes = shortcode_atributes + ' countdown_type="button"';
			shortcode_atributes = shortcode_atributes + ' font_color="#000000"';
			shortcode_atributes = shortcode_atributes + ' button_bg_color="#3DA8CC"';
			shortcode_atributes = shortcode_atributes + ' circle_size="130"';			
			shortcode_atributes = shortcode_atributes + ' circle_border="5"';			
			shortcode_atributes = shortcode_atributes + ' border_radius="8"';
			shortcode_atributes = shortcode_atributes + ' font_size="30"';
			shortcode_atributes = shortcode_atributes + ' countdown_font_famaly="monospace"';
			shortcode_atributes = shortcode_atributes + ' animation_type=""';
			return "[wpdevart_countdown "+shortcode_atributes+"]"+props.attributes.expeiret_text+"[/wpdevart_countdown]";
		}

	} )
} )(
	window.wp.blocks,
	window.wp.editor,
	window.wp.i18n,
	window.wp.element,
	window.wp.components,
	window._,
);

