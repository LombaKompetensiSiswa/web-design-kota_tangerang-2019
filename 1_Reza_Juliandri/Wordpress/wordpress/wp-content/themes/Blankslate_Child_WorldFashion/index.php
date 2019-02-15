<?php
    get_header();
    get_sidebar();
?>
<div class="bg-banner"></div>
<div class="banner">
    <div class="container">
        <div class="space"></div>
        <div class="main-videos-span">
            <div class="col-lg-12">
                    <video id="main-video" src="<?=DIR?>/videos/Video-1.mp4" autoplay loop muted></video>
            </div>
        </div>
    </div>
</div>
<div class="sub-banner">
    <div class="row">
        <div class="container">
            <div class="col-lg-3 col-xs-6 cover">
                <label>Fashion Show 2017</label>
                <div class="bg"></div>
                <video class="video" src="<?=DIR?>/videos/Video-15.mp4" loop muted></video>
            </div>
            <div class="col-lg-3 col-xs-6 cover">
                <label>Fashion Show 2017</label>
                <div class="bg"></div>
                <video class="video" src="<?=DIR?>/videos/Video-15.mp4" loop muted></video>
            </div>
            <div class="col-lg-3 col-xs-6 cover">
                <label>Fashion Show 2017</label>
                <div class="bg"></div>
                <video class="video" src="<?=DIR?>/videos/Video-15.mp4" loop muted></video>
            </div>
            <div class="col-lg-3 col-xs-6 cover">
                <label>Fashion Show 2017</label>
                <div class="bg"></div>
                <video class="video" src="<?=DIR?>/videos/Video-15.mp4" loop muted></video>
            </div>
        </div>
    </div>
</div>
<?php
// dd(get_defined_functions());
// dd(get_posts());?>
<div class="eventdescription">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2>Global Fashion</h2>
            </div>
            <div class="col-lg-9">
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quas eaque pariatur quis dignissimos. Dolor alias, eius sequi optio cum saepe exercitationem, qui corporis delectus laboriosam veritatis, doloribus numquam voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam alias ut deleniti itaque eos rerum voluptatibus beatae culpa, in pariatur sequi aliquid nostrum ab corrupti cumque. Minus aspernatur ducimus distinctio? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate neque vitae odit vero doloribus, officia consectetur tempore error, at blanditiis veritatis animi ratione voluptate minima, autem laborum architecto quos? Nulla?
                </p>
            </div>
            <!-- <div class="col-lg-3"></div> -->
        </div>
    </div>
</div>
<div class="timeDate">
    <div class="container">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="box">
                <div class="row">
                    <h2>Event Countdown</h2>
                    <div class="time">
                        <span id="day">99</span> Day(s) <span id="hour">99</span>Hour(s) <span id="minute">99</span> Minute(s) <span id="second">99</span> Second(s)
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
<div class="regist">
    <div class="container">
        <div class="col-lg-7">
            <h2>Registration</h2>
            <p>Let's regist for get your book number</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In natus possimus saepe animi dolor libero quos a hic amet! Provident earum eum esse neque unde cupiditate porro molestiae quia. Soluta?</p>
        </div>
        <div class="col-lg-5">
            <button class="btn btn-primary">Registration</button>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <h2>Recent News</h2>
        <div class="row">
            <?php
                $i = 0;
                // foreach(get_posts() as $post):
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    // dd(get_post($post->id));
                    // dd($post);
                
                    if($i == 3){
                        echo "</div>";
                        echo '<div class="row">';
                        $i = 0;
                    }
            ?>
            <div class="col-lg-4 col-xs-12" style="margin-bottom: 20px">
                <div class="main-content" onclick="window.location.href='<?=$post->guid?>'">
                    <h1><?php the_title(); ?></h1>
                        <?php if ( has_post_thumbnail() ) { "<div class=\"thumbnail\">".the_post_thumbnail()."</div>"; } ?>                        
                    <p><?php 
                        echo get_post()->post_content
                    ?></p>
                    <div class="navigation">
                        <div class="col-lg-7 col-xs-6">
                            <?=get_the_date()?>
                        </div>
                        <div class="col-lg-5 col-xs-6">
                            <div class="right-float">
                                <span class="readmore">Read More...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    $i++;
                // endforeach;
                endwhile; endif;
            ?>
        </div>
    </div>
</div>
<?php
    get_footer();
?>