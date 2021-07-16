
<?php
  $video = get_field('video');
?>

<section class="home-hero section">
  <div class="home-hero__inner container" id="">   
    <video id="js-hero-video" autoplay="autoplay" autoplay=1 muted  data-keepplaying >
        <source src="<?php echo $video['url'] ?>" type="video/mp4" />
    </video>
  </div>
  <div class="home-hero__scroll-down container" >
    <h3 id="home-hero-typed" class="tags"></h3>      
  </div>
</section>