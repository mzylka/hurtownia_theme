<?php get_header(); ?>

<div class="row">
    <div class="col-1-of-4">
        <div class="sidebar u-margin-top-medium">
            <?php get_sidebar(); ?>
        </div>       
    </div>
    <div class="col-3-of-4">
        <div class="container u-margin-top-medium">
            <?php woocommerce_content(); ?>
        </div>      
    </div>
</div>

<?php get_footer(); ?>