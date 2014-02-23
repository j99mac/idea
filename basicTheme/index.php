<?php
/*
Template Name: Snarfer
*/
?>
<html>
<head>
<title>Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="css/slidebars.min.css">
<link rel="stylesheet" href="css/slidebars-theme.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
<div class="sb-navbar sb-slide">
  <div class="sb-toggle-left">
    <div class="navicon-line"></div>
    <div class="navicon-line"></div>
    <div class="navicon-line"></div>
  </div>
  <?php get_header(); ?>

  <h2>Title<small>Sub Title</small></h2>
</div>

     <div class="container">
    <div id="sb-site">
        <div class="site-width">    

        ?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
        <div class="date"><?php the_time( 'M j y' ); ?></div>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->
    <div class="post-footer">
        <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?> 
        <h3><a name="Who"></a>Who</h3>
        <h3><a name="What"></a>What</h3>
        <h3><a name="Why"></a>Why</h3>
        <h3><a name="How"></a>How</h3>
         </div>
   <!-- FOOTER -->
 <div id="footer">
  <?php get_footer(); ?>
      </footer>
<div class="sb-slidebar sb-left">
  <aside class="sb-widget">
  <div class="sb-widget-header">
    <h3 class="sb-widget-title"></h3>
  </div>
  <ul class="sb-menu">
    <li><a href="#Who">Who</a></li>
    <li><a href="#What">What</a></li>
    <li><a href="#Why">Why</a></li>
    <li><a href="#How">How</a></li>
  </ul>
  <div class="sidebar-text">Text</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/slidebars.min.js"></script>
<script src="js/slidebars-theme.js"></script>
<script>
			(function($) {
				$(document).ready(function() {
					$.slidebars();
				});
			}) (jQuery);
		</script>
  </body>
</html>