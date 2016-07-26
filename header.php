<!doctype html>
<html>
<head>
   <meta charset="UTF-8">
   <title><?php bloginfo ('name'); ?></title>
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
   <?php wp_head(); ?>
</head>
<body <?php body_class ?>>
   <header class="header">
     <div class="header_image">
       <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
     </div>
   	 <div class="container">
   			<div class="header-top">
   				<div class="social-icon">
   					<span class="icon icon-fb">
   						<a href="#"><i class="fa fa-facebook"></i></a>
   					</span>
   					<span class="icon icon-google">
   						<a href="#"><i class="fa fa-google-plus"></i></a>
   					</span>
   					<span class="icon icon-twitter">
   						<a href="#"><i class="fa fa-twitter"></i></a>
   					</span>
   					<span class="icon icon-pinterest">
   						<a href="#"><i class="fa fa-pinterest-p"></i></a>
   					</span>
   				</div>
   				<div class="logo">
   					<h1> <?php bloginfo ('name');?> </h1>
   				</div>
   				<div class="searchform">
   					<span class="search-icon"><i class="fa fa-search"></i></span>
            <?php get_search_form(); ?>
   				</div>
   			</div>
   			<div class="navbar">
          <?PHP
            wp_nav_menu(array(
               'theme_location' => 'primary'
            ));
          ?>
   			</div>
   		</div>

    </header>

       <!-- blog-body -->
   	<section class="content">
   		<div class="container">
