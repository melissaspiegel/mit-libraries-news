<?php 
	get_header();
?>


<link rel="stylesheet" href="//cdn.jsdelivr.net/flexboxgrid/5.0.0/flexboxgrid.min.css" type="text/css" />


<div class="content-main">

	<?php get_template_part('inc/sub-header'); ?>	
<section class="flexcontainer  posts--preview">
	<div class="row">
	<?php $i = 1; ?>
	<?php  while ( have_posts() ): the_post();  ?>
 <div class="newsBox blueTop col-xs-12 col-sm-8 col-md-6 col-lg-4" style="padding-left:0px;padding-right: 0px;">
    <div class="box-row  <?php if (!has_post_thumbnail()) { echo "no-image"; } else { echo "has-image"; } ?>" onClick="location.href='<?php echo get_post_permalink(); ?>'">	       
	    
		<?php if (get_field('mark_as_new') === true): ?>
		
		<?php endif; ?>
		<?php 
		if ( has_post_thumbnail() ) {		
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
			
?>	
	<img src="<?php echo $thumb_url; ?>" width="100%" height="200" />		
				
<?php		
	} 			
?>		

		<h2 class="title-post"><?php the_title(); ?></h2>
		<div class="excerpt-post">
			<?php the_excerpt(); ?>
 		</div>
		<div class="category-post">
			<?php
			$category = get_the_category(); 
			echo $category[0]->cat_name;
			echo $category[1]->cat_name;
			?>
		</div><! -- /box row -->
	


 </div>
    	<!--col-xs-->
  </div>
  <!--box-row-->
 <?php  // if multiple of 3 close div and open a new div
     if($i % 3 == 0) {echo '</div><div class="row"> ';} ?>
  
<?php $i++; endwhile; 
//make sure open div is closed
echo '</div>'; ?>
</div>
<!--row-->

	
	
	
	
	</section>



<?php 
	get_footer();
?>