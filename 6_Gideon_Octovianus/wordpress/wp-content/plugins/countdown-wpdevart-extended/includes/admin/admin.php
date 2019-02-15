<?php

class wpda_contdown_extend_admin_panel{
// previus defined admin constants
// wpda_contdown_extend_plugin_url
// wpda_contdown_extend_plugin_path
	private $text_fileds;
	function __construct(){
		$this->admin_filters();
	}

	private function admin_filters(){
		//hook for admin menu
		add_action( 'admin_menu', array($this,'create_admin_menu') );
		/* for post page button*/
		add_filter( 'mce_external_plugins', array( $this ,'mce_external_plugins' ) );
		add_filter( 'mce_buttons', array($this, 'mce_buttons' ) );
		add_action('wp_ajax_wpda_contdown_extend_post_page_content', array($this,"post_page_popup_content"));
		add_action('wp_ajax_countdown_extended_popup_page_save', array($this,"ajax_save_popup_params"));
		$this->gutenberg();		
	}
	//conect admin menu
	public function create_admin_menu(){
		/* conect admin pages to wordpress core*/
		$main_page=add_menu_page( "Countdown", "Countdown", 'manage_options', "wpda_contdown_extend_menu", array($this, 'create_timer_page'),'dashicons-clock');
		add_submenu_page( "wpda_contdown_extend_menu", "Timer", "Timer", 'manage_options',"wpda_contdown_extend_menu",array($this, 'create_timer_page'));
		$countdown_theme=add_submenu_page( "wpda_contdown_extend_menu", "Themes", "Themes", 'manage_options',"wpda_contdown_extend_themes",array($this, 'countdown_themes_page'));		
		$popup_page=$theme_subpage_popup=add_submenu_page( "wpda_contdown_extend_menu", "Popup", "Popup <span style='color:green' > (Pro Feature!)</span>", 'manage_options',"wpda_contdown_extend_popup",array($this, 'popup_settings_page'));		
		add_submenu_page( "wpda_contdown_extend_menu", "Featured Plugins", "Featured Plugins", 'manage_options',"wpda_contdown_extend_featured_plugins",array($this, 'featured_plugins'));
		/*for including page styles and scripts*/
		add_action('admin_print_styles-' .$main_page, array($this,'create_timer_page_style_js'));
		add_action('admin_print_styles-' .$countdown_theme, array($this,'create_theme_page_style_js'));		
		add_action('admin_print_styles-' .$popup_page, array($this,'create_popup_page_style_js'));		
	}
	
	/* timer page style and js*/	
	public function create_timer_page_style_js(){
		
		//scripts
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-datepicker');
		wp_enqueue_script('jquery-ui-slider');		
		wp_enqueue_script( 'jquery-ui-spinner');	
		wp_enqueue_script("jquery-ui-date-time-picker-js");
		wp_enqueue_script("jquery-ui-date-time-picker-js");
		wp_enqueue_script('angularejs',wpda_contdown_extend_plugin_url.'includes/admin/js/angular.min.js');
		wp_enqueue_script("wpda_contdown_extend_timer_page_js",wpda_contdown_extend_plugin_url.'includes/admin/js/timer_page.js');

		//styles
		wp_enqueue_style( 'jquery-ui' );
		wp_enqueue_style('wpda_contdown_extend_timer_page_css',wpda_contdown_extend_plugin_url.'includes/admin/css/timer_page.css');
		wp_enqueue_style('jquery-ui-date-time-picker-css');
				
	}
	
	/* Themes page style and js*/	
	public function create_theme_page_style_js(){
		wp_enqueue_script('jquery');
		wp_enqueue_style( 'jquery-ui' );
		wp_enqueue_script('jquery-ui-slider');	
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script('angularejs',wpda_contdown_extend_plugin_url.'includes/admin/js/angular.min.js');
		wp_enqueue_style('wpda_contdown_extend_timer_page_css',wpda_contdown_extend_plugin_url.'includes/admin/css/theme_page.css');
		wp_enqueue_script("wpda_contdown_extend_timer_page_js",wpda_contdown_extend_plugin_url.'includes/admin/js/theme_page.js');
	}
	
