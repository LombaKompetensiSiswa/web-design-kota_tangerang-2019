/*for reomve cookies this uses for show one time or more times*/
function countdown_set_cookies(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires+"; path=/";
}
/*ADMIN CUSTOMIZE SETTINGS OPEN OR HIDE*/
function get_array_of_opened_elements(){
	var kk=0;
	var array_of_activ_elements=new Array();
	jQuery('#countdown_extended_page .main_parametrs_group_div').each(function(index, element) {		
        if(!jQuery(this).hasClass('closed_params')){			
			array_of_activ_elements[kk]=jQuery('#countdown_extended_page .main_parametrs_group_div').index(this);
			kk++;
		}
    });
	return array_of_activ_elements;
}

jQuery(document).ready(function(e) {
	/* SECTION OPEN HIDE AND SEAVE*/
    if (typeof(localStorage) != 'undefined' ) {
			active_coming_sections = localStorage.getItem("countdown_extended_array_of_activ_section");
			active_coming_sections=JSON.parse(active_coming_sections)
			if(active_coming_sections!=null)
			for(ii=0; ii<active_coming_sections.length;ii++){
				jQuery(jQuery('#countdown_extended_page .main_parametrs_group_div').eq(active_coming_sections[ii])).removeClass('closed_params');
			}
	}	
	jQuery('.wpda_countdown_extended_pro_feature input,.wpda_countdown_extended_pro_feature select,.wpda_countdown_extended_pro_feature .wp-picker-container,.wpda_countdown_extended_pro_feature').mousedown(function(){
		jQuery(alert("If you want to use this feature upgrade to Countdown Pro"));
		return false;
	})
	jQuery('.main_parametrs_group_div > .head_panel_div').click(function(){
		
		if(jQuery(this).parent().hasClass('closed_params')){
			jQuery(this).parent().find('.inside_information_div').slideDown( "normal" )
			jQuery(this).parent().removeClass('closed_params');
			localStorage.setItem("countdown_extended_array_of_activ_section", JSON.stringify(get_array_of_opened_elements()));
		}
		else{
			jQuery(this).parent().find('.inside_information_div').slideUp( "normal",function(){jQuery(this).parent().addClass('closed_params'); localStorage.setItem("countdown_extended_array_of_activ_section", JSON.stringify(get_array_of_opened_elements()));} )
		}
		
	})
	/*SET CoLOR PICKERS*/
	jQuery('.color_option').wpColorPicker()
	jQuery('#countdown_extended_enable > label,.save_button_span,.wpda_countdown_extended_pro_feature input,.wpda_countdown_extended_pro_feature select,.wpda_countdown_extended_pro_feature .wp-picker-container,.wpda_countdown_extended_pro_feature').mousedown(function(){
			jQuery(alert("If you want to use this feature upgrade to Countdown Pro"));
			return false;
		})

});