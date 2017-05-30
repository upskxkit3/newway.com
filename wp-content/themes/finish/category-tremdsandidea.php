<?php get_header(); ?>

    <div id="banner" class="clearfix"><img src="<?php echo get_template_directory_uri(); ?>/img/blogBG.jpg">
        <div class="textBanner">
            <div class="breadCrumbs">
                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>
            <h1><?php single_cat_title(); ?></h1>
        </div>
    </div>

    <div class="lastBlogs clearfix">

        <?php while (have_posts()) : the_post(); ?>
            <div class="blogS">
                <?php the_post_thumbnail() ?>
                <div class="contBlogSlider">
                    <h5 style="text-transform: uppercase;"><?php the_title(); ?></h5>
                    <span><?php echo get_the_date("F j, Y") ?></span>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>

    </div>
    <div class="width1170 clearfix blogsPlace">
        <?php while (have_posts()) : the_post(); ?>
            <div class="blogInBlogs">
                <div class="view"><?php the_post_thumbnail() ?>
                    <div class="shortText">
                        <h5><?php the_title(); ?></h5><span><?php echo get_the_date("F j, Y") ?></span>
                    </div>
                </div>
                <div class="textBlog">
                    <?php the_excerpt() ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="readNext">Читать далее</a>
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>


<?php get_footer(); ?>