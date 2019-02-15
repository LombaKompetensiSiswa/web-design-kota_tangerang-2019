<?php

/*
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
*/

//***************** Immutable configurations ********************//
define( 'CRP_ROOT_DIR_NAME', 'portfolio-wp');
define( 'CRP_ROOT_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'CRP_CLASSES_DIR_PATH' , CRP_ROOT_DIR_PATH.'classes' );
define( 'CRP_IMAGES_DIR_PATH', CRP_ROOT_DIR_PATH.'images' );
define( 'CRP_VIEWS_DIR_PATH', CRP_ROOT_DIR_PATH.'views' );
define( 'CRP_ADMIN_VIEWS_DIR_PATH', CRP_VIEWS_DIR_PATH.'/admin' );
define( 'CRP_FRONT_VIEWS_DIR_PATH', CRP_VIEWS_DIR_PATH.'/front' );
define( 'CRP_PLUGIN_URL'   , plugins_url( CRP_ROOT_DIR_NAME ) );
define( 'CRP_CSS_URL'      , CRP_PLUGIN_URL.'/css' );
define( 'CRP_JS_URL'       , CRP_PLUGIN_URL.'/js' );
define( 'CRP_IMAGES_URL', CRP_PLUGIN_URL.'/images' );

define( 'CRP_LOG_SERVICE_API_KEY' , 'GKIT88fdFkkd8238Fdslk9843' );
define( 'CRP_LOG_SERVICE_API_URL' , 'http://wpsofts.com/deliver/log/report.php' );
define( 'CRP_LOG_STATUS_OPTION_KEY' , 'gkit_log_status' );
define( 'CRP_LOG_STATUS_DEFAULT' , 'off' );
define( 'CRP_LOG_ID_OPTION_KEY' , 'gkit_log_id' );
define( 'CRP_LOG_LAST_TS_OPTION_KEY' , 'gkit_log_last_ts' );

global $wpdb;

define( 'CRP_PLUGIN_PREFIX', 'crp');
define( 'CRP_DB_PREFIX'     , $wpdb->prefix.CRP_PLUGIN_PREFIX.'_' );

define("CRP_PLUGIN_NAME","Grid Kit");
define("CRP_PLUGIN_SLAG","grid-kit");

define("CRP_SUBMENU_PORTFOLIOS_TITLE","Portfolios");
define("CRP_SUBMENU_PORTFOLIOS_SLUG","grid-kit-portfolios");
define("CRP_SUBMENU_ALBUMS_TITLE","Albums");
define("CRP_SUBMENU_ALBUMS_SLUG","grid-kit-albums");
define("CRP_SUBMENU_GALLERIES_TITLE","Galleries");
define("CRP_SUBMENU_GALLERIES_SLUG","grid-kit-galleries");
define("CRP_SUBMENU_CLIENT_LOGOS_TITLE","Client logos");
define("CRP_SUBMENU_CLIENT_LOGOS_SLUG","grid-kit-client-logos");
define("CRP_SUBMENU_TEAMS_TITLE","Teams");
define("CRP_SUBMENU_TEAMS_SLUG","grid-kit-teams");
define("CRP_SUBMENU_PRODUCT_CATALOGS_TITLE","Product catalogs");
define("CRP_SUBMENU_PRODUCT_CATALOGS_SLUG","grid-kit-catalogs");
define("CRP_SUBMENU_SLIDER_TITLE","Sliders");
define("CRP_SUBMENU_SLIDER_SLUG","grid-kit-sliders");

//**************** Configurable configurations *******************//
define( 'CRP_PRO_URL' , 'http://wpsofts.com/pricing' );

//Define table names
define( 'CRP_TABLE_PORTFOLIOS' , CRP_DB_PREFIX.'portfolios' );
define( 'CRP_TABLE_PROJECTS' , CRP_DB_PREFIX.'projects' );
define( 'CRP_TABLE_OPTIONS' , CRP_DB_PREFIX.'options' );

//Enum simulated classes
abstract class CRPGridType{
    const ALBUM = 'album_gallery';
    const PORTFOLIO = 'album';
    const GALLERY = 'gallery';
    const TEAM = 'team';
    const CLIENT_LOGOS = 'client_logos';
    const CATALOG = 'catalog';
    const SLIDER = 'slider';
}

abstract class CRPViewType{
    const Unknown = 0;
    const Puzzle = 1;
    const Masonry = 2;
    const Square = 3;
    const WaterfallList = 4;
    const Slider = 5;
    const TestLayout = 6;
}

abstract class CRPPjViewerType{
    const Unknown = 0;
    const LightGallery = 1;
    const LightGalleryLight = 2;
}


abstract class CRPProductStatus {
    const Visible = 'Visible';
    const Invisible = 'Invisible';
}


abstract class CRPDetailsDisplayStyle{
    const none = 'details-none';
    const style01 = 'details01';
    const style02 = 'details02';
    const style03 = 'details03';
    const style04 = 'details04';
    const style05 = 'details05';
    const style06 = 'details06';
    const style07 = 'details07';
    const style08 = 'details08';
    const style09 = 'details09';
    const style10 = 'details10';
    const style11 = 'details11';
    const style12 = 'details12';
    const style13 = 'details13';
    const style14 = 'details14';
    const style15 = 'details15';
    const style16 = 'details16';
    const style17 = 'details17';
    const style18 = 'details18';
    const style19 = 'details19';
    const style20 = 'details20';
    const style21 = 'details21';
    const style22 = 'details22';
    const style23 = 'details23';
    const style24 = 'details24';
    const style25 = 'details25';
    const style26 = 'details26';
    const style27 = 'details27';
    const style28 = 'details28';
    const style29 = 'details29';
    const style30 = 'details30';
    const style31 = 'details31 crp-details-bg';
    const style32 = 'details32 crp-details-bg';
    const style33 = 'details33 crp-details-bg';
    const style34 = 'details34 crp-details-bg';
    const style35 = 'details35 crp-details-bg';
    const style36 = 'details36 crp-details-bg';
    const style37 = 'details37 crp-details-bg';
    const style38 = 'details38 crp-details-bg';
    const style39 = 'details39 crp-details-bg';
    const style40 = 'details40 crp-details-bg';
    const style41 = 'details41 crp-details-bg';
    const style42 = 'details42 crp-details-bg';
    const style43 = 'details43 crp-details-bg';
    const style44 = 'details44 crp-details-bg';

    const dflt = 'details-none';
}

abstract class CRPPictureHoverStyle{
    const none = 'image-none';
    const style01 = 'image01';
    const style02 = 'image02';
    const style03 = 'image03';
    const style04 = 'image04';
    const style05 = 'image05';
    const style06 = 'image06';
    const style07 = 'image07';

    const dflt = 'image-none';
}

abstract class CRPOverlayDisplayStyle{
    const none = 'overlay-none';
    const style00 = 'overlay00';
    const style01 = 'overlay01';
    const style02 = 'overlay02';
    const style03 = 'overlay03';
    const style04 = 'overlay04';
    const style05 = 'overlay05';
    const style06 = 'overlay06';
    const style07 = 'overlay07';
    const style08 = 'overlay08';
    const style09 = 'overlay09';
    const style10 = 'overlay10';
    const style11 = 'overlay11';
    const style12 = 'overlay12';
    const style13 = 'overlay13';
    const style14 = 'overlay14';
    const style15 = 'overlay15';
    const style16 = 'overlay16';
    const style17 = 'overlay17';
    const style18 = 'overlay18';
    const style19 = 'overlay19';
    const style20 = 'overlay20';
    const style21 = 'overlay21';
    const style22 = 'overlay22';
    const style23 = 'overlay23';
    const style24 = 'overlay24';
    const style25 = 'overlay25';
    const style26 = 'overlay26';
    const style27 = 'overlay27';

    const dflt = 'overlay-none';
}

abstract class CRPOverlayButtonsDisplayStyle{
    const none =    'button-none';
    const style01 = 'button01';
    const style02 = 'button02';
    const style03 = 'button03';
    const style04 = 'button04';
    const style05 = 'button05';
    const style06 = 'button06';
    const style07 = 'button07';
    const style08 = 'button08';
    const style09 = 'button09';
    const style10 = 'button10';
    const style11 = 'button11';
    const style12 = 'button12';
    const style13 = 'button13';
    const style14 = 'button14';
    const style15 = 'button15';
    const style16 = 'button16';
    const style17 = 'button17';
    const style18 = 'button18';
    const style19 = 'button19';
    const style20 = 'button20';
    const style21 = 'button21';
    const style22 = 'button22';

    const dflt = 'button-none';
}

abstract class CRPShareButtonsDisplayStyle{
    const none =    'share-none';
    const style01 = 'share01';
    const style02 = 'share02';
    const style03 = 'share03';
    const style04 = 'share04';
    const style05 = 'share05';
    const style06 = 'share06';
    const style07 = 'share07';
    const style08 = 'share08';
    const style09 = 'share09';
    const style10 = 'share10';
    const style11 = 'share11';
    const style12 = 'share12';
    const style13 = 'share13';
    const style14 = 'share14';
    const style15 = 'share15';
    const style16 = 'share16';
    const style17 = 'share17';
    const style18 = 'share18';
    const style19 = 'share19';
    const style20 = 'share20';
    const style21 = 'share21';
    const style22 = 'share22';
    const style23 = 'share23';
    const style24 = 'share24';

    const dflt = 'share-none';
}

abstract class CRPOverlayButtonsHoverEffect{
    const none =    '';

    //2D Transitions
    const style01 = 'crp-hvr-grow';
    const style02 = 'crp-hvr-shrink';
    const style03 = 'crp-hvr-pulse';
    const style04 = 'crp-hvr-pulse-grow';
    const style05 = 'crp-hvr-pulse-shrink';
    const style06 = 'crp-hvr-push';
    const style07 = 'crp-hvr-pop';
    const style08 = 'crp-hvr-bounce-in';
    const style09 = 'crp-hvr-bounce-out';
    const style10 = 'crp-hvr-rotate';
    const style11 = 'crp-hvr-grow-rotate';
    const style12 = 'crp-hvr-float';
    const style13 = 'crp-hvr-sink';
    const style14 = 'crp-hvr-bob';
    const style15 = 'crp-hvr-hang';
    const style16 = 'crp-hvr-skew';
    const style17 = 'crp-hvr-skew-forward';
    const style18 = 'crp-hvr-skew-backward';
    const style19 = 'crp-hvr-wobble-horizontal';
    const style20 = 'crp-hvr-wobble-vertical';
    const style21 = 'crp-hvr-wobble-to-bottom-right';
    const style22 = 'crp-hvr-wobble-to-top-right';
    const style23 = 'crp-hvr-wobble-top';
    const style24 = 'crp-hvr-wobble-bottom';
    const style25 = 'crp-hvr-wobble-skew';
    const style26 = 'crp-hvr-wobble-skew';
    const style27 = 'crp-hvr-buzz';
    const style28 = 'crp-hvr-buzz-out';

    //Background Transitions
    const style29 = 'crp-hvr-fade';
    const style30 = 'crp-hvr-sweep-to-right';
    const style31 = 'crp-hvr-sweep-to-left';
    const style32 = 'crp-hvr-sweep-to-bottom';
    const style33 = 'crp-hvr-sweep-to-top';
    const style34 = 'crp-hvr-bounce-to-right';
    const style35 = 'crp-hvr-bounce-to-left';
    const style36 = 'crp-hvr-bounce-to-bottom';
    const style37 = 'crp-hvr-bounce-to-top';
    const style38 = 'crp-hvr-radial-out';
    const style39 = 'crp-hvr-radial-in';
    const style40 = 'crp-hvr-rectangle-in';
    const style41 = 'crp-hvr-rectangle-out';
    const style42 = 'crp-hvr-shutter-in-horizontal';
    const style43 = 'crp-hvr-shutter-out-horizontal';
    const style44 = 'crp-hvr-shutter-in-vertical';
    const style45 = 'crp-hvr-shutter-out-vertical';

    //Underline & Overline Transitions
    const style46 = 'crp-hvr-underline-from-left';
    const style47 = 'crp-hvr-underline-from-center';
    const style48 = 'crp-hvr-underline-from-right';
    const style49 = 'crp-hvr-underline-reveal';
    const style50 = 'crp-hvr-overline-reveal';
    const style51 = 'crp-hvr-overline-from-left';
    const style52 = 'crp-hvr-overline-from-center';
    const style53 = 'crp-hvr-overline-from-right';

    const dflt = '';
}

abstract class CRPFilterStyle{
    const style1 = 'crp-filter-style-1';
    const style2 = 'crp-filter-style-2';
    const style3 = 'crp-filter-style-3';
    const style4 = 'crp-filter-style-4';
    const style5 = 'crp-filter-style-5';
    const style6 = 'crp-filter-style-6';
    const style7 = 'crp-filter-style-7';
}

abstract class CRPPaginationStyle{
    const style1 = 'crp-pagination-style-1';
    const style2 = 'crp-pagination-style-2';
    const style3 = 'crp-pagination-style-3';
    const style4 = 'crp-pagination-style-4';
    const style5 = 'crp-pagination-style-5';
    const style6 = 'crp-pagination-style-6';
    const style7 = 'crp-pagination-style-7';
}

//Enum simulated classes
abstract class CRPOption{

    //Styles & Effects
    const kLayoutType = "kLayoutType";
    const kViewerType = "kViewerType";

    const kDetailsDisplayStyle = "kDetailsDisplayStyle";
    const kPictureHoverEffect = "kPictureHoverEffect";
    const kOverlayDisplayStyle = "kOverlayDisplayStyle";
    const kOverlayButtonsDisplayStyle = "kOverlayButtonsDisplayStyle";
    const kOverlayButtonsHoverEffect = "kOverlayButtonsHoverEffect";
    const kShareButtonsDisplayStyle = "kShareButtonsDisplayStyle";

    //Quality
    const kThumbnailQuality = "kThumbnailQuality";

    //Category filtration
    const kShowCategoryFilters = "kShowCategoryFilters";
    const kFilterStyle = "kFilterStyle";

    //Overlay items
    const kShowTitle = "kShowTitle";
    const kShowDesc = "kShowDesc";
    const kShowOverlay = "kShowOverlay";
    const kShowLinkButton = "kShowLinkButton";
    const kShowExploreButton = "kShowExploreButton";
    const kShowFacebookButton = "kShowFacebookButton";
    const kShowTwitterButton = "kShowTwitterButton";
    const kShowGooglePlusButton = "kShowGooglePlusButton";
    const kShowPinterestButton = "kShowPinterestButton";

    const kLinkIcon = "kLinkIcon";
    const kZoomIcon = "kZoomIcon";
    const kGoIcon = "kGoIcon";

    //Dimensions
    const kLayoutWidth = "kLayoutWidth";
    const kLayoutWidthUnit = "kLayoutWidthUnit";
    const kTileApproxWidth = "kTileApproxWidth";
    const kTileApproxHeight = "kTileApproxHeight";
    const kTileMinWidth = "kTileMinWidth";
    const kTileMargins = "kTileMargins";
    //Alignments
    const kLayoutAlignment = "kLayoutAlignment";
    //Colorization
    const kProgressColor = "kProgressColor";
    const kFiltersColor = "kFiltersColor";
    const kFiltersHoverColor = "kFiltersHoverColor";
    const kTileTitleColor = "kTileTitleColor";
    const kTileDescColor = "kTileDescColor";
    const kTileOverlayColor = "kTileOverlayColor";
    const kTileOverlayOpacity = "kTileOverlayOpacity";
    const kTileIconsColor = "kTileIconsColor";
    const kTileIconsBgColor = "kTileIconsBgColor";

    //Fonts
    const kTileTitleFontSize = "kTileTitleFontSize";
    const kTileDescFontSize = "kTileDescFontSize";
    const kTileTitleAlignment = "kTileTitleAlignment";
    const kTileDescAlignment = "kTileDescAlignment";

    //Other
    const kDirectLinking = "kDirectLinking";
    const kMouseType = "kMouseType";
    const kDescMaxLength = "kDescMaxLength";
    const kLinkTarget = "kLinkTarget";
    const kDisableAlbumStylePresentation = "kDisableAlbumStylePresentation";
    const kEnablePictureCaptions = "kEnablePictureCaptions";
    const kExcludeCoverPicture = "kExcludeCoverPicture";
    const kEnableGridLazyLoad = "kEnableGridLazyLoad";
    const kHideAllCategoryFilter = "kHideAllCategoryFilter";
    const kAllCategoryAlias = "kAllCategoryAlias";
    const kLoadUrlBlank = "kLoadUrlBlank";

    //Pagination
    const kItemsPerPage = "kItemsPerPage";
    const kMaxVisiblePageNumbers = "kMaxVisiblePageNumbers";
    const kEnablePagination = "kEnablePagination";
    const kPaginationAlignment = "kPaginationAlignment";
    const kPaginationStyle = "kPaginationStyle";
    const kPaginationColor = "kPaginationColor";
    const kPaginationHoverColor = "kPaginationHoverColor";
    const kItemsPerPageDefault = 10;
    const kMaxVisiblePageNumbersDefault = 10;

    //Customize CSS & JS
    const kCustomCSS = "kCustomCSS";
    const kCustomJS = "kCustomJS";

    //Extanded options
}

?>
