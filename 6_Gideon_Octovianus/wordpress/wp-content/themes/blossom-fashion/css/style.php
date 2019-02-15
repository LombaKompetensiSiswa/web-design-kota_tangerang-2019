<?php
/**
 * Dynamic Styles
 * 
 * @package Blossom_Fashion
*/
if ( ! function_exists( 'blossom_fashion_dynamic_css' ) ) :

function blossom_fashion_dynamic_css(){
    
    $primary_font    = get_theme_mod( 'primary_font', 'Montserrat' );
    $primary_fonts   = blossom_fashion_get_fonts( $primary_font, 'regular' );
    $secondary_font  = get_theme_mod( 'secondary_font', 'Cormorant Garamond' );
    $secondary_fonts = blossom_fashion_get_fonts( $secondary_font, 'regular' );
    $font_size       = get_theme_mod( 'font_size', 16 );
    
    $site_title_font      = get_theme_mod( 'site_title_font', array( 'font-family'=>'Rufina', 'variant'=>'regular' ) );
    $site_title_fonts     = blossom_fashion_get_fonts( $site_title_font['font-family'], $site_title_font['variant'] );
    $site_title_font_size = get_theme_mod( 'site_title_font_size', 120 );
    
    $primary_color = get_theme_mod( 'primary_color', '#f1d3d3' );
    
    $rgb = blossom_fashion_hex2rgb( blossom_fashion_sanitize_hex_color( $primary_color ) );
     
    echo "<style type='text/css' media='all'>"; ?>
     
    .content-newsletter .blossomthemes-email-newsletter-wrapper.bg-img:after,
    .widget_blossomthemes_email_newsletter_widget .blossomthemes-email-newsletter-wrapper:after{
        <?php echo 'background: rgba(' . $rgb[0] . ', ' . $rgb[1] . ', ' . $rgb[2] . ', 0.8);'; ?>
    }
    
    /*Typography*/

    body,
    button,
    input,
    select,
    optgroup,
    textarea{
        font-family : <?php echo esc_html( $primary_fonts['font'] ); ?>;
        font-size   : <?php echo absint( $font_size ); ?>px;        
    }
    
    .site-title{
        font-size   : <?php echo absint( $site_title_font_size ); ?>px;
        font-family : <?php echo esc_html( $site_title_fonts['font'] ); ?>;
        font-weight : <?php echo esc_html( $site_title_fonts['weight'] ); ?>;
        font-style  : <?php echo esc_html( $site_title_fonts['style'] ); ?>;
    }
    
    /*Color Scheme*/
    a,
    .site-header .social-networks li a:hover,
    .site-header .social-networks li a:focus,
    .site-title a:hover,
    .site-title a:focus,
    .banner .text-holder .cat-links a:hover,
	.banner .text-holder .cat-links a:focus,
	.shop-section .shop-slider .item h3 a:hover,
	.shop-section .shop-slider .item h3 a:focus,
	#primary .post .entry-header .cat-links a:hover,
	#primary .post .entry-header .cat-links a:focus,
	#primary .post .entry-header .entry-meta a:hover,
	#primary .post .entry-header .entry-meta a:focus,
	#primary .post .entry-footer .social-networks li a:hover,
	#primary .post .entry-footer .social-networks li a:focus,
	.widget ul li a:hover, .widget ul li a:focus,
	.widget_bttk_author_bio .author-bio-socicons ul li a:hover,
	.widget_bttk_author_bio .author-bio-socicons ul li a:focus,
	.widget_bttk_popular_post ul li .entry-header .entry-title a:hover,
	.widget_bttk_popular_post ul li .entry-header .entry-title a:focus,
	.widget_bttk_pro_recent_post ul li .entry-header .entry-title a:hover,
	.widget_bttk_pro_recent_post ul li .entry-header .entry-title a:focus,
	.widget_bttk_popular_post ul li .entry-header .entry-meta a:hover,
	.widget_bttk_popular_post ul li .entry-header .entry-meta a:focus,
	.widget_bttk_pro_recent_post ul li .entry-header .entry-meta a:hover,
	.widget_bttk_pro_recent_post ul li .entry-header .entry-meta a:focus,
	.bottom-shop-section .bottom-shop-slider .item .product-category a:hover,
	.bottom-shop-section .bottom-shop-slider .item .product-category a:focus,
	.bottom-shop-section .bottom-shop-slider .item h3 a:hover,
	.bottom-shop-section .bottom-shop-slider .item h3 a:focus,
	.instagram-section .header .title a:hover,
	.instagram-section .header .title a:focus,
	.site-footer .widget ul li a:hover,
	.site-footer .widget ul li a:focus,
	.site-footer .widget_bttk_popular_post ul li .entry-header .entry-title a:hover,
	.site-footer .widget_bttk_pro_recent_post ul li .entry-header .entry-title a:hover,
	.site-footer .widget_bttk_popular_post ul li .entry-header .entry-title a:focus,
	.site-footer .widget_bttk_pro_recent_post ul li .entry-header .entry-title a:focus,
	.single .single-header .site-title:hover,
	.single .single-header .site-title:focus,
	.single .single-header .right .social-share .social-networks li a:hover,
	.single .single-header .right .social-share .social-networks li a:focus,
	.comments-area .comment-body .fn a:hover,
	.comments-area .comment-body .fn a:focus,
	.comments-area .comment-body .comment-metadata a:hover,
	.comments-area .comment-body .comment-metadata a:focus,
	.page-template-contact .contact-details .contact-info-holder .col .icon-holder,
	.page-template-contact .contact-details .contact-info-holder .col .text-holder h3 a:hover,
	.page-template-contact .contact-details .contact-info-holder .col .text-holder h3 a:focus,
	.page-template-contact .contact-details .contact-info-holder .col .social-networks li a:hover,
	.page-template-contact .contact-details .contact-info-holder .col .social-networks li a:focus,
    #secondary .widget_bttk_description_widget .social-profile li a:hover,
    #secondary .widget_bttk_description_widget .social-profile li a:focus,
    #secondary .widget_bttk_contact_social_links .social-networks li a:hover,
    #secondary .widget_bttk_contact_social_links .social-networks li a:focus,
    .site-footer .widget_bttk_contact_social_links .social-networks li a:hover,
    .site-footer .widget_bttk_contact_social_links .social-networks li a:focus,
    .site-footer .widget_bttk_description_widget .social-profile li a:hover,
    .site-footer .widget_bttk_description_widget .social-profile li a:focus,
    .portfolio-sorting .button:hover,
    .portfolio-sorting .button:focus,
    .portfolio-sorting .button.is-checked,
    .portfolio-item .portfolio-cat a:hover,
    .portfolio-item .portfolio-cat a:focus,
    .entry-header .portfolio-cat a:hover,
    .entry-header .portfolio-cat a:focus,
    .single-blossom-portfolio .post-navigation .nav-previous a:hover,
    .single-blossom-portfolio .post-navigation .nav-previous a:focus,
    .single-blossom-portfolio .post-navigation .nav-next a:hover,
    .single-blossom-portfolio .post-navigation .nav-next a:focus{
		color: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
	}

	.site-header .tools .cart .number,
	.shop-section .header .title:after,
	.header-two .header-t,
	.header-six .header-t,
	.header-eight .header-t,
	.shop-section .shop-slider .item .product-image .btn-add-to-cart:hover,
	.shop-section .shop-slider .item .product-image .btn-add-to-cart:focus,
	.widget .widget-title:before,
	.widget .widget-title:after,
	.widget_calendar caption,
	.widget_bttk_popular_post .style-two li:after,
	.widget_bttk_popular_post .style-three li:after,
	.widget_bttk_pro_recent_post .style-two li:after,
	.widget_bttk_pro_recent_post .style-three li:after,
	.instagram-section .header .title:before,
	.instagram-section .header .title:after,
	#primary .post .entry-content .pull-left:after,
	#primary .page .entry-content .pull-left:after,
	#primary .post .entry-content .pull-right:after,
	#primary .page .entry-content .pull-right:after,
	.page-template-contact .contact-details .contact-info-holder h2:after,
    .widget_bttk_image_text_widget ul li .btn-readmore:hover,
    .widget_bttk_image_text_widget ul li .btn-readmore:focus,
    #secondary .widget_bttk_icon_text_widget .text-holder .btn-readmore:hover,
    #secondary .widget_bttk_icon_text_widget .text-holder .btn-readmore:focus,
    #secondary .widget_blossomtheme_companion_cta_widget .btn-cta:hover,
    #secondary .widget_blossomtheme_companion_cta_widget .btn-cta:focus,
    #secondary .widget_blossomtheme_featured_page_widget .text-holder .btn-readmore:hover,
    #secondary .widget_blossomtheme_featured_page_widget .text-holder .btn-readmore:focus{
		background: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
	}
    
    .banner .text-holder .cat-links a,
	#primary .post .entry-header .cat-links a,
	.widget_bttk_popular_post .style-two li .entry-header .cat-links a,
	.widget_bttk_pro_recent_post .style-two li .entry-header .cat-links a,
	.widget_bttk_popular_post .style-three li .entry-header .cat-links a,
	.widget_bttk_pro_recent_post .style-three li .entry-header .cat-links a,
	.page-header span,
	.page-template-contact .top-section .section-header span,
    .portfolio-item .portfolio-cat a,
    .entry-header .portfolio-cat a{
		border-bottom-color: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
	}

	.banner .text-holder .title a,
	.header-four .main-navigation ul li a,
	.header-four .main-navigation ul ul li a,
	#primary .post .entry-header .entry-title a,
    .portfolio-item .portfolio-img-title a{
		background-image: linear-gradient(180deg, transparent 96%, <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?> 0);
	}

	.widget_bttk_social_links ul li a:hover,
	.widget_bttk_social_links ul li a:focus{
		border-color: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
	}

	button:hover,
	input[type="button"]:hover,
	input[type="reset"]:hover,
	input[type="submit"]:hover,
	button:focus,
	input[type="button"]:focus,
	input[type="reset"]:focus,
	input[type="submit"]:focus{
		background: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
		border-color: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
	}

	#primary .post .btn-readmore:hover,
	#primary .post .btn-readmore:focus{
		background: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
	}

	@media only screen and (min-width: 1025px){
		.main-navigation ul li:after{
			background: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
		}
	}
    
    /*Typography*/
	.main-navigation ul,
	.banner .text-holder .title,
	.top-section .newsletter .blossomthemes-email-newsletter-wrapper .text-holder h3,
	.shop-section .header .title,
	#primary .post .entry-header .entry-title,
	#primary .post .post-shope-holder .header .title,
	.widget_bttk_author_bio .title-holder,
	.widget_bttk_popular_post ul li .entry-header .entry-title,
	.widget_bttk_pro_recent_post ul li .entry-header .entry-title,
	.widget-area .widget_blossomthemes_email_newsletter_widget .text-holder h3,
	.bottom-shop-section .bottom-shop-slider .item h3,
	.page-title,
	#primary .post .entry-content blockquote,
	#primary .page .entry-content blockquote,
	#primary .post .entry-content .dropcap,
	#primary .page .entry-content .dropcap,
	#primary .post .entry-content .pull-left,
	#primary .page .entry-content .pull-left,
	#primary .post .entry-content .pull-right,
	#primary .page .entry-content .pull-right,
	.author-section .text-holder .title,
	.single .newsletter .blossomthemes-email-newsletter-wrapper .text-holder h3,
	.related-posts .title, .popular-posts .title,
	.comments-area .comments-title,
	.comments-area .comment-reply-title,
	.single .single-header .title-holder .post-title,
    .portfolio-text-holder .portfolio-img-title,
    .portfolio-holder .entry-header .entry-title,
    .related-portfolio-title{
		font-family: <?php echo esc_html( $secondary_fonts['font'] ); ?>;
	}
    <?php if( blossom_fashion_is_woocommerce_activated() ) { ?>
        .woocommerce #secondary .widget_price_filter .ui-slider .ui-slider-range, 
        .woocommerce-checkout .woocommerce form.woocommerce-form-login input.button:hover, .woocommerce-checkout .woocommerce form.woocommerce-form-login input.button:focus, .woocommerce-checkout .woocommerce form.checkout_coupon input.button:hover, .woocommerce-checkout .woocommerce form.checkout_coupon input.button:focus, .woocommerce form.lost_reset_password input.button:hover, .woocommerce form.lost_reset_password input.button:focus, .woocommerce .return-to-shop .button:hover, .woocommerce .return-to-shop .button:focus, .woocommerce #payment #place_order:hover, .woocommerce-page #payment #place_order:focus{
			background: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
    	}
        
        .woocommerce #secondary .widget .product_list_widget li .product-title:hover,
    	.woocommerce #secondary .widget .product_list_widget li .product-title:focus,
    	.woocommerce div.product .entry-summary .product_meta .posted_in a:hover,
    	.woocommerce div.product .entry-summary .product_meta .posted_in a:focus,
    	.woocommerce div.product .entry-summary .product_meta .tagged_as a:hover,
    	.woocommerce div.product .entry-summary .product_meta .tagged_as a:focus{
			color: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
    	}
        
        .woocommerce-checkout .woocommerce .woocommerce-info,
        .woocommerce ul.products li.product .add_to_cart_button:hover,
        .woocommerce ul.products li.product .add_to_cart_button:focus,
        .woocommerce ul.products li.product .product_type_external:hover,
        .woocommerce ul.products li.product .product_type_external:focus,
        .woocommerce ul.products li.product .ajax_add_to_cart:hover,
        .woocommerce ul.products li.product .ajax_add_to_cart:focus,
        .woocommerce ul.products li.product .added_to_cart:hover,
        .woocommerce ul.products li.product .added_to_cart:focus,
        .woocommerce div.product form.cart .single_add_to_cart_button:hover,
        .woocommerce div.product form.cart .single_add_to_cart_button:focus,
        .woocommerce div.product .cart .single_add_to_cart_button.alt:hover,
        .woocommerce div.product .cart .single_add_to_cart_button.alt:focus,
        .woocommerce #secondary .widget_shopping_cart .buttons .button:hover,
        .woocommerce #secondary .widget_shopping_cart .buttons .button:focus,
        .woocommerce #secondary .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce #secondary .widget_price_filter .price_slider_amount .button:focus,
        .woocommerce-cart #primary .page .entry-content table.shop_table td.actions .coupon input[type="submit"]:hover,
        .woocommerce-cart #primary .page .entry-content table.shop_table td.actions .coupon input[type="submit"]:focus,
        .woocommerce-cart #primary .page .entry-content .cart_totals .checkout-button:hover,
        .woocommerce-cart #primary .page .entry-content .cart_totals .checkout-button:focus{
			background: <?php echo blossom_fashion_sanitize_hex_color( $primary_color ); ?>;
    	}

    	.woocommerce div.product .product_title,
    	.woocommerce div.product .woocommerce-tabs .panel h2{
			font-family: <?php echo esc_html( $secondary_fonts['font'] ); ?>;
    	}    
    <?php } ?>
           
    <?php echo "</style>";
}
endif;
add_action( 'wp_head', 'blossom_fashion_dynamic_css', 99 );

/**
 * Function for sanitizing Hex color 
 */
function blossom_fashion_sanitize_hex_color( $color ){
	if ( '' === $color )
		return '';

    // 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;
}

/**
 * convert hex to rgb
 * @link http://bavotasan.com/2011/convert-hex-color-to-rgb-using-php/
*/
function blossom_fashion_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
