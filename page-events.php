<?php
/*
Template Name:Events 
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
$posts = get_posts(array(
	'meta_query' => array(
		array(
			'key' => 'is_event',
			'value' => '1',
			'compare' => '==',
			'orderby' => 'event_date',
			'order'	  => 'DESC'
		)
	)
));
?>
<ul>
<?php 
if( $posts )
{
	foreach( $posts as $post )
	{ 
		setup_postdata( $post );  ?>

	<li>	
	<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
	<br />
	Event Date:<?php the_field('event_date');?>
	Start Time<?php the_field('event_start_time');?>
	End Time<?php the_field('event_end_time');?>
	
	
	
	
	</li>
		
		
<?php	}

	wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
}

?>

</ul>

<?php get_template_part('inc/related'); ?>
		</main><!-- #main -->
		
		
	</div><!-- #primary -->

	
	
	


<?php get_footer(); ?>