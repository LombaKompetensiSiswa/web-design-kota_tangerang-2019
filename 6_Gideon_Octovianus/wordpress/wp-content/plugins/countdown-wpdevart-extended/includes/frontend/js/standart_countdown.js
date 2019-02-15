/*standart countdown protytype_script*/
(function($){
	// standart countdown 
	$.fn.wpdevart_countdown_extend_standart = function(options,calback) {
		var element = $(this);
		// curent seconds left
		var seconds_left=options.seconds_left;
		var array_of_dates=['day','hour','minut','second'];
		
		/* calculating Date */
		var kaificents_by_seconds={
				week:604800,
				day:86400,
				hour:3600,
				minut:60,
				second:1,
		}
		var loc_kaificents=get_kaificents();		
		var kaificents=loc_kaificents[0];
		var count_of_display_dates=loc_kaificents[1];
		delete loc_kaificents;
		/*end of Calculating Dates*/		
		create_html();
		// set timer
		var interval_id=setInterval(function(){seconds_left--;time_object=(calculate_time(seconds_left));change_html_time(time_object);},1000);
		// create html 
		function create_html(){
			array_of_dates=['day','hour','minut','second'];
			for(i=0;i<array_of_dates.length;i++){
				if(typeof(options.display_days[array_of_dates[i]])=="undefined"){
					continue;
				}else{
					
					element.append('<div class="wpdevart_countdown_extend_element '+array_of_dates[i]+'_block_element"><span class="time_left_extended '+array_of_dates[i]+'_left"></span><span class="time_text '+array_of_dates[i]+'_text"></span></div>')
				}
			}
			time_object=(calculate_time(seconds_left));
			change_html_time(time_object);
			set_html_text(options.display_days);
		}
		// set text for html
		function set_html_text(text_of_html){			
			jQuery.each(text_of_html,function(index,value){
				element.find('.'+index+'_text').html(options.display_days_texts[index]);
			})
		}
		// change time
		function change_html_time(time_object){	
			jQuery.each(time_object,function(index,value){
				element.find('.'+index+'_left').html(value);
			})
		}
		/* get day kaificents*/
		function get_kaificents(){
			var kaificent={
				week:10000000000,
				day:7,
				hour:24,
				minut:60,
				second:60,
			}
			var k=5;
			if(typeof(options.display_days.week)=="undefined"){
				kaificent["day"]=kaificent["week"]*7;
				delete kaificent.week;
				k--;
			}
			if(typeof(options.display_days.day)=="undefined"){
				kaificent["hour"]=kaificent["day"]*24;
				delete kaificent.day;
				k--;
			}
			if(typeof(options.display_days.hour)=="undefined"){
				kaificent["minut"]=kaificent["hour"]*60;
				delete kaificent.hour;
				k--;
			}
			if(typeof(options.display_days.minut)=="undefined"){
				kaificent["second"]=kaificent["minut"]*60;
				delete kaificent.minut;
				k--;
			}
			if(typeof(options.display_days.second)=="undefined"){
				delete kaificent.second;
				k--;
			}
			return[kaificent,k];
		}
		/*Caluclating time*/
		function calculate_time(seconds){	
			var time_object={};
			var loc_seconds_left=seconds;
			var k=0;
			jQuery.each(kaificents,function(index,value){
				k++;
				if(k==count_of_display_dates && loc_seconds_left!=0){
					time_object[index]=Math.min(Math.ceil(loc_seconds_left/kaificents_by_seconds[index]),value);
					loc_seconds_left=loc_seconds_left-time_object[index]*kaificents_by_seconds[index];
					
				}else{
					time_object[index]=Math.min(Math.floor(loc_seconds_left/kaificents_by_seconds[index]),value);
					loc_seconds_left=loc_seconds_left-time_object[index]*kaificents_by_seconds[index];
				}
			})
			if(seconds==0){
				after_countdown();
			}
			return time_object;
		}
		
		/*after Countdown and functions*/
		function after_countdown(){
			switch(options.after_countdown_end_type){
					
				case "hide":
					hide_countdown();
					break;
				case "text":
					show_countdown_text();
					break;
				default:
					hide_countdown();
			}
		}
		function hide_countdown(){
			clearInterval(interval_id);
			element.remove();
		}
		function show_countdown_text(){
			clearInterval(interval_id);
			element.html(options.after_countdown_text);
		}
		if(parseInt(options.inline)){
			jQuery(document).ready(function(){
				initial_start_parametrs();
				display_line();
			})		
			jQuery(window).resize(function(){display_line()})
		}
		function initial_start_parametrs(){
			element.find(".wpdevart_countdown_extend_element").each(function(){
				jQuery(this).attr("date-width",jQuery(this).width());
				jQuery(this).attr("date-distance",jQuery(this).css("margin-right"));
				var time_left_extended=jQuery(this).find(".time_left_extended");
				var time_text=jQuery(this).find(".time_text");
				time_left_extended.attr("date-font",time_left_extended.css("font-size"));
				time_text.attr("date-font",time_text.css("font-size"));
				time_left_extended.attr("date-margin",time_left_extended.css("margin"));
				time_text.attr("date-margin",time_text.css("margin"));
				time_left_extended.attr("date-padding",time_left_extended.css("padding"));
				time_text.attr("date-padding",time_text.css("padding"));
				delete(time_left_extended);
				delete(time_text);
			})
		}	
	}

})(jQuery)
	