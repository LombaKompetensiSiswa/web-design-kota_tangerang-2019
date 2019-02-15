<?php get_header(); ?>
<style>
.entry-meta, .entry-title{
    display: none;
}
header{
    background: rgba(255,57,200, 1) !important; 
}
#content{
    padding: 40px;
}
#content>p{
    margin-top: 100px;
    font-size: 18px;
}
.comment-respond{
    margin-top: 20px;
}
#comment{
    border-radius: 8px
}
#submit{
    background: dodgerblue;
    border: 0;
    padding: 10px;
    border-radius: 8px;
    color: white;
}
</style>
<br><br><br><br><br>
<div>
<div class="row container" style="margin:auto">
<div class="col-md-12">
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?=the_author();?><br/>
<?=the_date();?>
<h1><b><?php the_title(); ?></b></h1>
    <?=the_content();?>
    <br><br><br><br>
    <hr>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
</div>

<?php get_footer(); ?>