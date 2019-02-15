<?php
// previus defined admin constants
// wpda_contdown_extend_plugin_url
// wpda_contdown_extend_plugin_path
class wpda_countdown_post_page_popup{	
	function __construct(){
		$this->generete_html();
	}
	private function required_js_and_style(){
		wp_print_scripts("jquery");
		?>
		<script type="text/javascript" src="<?php echo wpdevart_gallery_plugin_url ?>includes/admin/js/post_page_popup.js"></script>
		<script language="javascript" type="text/javascript" src="<?php echo site_url(); ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
		<script language="javascript" type="text/javascript" src="<?php echo site_url(); ?>/wp-includes/js/tinymce/utils/mctabs.js"></script>
		<script language="javascript" type="text/javascript" src="<?php echo site_url(); ?>/wp-includes/js/tinymce/utils/form_utils.js"></script>
		<?php
	}
	private function generete_html(){
		?>
		<!DOCTYPE html>		
		<html>		
		<head>
			<?php
			$this->required_js_and_style();
			?>
			<title>WpDevArt Countdown Extended</title>
			<style>
				table tr{
					height: 40px;
				}
				table select{
					width: 240px;
				}
			</style>
           </head><body>
            <table width="100%" class="paramlist admintable" cellspacing="1">
                <tbody>
                    <tr>
                        <td style="width: 150px;vertical-align: top;" class="paramlist_key">
                            <span class="editlinktip">
                                <label style="font-size:12px" class="hasTip">Select Timer: </label>
                            </span>
                        </td>
                        <td class="paramlist_value" >                        
							<select style="font-size:12px" id="select_timer">
								<?php $this->print_timers() ?>
							</select>  
							<div><a target="_blank" style="text-decoration: none; color: #5b9dd9; font-size: 14px;" href="<?php echo get_admin_url().'admin.php?page=wpda_contdown_extend_menu&task=add_wpda_contdown_extend_timer'  ?>">(Add new timer)</a></div>      
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 150px;" class="paramlist_key">
                            <span class="editlinktip">
                                <label style="font-size:12px" class="hasTip">Select Theme: </label>
                            </span>
                        </td>
                        <td class="paramlist_value" >                        
					       	<select style="font-size:12px" id="select_theme">
								<?php $this->print_themes() ?>
							</select>          
                        </td>
                    </tr>
                </tbody>
            </table>
       		<div class="mceActionPanel">
                <div style="float: left">
                    <input type="button" id="cancel" name="cancel" value="Cancel" onClick="tinyMCEPopup.close();"/>
                </div>
    
                <div style="float: right">
                    <input type="submit" id="insert" name="insert" value="Insert" onClick="insert_poll();"/>
                    <input type="hidden" name="iden" value="1"/>
                </div>
            </div>
        
    
        	<script type="text/javascript">
				function insert_poll() {					  
					if(jQuery('#wpdevart_forms_id').val()!='0'){
						var tagtext;
						tagtext = '<p>[wpda_contdown_extend timer_id="' + jQuery('#select_timer').val()+'"  theme_id="' + jQuery('#select_theme').val()+'"]</p>';
						window.parent.tinyMCE.execCommand('mceInsertContent', false, tagtext);
						tinyMCEPopup.close();
					}
					else{
						tinyMCEPopup.close();
					}
				}  
			</script>
        	</body></html>
				<?php
		die();
	}
	private function print_timers(){
		global $wpdb;
		$timers=$wpdb->get_results('SELECT `id`,`name` FROM ' . wpda_contdown_extend_databese::$table_names['timer']);
		$timer_id=0;
		if(isset($_GET['timer_id']))
			$timer_id=$_GET['timer_id'];
		foreach($timers as $timer){
			?><option <?php selected($timer_id,$timer->id); ?> value="<?php echo $timer->id ?>"><?php echo $timer->name ?></option><?php 
		}
	}
	private function print_themes(){
		global $wpdb;
		$themes=$wpdb->get_results('SELECT `id`,`name` FROM ' . wpda_contdown_extend_databese::$table_names['theme']);
		$theme_id=0;
		if(isset($_GET['theme_id']))
			$theme_id=$_GET['theme_id'];
		foreach($themes as $theme){
			?><option <?php selected($theme_id,$theme->id); ?> value="<?php echo $theme->id ?>"><?php echo $theme->name ?></option><?php 
		}
	}
}
?>
