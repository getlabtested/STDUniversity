<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }

 elseif (is_single() ) { single_post_title(); }

 elseif (is_page() ) { bloginfo('name'); echo ': '; single_post_title(); }

 else { wp_title('',true); } ?></title>



<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script.js"></script>

<script language="JavaScript1.2" type="text/javascript">



<!--



function MM_findObj(n, d) { //v4.01



  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {



    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}



  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];



  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);



  if(!x && d.getElementById) x=d.getElementById(n); return x;



}



function MM_swapImage() { //v3.0



  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)



   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}



}


function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}








//-->



</script>















<?php wp_head(); ?><meta name="verify-v1" content="78z14Jkrh1FQLaZ4hnKQu0xm2RtlA5SS1f0JXBMPSto=" >



<?php wp_enqueue_script('jquery'); ?>





<?php wp_enqueue_script('jquery'); ?>

<script type="text/javascript"><!--//--><![CDATA[//><!--



sfHover = function() {

	var sfEls = document.getElementById("nav").getElementsByTagName("LI");

	for (var i=0; i<sfEls.length; i++) {

		sfEls[i].onmouseover=function() {

			this.className+=" sfhover";

		}

		sfEls[i].onmouseout=function() {

			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");

		}

	}

}

if (window.attachEvent) window.attachEvent("onload", sfHover);



//--><!]]></script>







<script src="http://ezpost.healthday.com/healthdayliteV3-jquery.js" type="text/javascript" charset="utf-8"></script>









<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!--[if IE 6]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.ie6.css" type="text/css" media="screen" /><![endif]-->

<!--[if IE 7]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.ie7.css" type="text/css" media="screen" /><![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" /> 

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

</head>

<body>

<div id="art-main">

<div class="art-Sheet">

    <div class="art-Sheet-tl"></div>

    <div class="art-Sheet-tr"></div>

    <div class="art-Sheet-bl"></div>

    <div class="art-Sheet-br"></div>

    <div class="art-Sheet-tc"></div>

    <div class="art-Sheet-bc"></div>

    <div class="art-Sheet-cl"></div>

    <div class="art-Sheet-cr"></div>

    <div class="art-Sheet-cc"></div>

    <div class="art-Sheet-body">

<div class="art-Header" >

 <a href="<?php bloginfo('url'); ?>">

<?php if(function_exists('show_media_header')){ show_media_header(); } 
?>

    </a>





</div>



<div class="breadcrumb">

<?php

if(function_exists('bcn_display'))

{

	bcn_display();

}

?>

</div>

