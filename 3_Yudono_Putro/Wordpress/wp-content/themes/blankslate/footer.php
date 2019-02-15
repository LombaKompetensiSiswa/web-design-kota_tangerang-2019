<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="#">Yudono Putro Utomo</a>' ); ?>
</div>
<ul>
<li>
<a href="">About</a>
</li>
<li>
<a href="">Contact</a>
</li>
<li>
<a href="">Find Us</a>
</li>
</ul>
<div class="sosmed">
<a href="#instagram"><i class="fa fa-instagram"></i></a>
<a href="#facebook"><i class="fa fa-facebook"></i></a>
<a href="#twitter"><i class="fa fa-twitter"></i></a>
<a href="#youtube"><i class="fa fa-youtube"></i></a>
<a href="#facebook"><i class="fa fa-facebook"></i></a>
</div>
</footer>
</div>
<script src="http://localhost/Yudonolks2019-wordpress/wp-content/themes/assets/js/jquery-3.3.1.min.js"></script>
<script>
window.onscroll = function(){
    var scroll = $(document).scrollTop();
    if(scroll > 15){
        $('header').css({
            background : 'rgba(255,57,200, 1)',
            transition: '0.4s'
        });
    }else{
        $('header').css({
            background : 'rgba(255,57,200, 0)',
            transition: '0.4s'
        });
    }
};
function showaside(){
            $('aside').css({
                transition: '0.5s',
                transform: 'translateX(0%)'
            });
        }
        function hideaside(){
            $('aside').css({
                transition: '0.5s',
                transform: 'translateX(100%)'
            });
        }
</script>
</body>
</html>