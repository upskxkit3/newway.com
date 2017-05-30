<?php
/**
 * Template Name: фабрика
 */
?>

<?php get_header(); ?>
<?php
$thisID = get_the_ID();
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
<div class="width1170 textCurrentFabrick clearfix">
    <div class="textFabrick">
        <?php the_content() ?>
        <a href="#" class="howOrder">Как
            сделать заказ</a></div>
    <div class="fabricThumnail"><img
                src="<?php echo $post_background = get_post_meta($post->ID, 'post_preview', 1); ?>"></div>
</div>

<div class="width1170 CollectionInFabrick">
    <div class="h2collection"><h2>КОЛЛЕКЦИИ</h2></div>
    <div class="collections clearfix">

        <?php
        $pages = get_pages(array(
                'child_of' => $thisID,
                'sort_column' => 'post_date',
                'sort_order' => 'desc'
            )
        );

        foreach ($pages as $page) {
            $content = $page->post_content;

            if ($page->ID == $thisID) {
                continue;
            }
            if (!$content) // Check for empty page
                continue;


            $content = apply_filters('the_content', $content);
            ?>

            <div class="collection">
                <?php echo get_the_post_thumbnail($page->ID, 'full');
                ?>
                <div class="text">
                    <h5><?php echo $page->post_title; ?></h5>
                    <!--                    <span>design by Luca Nichetto</span>-->
                </div>
                <div class="hov">
                    <a href="<?php echo get_page_link($page->ID); ?>" class="showMore">ПОДРОБНЕ</a>
                </div>
            </div>

            <?php
        } ?>
    </div>
</div>

<div id="overflow"></div>
<?php get_footer(); ?>
