<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php
         // Print the <title> tag based on what is being viewed.
         global $page, $paged;
         
         wp_title( '|', true, 'right' );
         
         // Add the blog name.
         bloginfo( 'name' );
         
         // Add a page number if necessary:
         if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
         	echo esc_html( ' | ' . sprintf( __( 'Page %s', 'Podcast Theme' ), max( $paged, $page ) ) );
         
         ?></title>
      <!-- Bootstrap Core CSS -->
      <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
      <!-- Theme CSS -->
      <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
      <script src="https://use.fontawesome.com/040c034aef.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico">
      <!-- Canonical -->    
      <link rel="canonical" href="<?php bloginfo('url'); ?>" />
      <?php wp_head(); ?>
   </head>
   <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container-fluid">
            <div class="left-header">
               <?php if( get_field('logo', 'option') ): ?>
               <a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
               <img class="logo" src="<?php the_field('logo', 'option'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
               </a>
               <?php endif; ?>
            </div>
            <div class="right-header">
               <?php if( get_field('phone_number_text', 'option') ): ?><span><?php the_field('phone_number_text', 'option'); ?></span><?php endif; ?>
               <button data-toggle="collapse" type="button" class="collapsed btn btn-primary" data-target="#contact-form" aria-expanded="false"><?php if( get_field('contact_button', 'option') ): ?><?php the_field('contact_button', 'option'); ?><?php else: ?>CONTACT<?php endif; ?></button>
            </div>
         </div>
         <!-- /.container -->
      </nav>
      <!-- Navigation -->
      <div id="contact-form" class="panel-collapse contact-form collapse" aria-expanded="false" role="contentinfo">
         <div class="container-fluid">
            <div class="row">
               <div class="row-padding">
                  <div class="col-lg-6 col-sm-6">
                     <?php if( get_field('section_heading', 'option') ): ?>
                     <h3><?php the_field('section_heading', 'option'); ?></h3>
                     <?php endif; ?>
                     <?php if( get_field('section_text', 'option') ): ?><?php the_field('section_text', 'option'); ?><?php endif; ?>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                     <div class="form-block"><?php the_field('contact_form', 'option'); ?></div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
      <div id="top-navigation">
         <div class="container-navigation">
            <div class="row">
               <div class="col-lg-4 col-xs-4"><button data-toggle="collapse" type="button" class="collapsed" data-artist-name="" data-target="#drop-navigation" aria-expanded="false">Individuals</button></div>
               <div class="col-lg-4 col-xs-4"><button data-toggle="collapse" type="button" class="collapsed" data-artist-name="" data-target="#drop-navigation" aria-expanded="false">Business</button></div>
               <div class="col-lg-4 col-xs-4"><button data-toggle="collapse" type="button" class="collapsed" data-artist-name="" data-target="#drop-navigation" aria-expanded="false">Corporate</button></div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div id="drop-navigation" class="panel-collapse contact-form collapse" aria-expanded="false" role="contentinfo">
            <div class="container-navigation">
               <div class="row">
                  <div class="col-lg-4 col-xs-4">
                     <?php
                        if ( has_nav_menu( 'individuals_menu' ) ) {
                             wp_nav_menu( array( 'theme_location' => 'individuals_menu', 'menu_class' => 'individuals-menu', 'menu_id' => 'individuals_menu'  ) );
                        } ?> 
                  </div>
                  <div class="col-lg-4 col-xs-4">
                     <?php
                        if ( has_nav_menu( 'business_menu' ) ) {
                             wp_nav_menu( array( 'theme_location' => 'business_menu', 'menu_class' => 'business-menu', 'menu_id' => 'business_menu'  ) );
                        } ?> 
                  </div>
                  <div class="col-lg-4 col-xs-4">
                     <?php
                        if ( has_nav_menu( 'corporate_menu' ) ) {
                             wp_nav_menu( array( 'theme_location' => 'corporate_menu', 'menu_class' => 'corporate-menu', 'menu_id' => 'corporate_menu'  ) );
                        } ?> 
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>