<?php get_header(); ?>



<nav>
        <video id="video" src="wp-content/themes/assets/video.mp4" loop mute autoplay></video>
    </nav>

<div id="container">
<div class="wrap">
<div class="events container">
    <div class="eventsss">
    <br><br>
    <h1>New Events October 19 <span id="time">00:00:00</span></h1>
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
<h1>Former events</h1>
            <?php $i = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php
            if($i < 4){
            ?>
                <div class="col-lg-3 col-md-6" style="text-align:center;padding:32px">
                <div class="postssd">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
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
<div class="postdss">
<div class="container">
<h3>News Post</h3>
<ul>
<?php $i = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li>
<div class="row">
<div class="col-md-4">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
</div>
<div class="col-md-8">
<a href="<?=the_permalink();?>"><h4><?php the_title(); ?></h4></a>
<i class="text-small"><?php the_date();?></i>
<br>
<i class="text-small"><?php the_author();?></i>
<?php the_excerpt(); ?>
<?php the_tags(); ?>
</div>
</div>
</li>
<br>
<?php endwhile; endif; ?>
</ul>
</div></div>

<script>
(function() {
    var time = document.getElementById('time');
    var second = 60;
    var minute = 69;
    var hour = 8;
    setInterval(function(){
        if(second > 0){
            second--;
        }else{
            second = 60;
            minute--;
            if(minute > 0){
                minute--;
            }else{
                minute = 60;
                hour--;
            }
        }
        time.innerHTML = hour+':'+minute+':'+second;
    }, 1000);
})();
</script>

<?php get_footer();?>