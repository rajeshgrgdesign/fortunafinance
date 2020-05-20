<!-- Footer -->
<section id="contact-section">
   <div class="wrap">
      <?php if( get_field('section_heading_rc', 'option') ): ?>
      <h2 class="h1"><?php the_field('section_heading_rc', 'option'); ?></h2>
      <?php endif; ?>
      <?php if( get_field('section_text_rc', 'option') ): ?><?php the_field('section_text_rc', 'option'); ?><?php endif; ?>
      <div class="button-block">
        <?php if( get_field('apply_online_button', 'option') ): ?><a href="<?php the_field('apply_online_link', 'option'); ?>" class="btn btn-primary btn-apply-online"><?php the_field('apply_online_button', 'option'); ?></a><?php endif; ?>        
        <?php if( get_field('contact_button_rc', 'option') ): ?><a href="#collapse" data-toggle="collapse" class="collapsed btn btn-primary" data-artist-name="" data-target="#contact-form" aria-expanded="false"><?php the_field('contact_button_rc', 'option'); ?></a><?php endif; ?>
      </div>
   </div>
</section>
<div id="social-proof">
   <div class="footer-wrap">
      <div class="row top-footer">
         <div class="col-lg-4 col-sm-4">
            <?php if( get_field('image_1_sp', 'option') ): ?>
            <img src="<?php the_field('image_1_sp', 'option'); ?>" alt="" class="vouchedfor">
            <?php endif; ?>
         </div>
         <div class="col-lg-4 col-sm-4">
            <?php if( get_field('image_2_sp', 'option') ): ?>
            <img src="<?php the_field('image_2_sp', 'option'); ?>" alt="">
            <?php endif; ?>
         </div>
         <div class="col-lg-4 col-sm-4">
            <?php if( get_field('image_3_sp', 'option') ): ?>
            <img src="<?php the_field('image_3_sp', 'option'); ?>" alt="">
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>
<footer>
   <div class="footer-wrap">
      <?php //if ( is_active_sidebar( 'footer_one' ) || is_active_sidebar( 'footer_two' ) || is_active_sidebar( 'footer_three' ) || is_active_sidebar( 'footer_four' ) ) { ?>
      <div class="row top-footer">
         <!-- <div class="footer-column footer-one">
            <?php //dynamic_sidebar('footer_one'); ?>
         </div>
         <div class="footer-column footer-two">
            <?php //dynamic_sidebar('footer_two'); ?>
         </div>
         <div class="footer-column footer-three">
            <?php //dynamic_sidebar('footer_three'); ?>
         </div> -->
         <div class="footer-column footer-five">
            <div class="copyright-block">
               <div class="copyright"><?php dynamic_sidebar('copyright_widget'); ?></div>
               <div class="links"><a href="https://www.vouchedfor.co.uk" target="_blank" rel="nofollow">VouchedFor.co.uk</a> | <a href="https://www.yell.com/biz/fortuna-financial-planning-hertford-4829887/" target="_blank">Yell.com</a> | <a href="https://www.unbiased.co.uk" target="_blank" rel="nofollow">Unbiased.co.uk</a></div>
            </div>
         </div>
         <div class="footer-column footer-four">
            <?php dynamic_sidebar('footer_four'); ?>
         </div>
      </div>
      <?php //} ?>
   </div>
</footer>
<!-- <div class="copyright">
   <div class="copyright-wrap">
      <div class="row">
         <div class="col-lg-12">
            <?php dynamic_sidebar('copyright_widget'); ?>
         </div>
      </div>
   </div>
</div> -->
<?php wp_footer(); ?>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
<script type="text/javascript">
  jQuery('.collapse').on('show.bs.collapse', function () {
    jQuery('.collapse.in').each(function(){
        jQuery(this).collapse('hide');
    });
  });
</script>
</body>
</html>