<?php get_header(); ?>

<div class="row">
    <div class="col-1-of-4">
        <div class="sidebar u-margin-top-big">
            <?php get_sidebar(); ?>
        </div>       
    </div>
    <div class="col-3-of-4">
        <div class="container u-margin-top-big">

            <div class="container__content">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; else: endif; ?>
            </div>
        </div>      
    </div>
</div>

<?php get_footer(); ?>