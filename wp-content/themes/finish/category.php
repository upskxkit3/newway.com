<?php get_header();?>

    <div class="Bline">
        <div class="mBline">
            <h6><?php single_cat_title();?></h6>

            <div><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
        </div>
    </div>


    <div class="cont">
        <?php
        while ( have_posts() ) : the_post();
            ?>
            <div>
                <?php the_post_thumbnail();?>
                <span><?php the_title();?></span>
                <a href="<?php the_permalink();?>"></a>
            </div>
            <?php
        endwhile;


        wp_reset_query();
        ?>
    </div>

<?php get_footer();?>