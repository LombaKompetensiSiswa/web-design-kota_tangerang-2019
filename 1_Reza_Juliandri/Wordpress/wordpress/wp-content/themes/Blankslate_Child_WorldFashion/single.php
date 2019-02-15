<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="post-content">
    <div class="row">
        <div class="container">
            <div class="content-data">
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                <?php 
                    if ( has_post_thumbnail() ) { 
                        echo  "<div class='thumbnail'><img src='".get_the_post_thumbnail_url()."'/></div>";
                    } 
                ?>
                <span class="date"><?=get_the_date()?></span>
                <h2><?=the_title()?></h2>
                <p>
                    <?php echo get_post()->post_content?>
                </p>
                <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>