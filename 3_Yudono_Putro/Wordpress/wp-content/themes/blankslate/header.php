<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="http://localhost/Yudonolks2019-wordpress/wp-content/themes/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Yudonolks2019-wordpress/wp-content/themes/assets/css/font-awesome.min.css">
<style>
*{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
}
*:focus{
    outline: none;
}
header{
    position: fixed;
    width: 100%;
    background: rgba(255,57,200, 0);
    padding: 22px 20px;
    color: white;
    font-size: 20px;
    font-weight: bold;
    z-index: 1000;
    transition: 0.4s;
    top: 0;
}
.btns{
    padding: 0 10px;
    /* float: right; */
    background: transparent;
    border: 0;
}
.btns:hover{
    color: grey;
}
aside{
    position: fixed;
    top: 0;
    right: 0;
    width: 75%;
    max-width: 400px;
    height: 100vh !important;
    background: white;
    box-shadow: 0px 0px 12px grey;
    transform: translateX(100%);
    transition: 0.5s;
    z-index: 2;
    padding: 20px;
    z-index: 2000;
}
.close{
    float: left;
}
.lists a{
    width: 100%;
    display: table;
    text-align: center;
    padding: 10px;
    font-size: 24px;
}
#video{
    width: 100%;
}
.event-img,.wp-block-image img,.attachment-post-thumbnail{
    width: 100%;
    height: auto;
    background: white;
    padding: 10px;
    border-radius: 4px;
}
.attachment-post-thumbnail{

}
.postssd{
    padding: 10px;
    border-radius: 8px;
}
.postssd:hover{
    box-shadow: 0px 0px 12px grey;
}
.img-responsive{
    width: 100%;
}
body{
    max-width: 100%;
    overflow-x: hidden;
}
.wrap,.postdss{
    background: #ececec;
}
.search{
    position: relative;
}
.search-in{
    width: 100%;
    background: transparent;
    border: 0;
    padding: 10px;
    border-radius: 6px;
}
.search-in:focus{
    background: rgba(255,255,255,0.5);
}
.search i{
    position: absolute;
    top: 0;
    right: 0;
    color: white;
    padding: 14px;
}
#footer{
    background: #333;
    color: white;
    padding: 20px;
}
.newpost{
    font-size: 18px;
    display: table;
}
#content{
    border-left: 1px solid lightgrey;
    border-right: 1px solid lightgrey;
}
.text-small{
    font-size: 12px;
    color:grey;
}
.sosmed a{
    display: inline-table;
    color: white;
    padding: 10px;
}
.sosmed a:hover{
    background: white;
    color: #333;
}
</style>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<div class="wrap">
<aside>
        <button class="btn close" onclick="hideaside()"><i class="fa fa-chevron-right"></i></button>
        <div style="clear:both"></div>
        <br>
       <div class="lists">
            <a href="#home"><i class="fa fa-home"></i> Home</a>
            <a href="#about"><i class="fa fa-info"></i> About</a>
            <a href="#contact"><i class="fa fa-phone"></i> Contact</a>
       </div>
    </aside>
</div>

    <header>
        <div class="row">
            <div class="col-sm-3" style="padding: 10px 0 10px 32px" >
            Global fashion
            </div>
            <div class="col-sm-7">
                <div class="search">
                    <input type="text" class="search-in" placeholder="Search">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="col-sm-2" align="right" style="padding: 10px 32px 10px 0">
                <button class="btns" onclick="showaside()"><i class="fa fa-bars"></i></button>
            </div>
        </div>
    </header>