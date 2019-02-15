function submitbutton(value){
	jQuery("#adminForm").attr("action",jQuery("#adminForm").attr("action")+"&task="+value);
	jQuery("#adminForm").submit();
}
wpda_countdown_theme_class={
	start_tab_id:"countdown_theme_general",
	list_of_fields_po_mo:["text_for_weeks","text_for_day","text_for_hour","text_for_minute","text_for_second"],
	start:function(){
		var self=this;
		jQuery(document).ready(function(){
			self.conect_tab_activate_functionality();
			self.activete_tab(self.start_tab_id);
			self.set_diplay_none_and_block();
			self.pro_feature_click();
		})
	},
	conect_tab_activate_functionality:function(){
		var self=this;
		jQuery(".wpda_theme_link_tabs li").click(function(){
			self.activete_tab(jQuery(this).attr('id').replace("_tab",""));
		});
	},
	// for using po mo or get tex from admin
	set_diplay_none_and_block:function(){
		var self=this;
		jQuery("#countdown_text_type").change(function(){
			if(jQuery(this).val()=="standart"){
				for(i=0;i<self.list_of_fields_po_mo.length;i++){
					jQuery("#"+self.list_of_fields_po_mo[i]).parent().parent().show();
				}
			}else{
				for(i=0;i<self.list_of_fields_po_mo.length;i++){
					jQuery("#"+self.list_of_fields_po_mo[i]).parent().parent().hide();
				}
			}
		})
		if(jQuery("#countdown_text_type").val()=="standart"){
			for(i=0;i<self.list_of_fields_po_mo.length;i++){
				jQuery("#"+self.list_of_fields_po_mo[i]).parent().parent().show();
			}
		}else{
			for(i=0;i<self.list_of_fields_po_mo.length;i++){
				jQuery("#"+self.list_of_fields_po_mo[i]).parent().parent().hide();
			}
		}
	},
	activete_tab:function(tab_id){
		jQuery(".wpda_theme_link_tabs li,.all_options_panel table tr").removeClass('active');	
		jQuery("#"+tab_id+"_tab").addClass('active');
		jQuery((".all_options_panel table tr" + "."+tab_id)).addClass('active');
	},
	pro_feature_click:function(){
		jQuery('.wpda_countdown_extended_pro_feature input,.wpda_countdown_extended_pro_feature select,.wpda_countdown_extended_pro_feature .wp-picker-container,.wpda_countdown_extended_pro_feature').mousedown(function(){
			jQuery(alert("If you want to use this feature upgrade to Countdown Pro"));
			return false;
		})
	}
}

wpda_countdown_theme_class.start();