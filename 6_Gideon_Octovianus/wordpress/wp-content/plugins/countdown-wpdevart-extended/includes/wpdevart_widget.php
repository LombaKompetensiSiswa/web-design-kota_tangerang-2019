<?php 
/*############################### WIDGET ###############################################*/

class wpdevart_countdown_extended extends WP_Widget {
	private static $id_for_content=0;
	// Constructor //	
	function __construct() {		
		$widget_ops = array( 'classname' => 'wpdevart_countdown_extended', 'description' => 'Countdown timer Extended for widget' ); // Widget Settings
		$control_ops = array( 'id_base' => 'wpdevart_countdown_extended' ); // Widget Control Settings
		parent::__construct( 'wpdevart_countdown_extended', 'Countdown Extended', $widget_ops, $control_ops ); // Create the widget
	}

	/*countdown display in front*/
	function widget($args, $instance) {
		self::$id_for_content++;
		extract( $args );
		$title = $instance['title'];    
		// Before widget //
		echo $before_widget;		
		// Title of widget //
		if ( $title ) { echo $before_title . $title . $after_title; }
		// Widget output //
		echo $this->wpdevart_generete_front_end($instance);
		// After widget //		
		echo $after_widget;
	}
	// Update Settings //
	function update($new_instance, $old_instance) {	
		extract( $args );
		$instance['title'] 	= strip_tags($new_instance['title']);    
		$instance['theme'] 	= $new_instance['theme'];
		$instance['timer'] 	= $new_instance['timer'];
		return $instance;  /// return new value of parametrs		
	}

	/* admin page opions */
	function form($instance) {
		$defaults = array( 
			'title' 				=> '',
			'theme' 				=> '0',
			'timer' 				=> '0',
		);
		$instance = wp_parse_args( (array) $instance, $defaults );
		$themes=$this->get_themes();
		$timers=$this->get_timers();
		?> 
        <p class="flb_field">
          <label for="title">Title:</label>
          <br>
          <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" class="widefat">
        </p>
        
        <p class="flb_field">  

			<select style="width: 100%" id="<?php echo $this->get_field_id('timer'); ?>" name="<?php echo $this->get_field_name('timer'); ?>">
				<option value="0">Select Timer</option>
				<?php foreach($timers as $id => $name){
					echo "<option ".selected($id,$instance['timer'],false)." value=\"".$id."\">".$name."</option>";
				} ?>
			</select>  
            <a target="_blank" style="text-decoration: none; color: #5b9dd9; font-size: 14px;" href="<?php echo get_admin_url().'admin.php?page=wpda_contdown_extend_menu&task=add_wpda_contdown_extend_timer'  ?>">(Add new timer)</a>   
        </p>
        
        <p class="flb_field">  
			<select style="width: 100%" id="<?php echo $this->get_field_id('theme'); ?>" name="<?php echo $this->get_field_name('theme'); ?>">
				<option value="0">Select Theme</option>
				<?php foreach($themes as $id => $name){
					echo "<option ".selected($id,$instance['theme'],false)." value=\"".$id."\">".$name."</option>";
				} ?>
			</select>  
        </p>
          
        
		<?php 
	}
	// return array timers ids and names
	private function get_timers(){
		global $wpdb;
		$timer=array();
		$query = "SELECT `id`,`name` FROM ".wpda_contdown_extend_databese::$table_names['timer'];
		$rows=$wpdb->get_results($query,ARRAY_A);
		foreach($rows as $value){
			$timer[$value["id"]]=$value["name"];
		}
		return $timer;
	}
	// return array theme ids and names
	private function get_themes(){
		global $wpdb;
		$thems=array();
		$query = "SELECT `id`,`name` FROM ".wpda_contdown_extend_databese::$table_names['theme'];
		$rows=$wpdb->get_results($query,ARRAY_A);
		foreach($rows as $value){
			$thems[$value["id"]]=$value["name"];
		}
		return $thems;
	}
	private function wpdevart_generete_front_end($parametrs){
		if(!$parametrs["theme"]){
			return "<p>Select Theme</p>";
		}
		if(!$parametrs["timer"]){
			return "<p>Select Timer</p>";
		}
		return do_shortcode('[wpda_contdown_extend timer_id="'.$parametrs["timer"].'"  theme_id="'.$parametrs["theme"].'"]');
	}
}
add_action('widgets_init', create_function('', 'return register_widget("wpdevart_countdown_extended");'));