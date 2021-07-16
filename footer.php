<?php
/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-name
 */

?>

<section class="footer section fp-auto-height">
  <div class="footer__inner container container-wide">

    <div class="footer__left">
      <p class="body-p">Keep up with the latest from Will Ventures</p>
      <div class="footer__input">
        <input type="text" placeholder="Your Email">
        <p class="btn-text">SIGN UP</p>
      </div>
      
    </div>
    <div class="footer__right">
      <div class="footer__social">
        <?php _get_template_part('templates/components/_twitter'); ?>
        <?php _get_template_part('templates/components/_linkedin'); ?>
      </div>
      <p class="js-footer-credits-btn">Site Credits</p>
      <div class="footer__site-credits">
        <p class="body-p">Design by</p>
        <a href="https://butterstudio.co/" target="_blank"><p class="body-p">Butter</p></a>
        <p class="body-p">Code by</p>
        <a href="https://lattimoreandfriends.com/" target="_blank"><p class="body-p">Lattimore & Friends</p></a>

      </div>
    </div>
  </div>

  <div class="footer__animation container container-wide footer-lottie"  id="footer-lottie-fullpage" style="background-color: white">
</div>
</section>



  <?php wp_footer(); ?>

  </main-wrap>
</main>
<div class="footer__animation container container-wide footer-lottie"  id="footer-lottie" style="background-color: white">
</div>


  </body>
</html>
