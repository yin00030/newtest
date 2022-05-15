<?php
get_header();
pageBanner(array(
  'title'=>'Our Campuses',
  'subtitle'=>'We have several campuses'
));
?>


    <div class="container container--narrow page-section">
       
        <div class="acf-map">
       
      <?php 

      while(have_posts()) {
the_post(); 
$mapLocation = get_field('map_location');
?>
 <div class="marker" data-lat="<?php echo $mapLocation['lat']?>" data-lng="<?php echo $mapLocation['lng']; ?>"></div>
    
<?php }
     echo paginate_links();
      ?>
      </div>
     
      <hr class="section-break">
  <p>looking for a recap of past events？<a href="<?php echo site_url('/past-events')?>">check out our past events archive</a></p>  
  </div>
<?php get_footer();
?>