	/* Popup page style and js*/	
	public function create_popup_page_style_js(){		
		wp_enqueue_style('FontAwesome');
		wp_enqueue_script('jquery');
		wp_enqueue_style( 'jquery-ui' );
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_style('wpda_contdown_extend_admin_popup_page_css',wpda_contdown_extend_plugin_url.'includes/admin/css/popup_page.css');
		wp_enqueue_script('wpda_contdown_extend_admin_popup_page_css',wpda_contdown_extend_plugin_url.'includes/admin/js/popup_page.js');
		if (function_exists('wp_enqueue_media')) wp_enqueue_media();
	}
	
	/* Timer page main*/	
	public function create_timer_page(){				
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/coundown_timer_page.php');	
		$timer_page_object=new wpda_contdown_extend_timer_page();
		$timer_page_object->controller_page();	
	}	
	/* themes*/		
	public function countdown_themes_page(){
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/coundown_theme_page.php');	
		$theme_page_objet=new wpda_contdown_extend_theme_page();	
		$theme_page_objet->controller_page();
	}
	
	/* popup page*/
	public function popup_settings_page(){
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/coundown_popup_page.php');	
		$popup_page_objet=new wpda_contdown_extend_popup_page();
		$popup_page_objet->controller_page();
	}	
	
	/*post page button*/
	public function mce_external_plugins( $plugin_array ) {
		$plugin_array["wpda_contdown_extend"] = wpda_contdown_extend_plugin_url.'includes/admin/js/post_page_insert_button.js';
		return $plugin_array;
	}
	/*post page button add_class*/
	public function mce_buttons( $buttons ) {
		array_push( $buttons, "wpda_contdown_extend" );
		return $buttons;
	}
	/*post page button insert in content*/
	public function post_page_popup_content(){	
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/post_page_popup.php');
		$popup_page_objet=new wpda_countdown_post_page_popup();		
	}
	/*ajax saving content*/
	public function ajax_save_popup_params(){	
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/coundown_popup_page.php');
		wpda_contdown_extend_popup_page::save_in_db();
		
	}
	/*concect with gutenberg editor*/
	public function gutenberg(){	
		require_once(wpda_contdown_extend_plugin_path.'includes/admin/gutenberg/gutenberg.php');
		$gutenberg=new wpda_countdown_extended_gutenberg();		
		
	}
	
		/*############################### Featured plugins function ########################################*/
	
