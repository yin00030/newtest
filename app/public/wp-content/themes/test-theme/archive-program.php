<?php
get_header();
pageBanner(array(
  'title'=>'All Programs',
  'subtitle'=>'look around world'
));
?>


    <div class="container container--narrow page-section">
       <ul class="link-list min-list">
        
       
      <?php 

      while(have_posts()) {
the_post(); ?>
 <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
<?php }
     echo paginate_links();
      ?>
      </ul>
      <hr class="section-break">
  <p>looking for a recap of past events？<a href="<?php echo site_url('/past-events')?>">check out our past events archive</a></p>  
  </div>
<?php get_footer();
?>