<?php get_header(); ?>
<section id="jumbotron"></section>
<section id="content" class="error-page">
   <div class="inner-wrap ">
      <div class="error-block text-center">
         <h1>Page not found (404 Error)</h1>
         <h2 class="subtitle">Sorry but the page you are looking for could not be found.</h2>

         <p>Please click to go back to the homepage or try some of our popular pages;</p>

         <div class="btn-block">
            <p><a href="<?php echo get_site_url(); ?>">< Back to Home Page</a></p>
            <p><a href="#collapse" data-toggle="collapse" class="collapsed" data-target="#contact-form" aria-expanded="false">Contact Us ></a></p>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>