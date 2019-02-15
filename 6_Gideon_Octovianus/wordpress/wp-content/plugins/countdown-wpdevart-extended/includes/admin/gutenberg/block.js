(function( blocks,  element ) {
	var el = element.createElement;
	var icon_iamge = el( 'img', {
      width: 24,
      height: 24,
      src: window['wpda_countdown_extended_gutenberg']["other_data"]["icon_src"],
	  className: "wpdevart_countdown_extended_icon"
    } );
	blocks.registerBlockType( 'wpdevart-countdownextended/countdown-extended', {
		title: 'WpDevArt Countdown extendeds',
		icon: icon_iamge ,
		category: 'common',
		keywords:['countdown','timer','time'],
		attributes: {			
			timer: {
				type: 'string',
				selector: 'select',
			},
			theme: {
				type: 'string',
				selector: 'select',
			}
		},
		edit: function( props ) {
			var attributes = props.attributes;
			var timer_options=new Array(),theme_options=new Array();
			var selected_option=false;
	
			for(var key in wpda_countdown_extended_gutenberg["timers"]) {
				selected_option=false;
				if(typeof(attributes.timer)=="undefined"){					
					props.setAttributes( { timer: key })
					attributes.timer=key;
				}else{
					if(props.attributes.timer==key){
						selected_option=true;
					}
				}
				timer_options.push(el('option',{value:''+key+'',selected:selected_option},wpda_countdown_extended_gutenberg["timers"][key]))
			}
			for(var key in wpda_countdown_extended_gutenberg["themes"]) {
				selected_option=false;
				if(typeof(attributes.theme)=="undefined"){
					props.setAttributes( { theme: key})
					attributes.theme=key;
				}else{
					if(props.attributes.theme==key){
						selected_option=true;
					}
				}
				theme_options.push(el('option',{value:''+key+'',selected:selected_option},wpda_countdown_extended_gutenberg["themes"][key]))
			}
			
			return (
				el( 'div', { className: props.className },				   
				  el( 'div', { className: "wpdevart_gutenberg_timer_main_div"},
					el( 'span', { },"Wpdevart countdown extended"),
					el( 'br'),
				    el( 'label', { },"Select a Timer"),
					el( 'select', { className: "wpdevart_gutenberg_timer_css",onChange: function( value ) {var select=value.target; props.setAttributes( { timer: select.options[select.selectedIndex].value })}},timer_options),
					el( 'br'),
					el( 'label', { },"Select a Theme"),
					el( 'select', { className: "wpdevart_gutenberg_theme_css",onChange: function( value ) {var select=value.target; props.setAttributes( { theme: select.options[select.selectedIndex].value })}},theme_options),
				  )
				)
			);
			
		},
		save: function( props ) {			
			return "[wpda_contdown_extend timer_id="+props.attributes.timer+"  theme_id="+props.attributes.theme+"]";
		}

	} )
} )(
	window.wp.blocks,
	window.wp.element
);

