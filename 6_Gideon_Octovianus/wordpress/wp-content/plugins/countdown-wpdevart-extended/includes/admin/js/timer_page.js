function submitbutton(value){
	jQuery("#adminForm").attr("action",jQuery("#adminForm").attr("action")+"&task="+value);
	jQuery("#adminForm").submit();
}
wpda_timer_class={
	start_tab_id:"timer_set_time",
	conected_array_after_type:{
		"hide":"",
		"text":"after_countdown_text",
		"repeat":"after_countdown_repeat_time_hour_id",
		"redirect":"after_countdown_redirect",
	},
	start:function(){
		var self=this;
		jQuery(document).ready(function(){
			self.conect_tab_activate_functionality();
			self.activete_tab(self.start_tab_id);
			self.initialize_timpickers();
			self.show_hide_params_by_select();
			self.pro_feature_click();
		})
	},
	conect_tab_activate_functionality:function(){
		var self=this;
		jQuery(".wpda_timer_link_tabs li").click(function(){
			self.activete_tab(jQuery(this).attr('id').replace("_tab",""));
		});
	},
	activete_tab:function(tab_id){
		jQuery(".wpda_timer_link_tabs li,.all_options_panel table tr").removeClass('active');	
		jQuery("#"+tab_id+"_tab").addClass('active');
		jQuery((".all_options_panel table tr" + "."+tab_id)).addClass('active');
		if(tab_id=="after_timer")
			this.activate_elements_after_countdown(jQuery("#after_countdown_end_type").val())
	},
	initialize_timpickers:function(){
		jQuery('.wpda_datepicker_timer').datetimepicker({
			controlType:'slider',
			dateFormat: "dd/mm/yy",
			TimeFormat: "h:m",
		});
		jQuery('.ui-datepicker-trigger').addClass("button");		
	},
	show_hide_params_by_select:function(){
		var self=this;
		jQuery("#after_countdown_end_type").change(function(){
			if(jQuery(this).val()=="repeat" || jQuery(this).val()=="redirect"){
				alert("If you want to use this feature upgrade to Countdown Pro");
				jQuery(this).val("hide");
				self.activate_elements_after_countdown(jQuery(this).val())
				return false;
			}
			self.activate_elements_after_countdown(jQuery(this).val())			
		});
	},
	activate_elements_after_countdown:function(element){
		var active_item=this["conected_array_after_type"][element];
		jQuery("tr.tr_option.after_timer").removeClass('active');
		jQuery("#after_countdown_end_type").closest("tr.tr_option.after_timer").addClass('active');		
		if(typeof(active_item)=="object"){
			var i=0;
			for(i=0;i<active_item.length;i++){
				jQuery("#"+active_item[i]).closest("tr.tr_option").addClass('active');
			}
		}else{
			if(active_item!==""){
				jQuery("#"+active_item).closest("tr.tr_option").addClass('active');
			}
		}
	},
	pro_feature_click:function(){
		jQuery('.wpda_countdown_extended_pro_feature input,.wpda_countdown_extended_pro_feature select,.wpda_countdown_extended_pro_feature .wp-picker-container,.wpda_countdown_extended_pro_feature').mousedown(function(){
			jQuery(alert("If you want to use this feature upgrade to Countdown Pro"));
			return false;
		})
	}
	
}

wpda_timer_class.start();