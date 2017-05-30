<?php
/**
 * Template Name: Каталог фабрик
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


<div class="width1170 clearfix" ng-app="myApp" ng-clock>
    <div ng-controller="WineCtrl as ctrl" ng-cloak class="posRel">
        <div class="fillter clearfix" ng-show="ctrl.showFillter">
            <div ng-repeat="(prop,val) in ctrl.Fabrics[0] | limiToKey" ng-init="ctrl.filter[prop] = {}"
                 class="filBlock">
                <h3>{{ prop | capitalizeFirst }}</h3>
                <div class="quarter" ng-repeat="value in ctrl.getValuesFor(prop)">

                    <input type="checkbox" ng-model="ctrl.filter[prop][value]" id="1{{value | limitTo:3}}"/>

                    <label for="1{{value| limitTo:3}}">{{ value }}</label>
                </div>
            </div>
        </div>
        <div class="clearfix filterPanel">
            <div>Показано x из {{ filteredFabrics.length }}</div>
            <h5 ng-click="ctrl.showFillter=!ctrl.showFillter">Фильтр <i ng-show="ctrl.showFillter" class="fa fa-times"
                                                                        aria-hidden="true"></i></h5>
        </div>
        <div class="width1020">
            <div ng-repeat="fabric in (ctrl.Fabrics | filter:ctrl.filterByProperties) as filteredFabrics" class="fab">
                <img ng-src="{{fabric.src}}" class="attachment-full size-full wp-post-image" alt="">
                <div class="text">
                    <h5>{{fabric.name}}</h5>
                </div>
                <div class="hov">
                    <a ng-href="{{fabric.link}}" class="showMore">ПОДРОБНЕ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="overflow"></div>
<?php get_footer(); ?>
