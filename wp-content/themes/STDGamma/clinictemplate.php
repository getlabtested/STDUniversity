
   
   
 <?php /* Template Name: Clinic Template */?>   
   

 <?php get_header(); ?>  
   
   <div class="art-contentLayout">
  <div class="art-contentclinic">


   


   
   
               
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
               
           
             <?php the_content(__('[Read more]'));?>  
                       
             <?php endwhile; else: ?>  
               
             <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>  
                           
   
<!-- The main column ends  -->  
  

    
    
    
  </div>
  <?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
</div>

  
<?php get_footer(); ?>  