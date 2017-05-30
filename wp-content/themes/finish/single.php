<?php
/**
 * Template Name: Блог
 */
?>
<? get_header(); ?>
<?php
// Start the loop.
global $post;
$thisId = $post->ID;
while (have_posts()) : the_post();
    ?>
    <div id="banner" class="clearfix">
        <?php
        $galleryArray = get_post_gallery_ids($post->ID, 1);

        foreach ($galleryArray as $id) { ?>

            <img src="<?php echo wp_get_attachment_url($id); ?>">

        <?php } ?>
        <div class="textBanner">
            <div class="breadCrumbs">
                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>
            <h1><?php the_title(); ?></h1><span><?php echo get_the_date("F j, Y") ?></span>
        </div>
    </div>

    <div class="width1170 textCurrentBlog">
        <?php the_content() ?>

    </div>
    <?php
endwhile;
?>

    <div class="NewsInNews clearfix width1170">
        <h3>ЕЩЁ НОВОСТИ</h3>
        <div class="LastNews clearfix">

            <?php
            while (have_posts()) : the_post();

            if($post->ID == $thisId) continue;
                ?>
                <a class="news" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <h4><?php the_title() ?></h4>
                    <span><?php echo get_the_date("F j, Y") ?></span>
                </a>
                <?php
            endwhile;
            wp_reset_query();
            ?>


        </div>
    </div>


<? get_footer(); ?>