<?php
        $registration_end_date = get_event_registration_end_date();
        $registration_addon_form = apply_filters('event_manager_registration_addon_form',true);
        $event_timezone = get_event_timezone();
        
        //check if timezone settings is enabled as each event then set current time stamp according to the timezone
        // for eg. if each event selected then Berlin timezone will be different then current site timezone.
        if( WP_Event_Manager_Date_Time::get_event_manager_timezone_setting() == 'each_event'  )
        	$current_timestamp = WP_Event_Manager_Date_Time::current_timestamp_from_event_timezone( $event_timezone );
        else
        	$current_timestamp = current_time( 'timestamp' ); // If site wise timezone selected
        
        if ( attendees_can_apply()  &&  !strtotime($registration_end_date) <  $current_timestamp  && $registration_addon_form)
        	get_event_manager_template( 'event-registration.php' );