	public function featured_plugins(){
		$plugins_array=array(
			'gallery_album'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/gallery-album-icon.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-gallery-plugin',
						'title'			=>	'WordPress Gallery plugin',
						'description'	=>	'Gallery plugin is an useful tool that will help you to create Galleries and Albums. Try our nice Gallery views and awesome animations.'
						),		
			'coming_soon'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/coming_soon.jpg',
						'site_url'		=>	'http://wpdevart.com/wordpress-coming-soon-plugin/',
						'title'			=>	'Coming soon and Maintenance mode',
						'description'	=>	'Coming soon and Maintenance mode plugin is an awesome tool to show your visitors that you are working on your website to make it better.'
						),
			'Contact forms'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/contact_forms.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-contact-form-plugin/',
						'title'			=>	'Contact Form Builder',
						'description'	=>	'Contact Form Builder plugin is an handy tool for creating different types of contact forms on your WordPress websites.'
						),	
			'Booking Calendar'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/Booking_calendar_featured.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-booking-calendar-plugin/',
						'title'			=>	'WordPress Booking Calendar',
						'description'	=>	'WordPress Booking Calendar plugin is an awesome tool to create a booking system for your website. Create booking calendars in a few minutes.'
						),	
			'youtube'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/youtube.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-youtube-embed-plugin',
						'title'			=>	'WordPress YouTube Embed',
						'description'	=>	'YouTube Embed plugin is an convenient tool for adding videos to your website. Use YouTube Embed plugin for adding YouTube videos in posts/pages, widgets.'
						),
            'facebook-comments'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/facebook-comments-icon.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-facebook-comments-plugin/',
						'title'			=>	'WordPress Facebook comments',
						'description'	=>	'WordPress Facebook comments plugin will help you to display Facebook Comments on your website. You can use Facebook Comments on your pages/posts.'
						),						
			'countdown'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/countdown.jpg',
						'site_url'		=>	'http://wpdevart.com/wordpress-countdown-plugin/',
						'title'			=>	'WordPress Countdown plugin',
						'description'	=>	'WordPress Countdown plugin is an nice tool for creating countdown timers for your website posts/pages and widgets.'
						),
			'lightbox'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/lightbox.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-lightbox-plugin',
						'title'			=>	'WordPress Lightbox plugin',
						'description'	=>	'WordPress Lightbox Popup is an high customizable and responsive plugin for displaying images and videos in popup.'
						),
			'facebook'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/facebook.jpg',
						'site_url'		=>	'http://wpdevart.com/wordpress-facebook-like-box-plugin',
						'title'			=>	'Facebook Like Box',
						'description'	=>	'Facebook like box plugin will help you to display Facebook like box on your wesite, just add Facebook Like box widget to sidebar or insert it into posts/pages and use it.'
						),
			'poll'=>array(
						'image_url'		=>	wpda_contdown_extend_plugin_url.'includes/admin/images/featured_plugins/poll.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-polls-plugin',
						'title'			=>	'WordPress Polls system',
						'description'	=>	'WordPress Polls system is an handy tool for creating polls and survey forms for your visitors. You can use our polls on widgets, posts and pages.'
						),
						
			
		);
		?>
        <style>
         .featured_plugin_main{
			 background-color: #ffffff;
			 border: 1px solid #dedede;
			 box-sizing: border-box;
			 float:left;
			 margin-right:20px;
			 margin-bottom:20px;
			 
			 width:450px;
		 }
		.featured_plugin_image{
			padding: 15px;
			display: inline-block;
			float:left;
		}
		.featured_plugin_image a{
		  display: inline-block;
		}
		.featured_plugin_information{			
			float: left;
			width: auto;
			max-width: 282px;

		}
		.featured_plugin_title{
			color: #0073aa;
			font-size: 18px;
			display: inline-block;
		}
		.featured_plugin_title a{
			text-decoration:none;
					
		}
		.featured_plugin_title h4{
			margin:0px;
			margin-top: 20px;
			margin-bottom:8px;			  
		}
		.featured_plugin_description{
			display: inline-block;
		}
        
        </style>
        <script>
		
        jQuery(window).resize(wpdevart_countdown_feature_resize);
		jQuery(document).ready(function(e) {
            wpdevart_countdown_feature_resize();
        });
		
		function wpdevart_countdown_feature_resize(){
			var wpdevart_countdown_width=jQuery('.featured_plugin_main').eq(0).parent().width();
			var count_of_elements=Math.max(parseInt(wpdevart_countdown_width/450),1);
			var width_of_plugin=((wpdevart_countdown_width-count_of_elements*24-2)/count_of_elements);
			jQuery('.featured_plugin_main').width(width_of_plugin);
			jQuery('.featured_plugin_information').css('max-width',(width_of_plugin-160)+'px');
		}
       	</script>
        	<h2>Featured Plugins</h2>
            <br>
            <br>
            <?php foreach($plugins_array as $key=>$plugin) { ?>
            <div class="featured_plugin_main">
            	<span class="featured_plugin_image"><a target="_blank" href="<?php echo $plugin['site_url'] ?>"><img src="<?php echo $plugin['image_url'] ?>"></a></span>
                <span class="featured_plugin_information">
                	<span class="featured_plugin_title"><h4><a target="_blank" href="<?php echo $plugin['site_url'] ?>"><?php echo $plugin['title'] ?></a></h4></span>
                    <span class="featured_plugin_description"><?php echo $plugin['description'] ?></span>
                </span>
                <div style="clear:both"></div>                
            </div>
            <?php } 
	}
	
}
?>
