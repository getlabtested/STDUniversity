<?php
/*
Template Name: HealthdayNewsfeed
*/
?>
<?php get_header(); ?>
<div class="art-contentLayout">
<div class="art-sidebar1">      
<?php if (!art_sidebar(1)): ?>

<div class="art-Block">
    <div class="art-Block-tl"></div>
    <div class="art-Block-tr"></div>
    <div class="art-Block-bl"></div>
    <div class="art-Block-br"></div>
    <div class="art-Block-tc"></div>
    <div class="art-Block-bc"></div>
    <div class="art-Block-cl"></div>
    <div class="art-Block-cr"></div>
    <div class="art-Block-cc"></div>
    <div class="art-Block-body">
<div class="art-BlockHeader">
    <div class="l"></div>
    <div class="r"></div>
    <div class="art-header-tag-icon">
        <div class="t"><?php _e('Departments', 'kubrick'); ?></div>
    </div>
</div><div class="art-BlockContent">
    <div class="art-BlockContent-body">

<ul>

<li class="page_item page-item-425"><a href="http://stduniversity.com/journalism/newsfeed" title="Live Newsfeed">Live Newsfeed</a></li>

    </ul>
    
		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif ?>
</div>




<div class="art-content">



<div class="art-Block">
    <div class="art-Block-tl"></div>
    <div class="art-Block-tr"></div>
    <div class="art-Block-bl"></div>
    <div class="art-Block-br"></div>
    <div class="art-Block-tc"></div>
    <div class="art-Block-bc"></div>
    <div class="art-Block-cl"></div>
    <div class="art-Block-cr"></div>
    <div class="art-Block-cc"></div>
    <div class="art-Block-body">

<div class="art-BlockHeader">
    <div class="l"></div>
    <div class="r"></div>
    <div class="art-header-tag-icon">
        <div class="t">Live News Feed</div>
    </div>
</div>
<div class="art-BlockContent">
    <div class="art-BlockContent-body">

<div id="healthdaySearch" class="searchBox">
<span class="cfg" style="display: none">
    clientId = "E06822EA";
    newsFeed = "C";
	newsType = "2";
	landingUrl = "http://stduniversity.com/journalism/search";
  </span>
</div>			

<div id="healthdayList4" class="hdjson list3">

<span class="cfg" style="display: none">
    clientId = "E06822EA";
    newsFeed = "C";
    newsType = "2";
    numberReturn = "10";
	landingUrl = "http://stduniversity.com/journalism/article";
  </span>
</div>

		<div class="cleared"></div>
    </div>
</div>


		<div class="cleared"></div>
    </div>
</div>


</div>
<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
</div>
<div class="cleared"></div>

<?php get_footer(); ?>






