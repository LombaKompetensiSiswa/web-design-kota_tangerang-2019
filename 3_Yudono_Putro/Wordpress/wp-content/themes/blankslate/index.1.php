<?php get_header(); ?>



<nav>
        <video id="video" src="wp-content/themes/assets/video.mp4" loop mute autoplay></video>
    </nav>

<div id="container">
<div class="wrap">
<div class="events container">
    <div class="eventsss">
    <br><br>
    <h1>New Events <span>00:00:00</span></h1>
    <br>
        <div class="row">
            <div class="col-lg-8">
                <img src="wp-content/themes/assets/maps.png" alt="new events" class="img-responsive" style="float:left">
            </div>
            <div class="col-lg-4">
                <h3>Tangerang global fashion 2021</h3>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima exercitationem aliquam adipisci ut eius eveniet! Dolorem molestias enim atque nobis sunt provident modi, voluptas eum, iusto ullam tempora assumenda rerum.</p>
                <br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima exercitationem aliquam adipisci ut eius eveniet! Dolorem molestias enim atque nobis sunt provident modi, voluptas eum, iusto ullam tempora assumenda rerum.</p>
                <br>
                
                <button class="btn btn-danger"><i class="fa fa-check"></i> Book Now</button><br><br>
                <button class="btn btn-primary"><i class="fa fa-book"></i> Read More</button>

        </div>
        <br><br><br>
    </div>
</div>
</div>
<div class="former container">
<div class="row">
            <?php $i = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php
            if($i < 3){
            ?>
                <div class="col-lg-4 col-md-6" style="text-align:center;padding:32px">
                <div class="postssd">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <?php the_tags(); ?>
                    <br>
                    <br>
                    <a href="<?=the_permalink();?>" class="btn btn-success btn-block">Read More</a>
                </div>
                </div>
            <?php
            }
            $i++;
            ?>

            <?php endwhile; endif; ?>
            </div>
</div>
<div class="container">
<h3>News Post</h3>
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
</script>


<?php get_footer();?>