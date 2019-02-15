<aside class="sidebar">
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <div id="primary" class="widget-area">
        <ul class="xoxo">
        <?php dynamic_sidebar( 'primary-widget-area' ); ?>
        </ul>
    </div>
    <?php endif; ?>
</aside>
<div class="toggle">
    <span class="text active">></span>
    <span class="text"><</span>
</div>