<?php
/*
Template Name: Conatct
*/
get_header();

$copy = get_field('copy');
$heading = get_field('heading');
$image = get_field('image');

?>
<div class="page-wrap">

  <section class="contact">
    <div class="container">
    <h1 class="header-compressed-med"><?php echo $heading ?></h1>
        <h2><?php echo $copy ?></h2>
    </div>
    <div class="contact__inner container">
      <div class="contact__left">
        <form action="" class="contact__form">
          <div class="contact__form-double-row">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
          </div>
          <input type="text" placeholder="Company">
          <input type="text" placeholder="Email">

          
          <select id="discuss">
            <option value="what">What would you like to discuss?</option>
            <option value="some">Something</option>
          </select>
          <p>Leave us a note. We'll get back to you soon. </p>
          <textarea name="" id="" cols="30" rows="10"></textarea>
          <button class="btn">SUBMIT</button>
        </form>
      </div>
      <div class="contact__right">

        <div class="contact__image-wrap">
          <img class="contact__image contact__image-one" src="<?php echo $image['url'] ?>" alt="">
          <img class="contact__image contact__image-two" src="<?php echo $image['url'] ?>" alt="">
          <img class="contact__image contact__image-three" src="<?php echo $image['url'] ?>" alt="">
          <img class="contact__image contact__image-four" src="<?php echo $image['url'] ?>" alt="">
        </div> 

        <div class="contact__image-contact">
          <a href="mailto:media@willventures.com" class="body-p" >media@willventures.com</a>
          <a href="mailto:info@willventures.com" class="body-p" >info@willventures.com</a>
        </div>

        

           
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>