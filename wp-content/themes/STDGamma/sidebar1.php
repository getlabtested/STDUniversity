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

<?php
$children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');
if ($children) { ?>
    <ul>
        <?php echo $children; ?>
    </ul>
<?php } ?>
    
		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif ?>
</div>



