<?php /* Template Name: campus */?>   

  



 <?php get_header(); ?>  

 



 

 <body bgcolor="#ffffff" onLoad="MM_preloadImages(http://stduniversity.com/wp-content/themes/STDGamma/images/9.jpg',http://stduniversity.com/wp-content/themes/STDGamma/images/hotspotmap.png',http://stduniversity.com/wp-content/themes/STDGamma/images/8.jpg',http://stduniversity.com/wp-content/themes/STDGamma/images/7.jpg',http://stduniversity.com/wp-content/themes/STDGamma/images/map-6.png',http://stduniversity.com/wp-content/themes/STDGamma/images/5.jpg',http://stduniversity.com/wp-content/themes/STDGamma/images/4.jpg',http://stduniversity.com/wp-content/themes/STDGamma/images/3.jpg',http://stduniversity.com/wp-content/themes/STDGamma/images/jpg-2.jpg',http://stduniversity.com/wp-content/themes/STDGamma/images/1.jpg');">





   

 <!-- Main Column Begins -->  





   



   

   

   

               

             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  

               

           

             <?php the_content(__('[Read more]'));?>  

                       

             <?php endwhile; else: ?>  

               

             <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>  

                           

   

<!-- The main column ends  -->  

  

<?php get_footer(); ?>  