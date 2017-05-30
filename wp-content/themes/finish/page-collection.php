<?php
/**
 * Template Name: колекция
 */
?>

<?php get_header(); ?>

<?php
// Start the loop.
global $post;
$thisId = $post->ID;
while (have_posts()) : the_post();
    ?>
    <div id="banner" class="clearfix">
            <img src="<?php echo $post_background = get_post_meta($post->ID, 'post_background', 1); ?>">
        <div class="textBanner">
            <div class="breadCrumbs">
                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>
            <h1><?php the_title(); ?></h1><span><?php echo get_the_date("F j, Y") ?></span>
        </div>
    </div>
    <?php
endwhile;
?>
<?php
while (have_posts()) :
the_post();
?>
<div class="width1170 clearfix sliderCollection">
    <div class="MainIMG">
        <?php
        $galleryArray = get_post_gallery_ids($post->ID, 1);

        foreach ($galleryArray as $id) { ?>
            <img src="<?php echo wp_get_attachment_url($id); ?>">

        <?php } ?>

    </div>
    <div class="otherImg">
        <?php
        $galleryArray = get_post_gallery_ids($post->ID, 4);

        for ($i = 1; $i < count($galleryArray); $i++) { ?>
            <div>
                <img src="<?php echo wp_get_attachment_url($galleryArray[$i]); ?>">
            </div>
        <?php } ?>
        <?php
        endwhile;
        ?>
    </div>
    <div class="sliderContent">
        <?php the_content() ?>
        <a href="#" class="howOrder">КАК СДЕЛАТЬ ЗАКАЗ</a>
    </div>
</div>
<div class="width1170 otherCollection clearfix">


    <div class="forChapter">
        <h2>Другие колекции этой фабрики</h2>
    </div>

    <div class="collections">
        <?php
        $pages = get_pages(array(
                'parent' => -1,
                'hierarchical' => 0,
                'sort_column' => 'post_date',
                'sort_order' => 'desc',
                'meta_key'=>'_wp_page_template',
                'meta_value'=>'page-collection.php'
            )
        );

        foreach ($pages as $page) {
            $content = $page->post_content;
            if (!$content) // Check for empty page
                continue;

            if ($page->ID == $thisId) {
                continue;
            }
            $content = apply_filters('the_content', $content);
            //echo var_dump($page);
            ?>

            <a href="<?php echo get_page_link($page->ID); ?>" class="collection">
                <?php echo get_the_post_thumbnail($page->ID, 'full');
                ?>
                <div class="text">
                    <h5><?php echo $page->post_title; ?></h5>
                    <!--                    <span>design by Luca Nichetto</span>-->
                </div>
            </a>

            <?php
        }
        ?>
    </div>
</div>
<div id="overflow"></div>
<?php get_footer(); ?>
