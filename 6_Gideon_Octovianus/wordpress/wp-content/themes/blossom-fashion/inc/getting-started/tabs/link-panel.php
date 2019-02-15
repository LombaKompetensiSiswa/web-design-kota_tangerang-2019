<?php
/**
 * Right Buttons Panel.
 *
 * @package Blossom_Fashion
 */

if( BLOSSOM_FASHION_THEME_TEXTDOMAIN == 'blossom-fashion' ){
    $doc_link    = 'blossom-fashion';
}else{
    $doc_link    = BLOSSOM_FASHION_THEME_TEXTDOMAIN . '-free-theme';
}

?>
<div class="panel-right">
	<div class="panel-aside">
		<h4><?php esc_html_e( 'Upgrade To Pro', 'blossom-fashion' ); ?></h4>
		<p><?php esc_html_e( 'With the Pro version, you can change the look and feel of your website in seconds. You can change color, choose from background patterns, and change the fonts with ease. You will also get more homepage sections that you can reorder and hide as per your needs. Furthermore, the pro version comes with multiple predefined pages like contact page, gallery page, team page, service page, and pricing page.', 'blossom-fashion' ); ?></p>
		<p><?php esc_html_e( 'You will also get more frequent updates and quicker support with the Pro version.', 'blossom-fashion' ); ?></p>
		<a class="button button-primary" href="<?php echo esc_url( 'https://blossomthemes.com/downloads/blossom-fashion-pro/' ); ?>" title="<?php esc_attr_e( 'View Premium Version', 'blossom-fashion' ); ?>" target="_blank"><?php esc_html_e( 'Read More About the Pro Theme', 'blossom-fashion' ); ?></a>
	</div><!-- .panel-aside Theme Support -->
	<!-- Knowledge base -->
	<div class="panel-aside">
		<h4><?php esc_html_e( 'Visit the Knowledge Base', 'blossom-fashion' ); ?></h4>
		<p><?php esc_html_e( 'Need help with using the WordPress as quickly as possible? Visit our well-organized Knowledge Base!', 'blossom-fashion' ); ?></p>
		<p><?php esc_html_e( 'Our Knowledge Base has step-by-step video and text tutorials, from installing the WordPress to working with themes and more.', 'blossom-fashion' ); ?></p>

		<a class="button button-primary" href="<?php echo esc_url( 'https://blossomthemes.com/' . $doc_link . '-documentation/' ); ?>" title="<?php esc_attr_e( 'Visit the knowledge base', 'blossom-fashion' ); ?>" target="_blank"><?php esc_html_e( 'Visit the Knowledge Base', 'blossom-fashion' ); ?></a>
	</div><!-- .panel-aside knowledge base -->
</div><!-- .panel-right -->