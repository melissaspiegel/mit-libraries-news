<?php
/*
Template Name:Bibliotech 
*/


$pageRoot = getRoot($post);
$section = get_post($pageRoot);
$isRoot = $section->ID == $post->ID;


 
get_header(); ?>
<?php get_template_part('inc/sub-header'); ?>


<div class="wrap-page">	
	
	
	
	
	
	<div id="primary" class="content-area">
		<main id="main" class="content-main" role="main">


<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();  ?>
	
<?php  $post_type = 'bibliotech';	  ?>

<pre>
<?php print_r(get_post_type_object($post_type)); ?>		
</pre>


<?php	} // end while
} // end if
?>






</main><!-- #main -->
		
		
	</div><!-- #primary -->

	
	
	


<?php get_footer(); ?>