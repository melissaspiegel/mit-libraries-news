<?php 
	get_header();
?>

<?php
the_excerpt_max_charlength(140);

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			return $subex;
		}
		echo '[...]' ;
	} else {
		return $excerpt;
	}
}

?>


<?php get_template_part('inc/sub-header'); ?>	

<div class="content-main">
<h2>Scholarly Communication</h2>
<?php $query = new WP_Query( array( 'meta_key' => 'feature_type', 'meta_value' => 'true' ) ); ?>
<?php //get_post(14109); ?> 

<div class="flex-container">
<div class="row">
<?php get_post(14109); ?> 
  <div class="col-xs">
    <div class="box-row">

		<?php 
		if ( has_post_thumbnail() ) {		
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
			
?>	
	<img src="<?php echo $thumb_url; ?>" width="100%" height="250" />		
				
<?php		
	} 			
?>		


	    
    </div>
  </div>
    <div class="newsBox featured col-xs-12 col-sm-8 col-md-6 col-lg-4">
    <div class="box-row ">
<h2 class="title-post"><?php the_title(); ?></h2>
<div class="excerpt-post">
	
			<?php the_excerpt_max_charlength(140); ?>
	
 		</div>

	    
    </div>
  </div>
</div>
</div><!--closes flexbox container-->


	
<section class="bgGrey">
	<div class="flex-container">
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





		<h2 class="title-post"><?php the_title(); ?> </h2>
		
		<!--EVENT  DATE-->		
		<?php 
	if( get_field('is_event') ){
	
	$date = DateTime::createFromFormat('Ymd', get_field('event_date')); ?>


<div class="event"><?php echo  $date->format('l, F t'); ?>&nbsp;&nbsp; &nbsp; <span class="time"><?php if( get_field('event_start_time') ){ echo the_field('event_start_time'); } ?>

<?php if(( get_field('event_start_time') ) && ( get_field('event_end_time') )){ echo '-';} ?> 


<?php if( get_field('event_end_time') ){ echo the_field('event_end_time'); } ?></span></div>
<!--EVENT -->		
		

<!--/EVENT  DATE-->		

<?php } ?>








		
		<div class="excerpt-post">
			<?php the_excerpt_max_charlength(140); ?>
 		</div>

<!--echo all the cat -->
<div class="category-post">
<?php 
$category = get_the_category(); 
if($category[0]){
echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
}
?>
<span class="mitDate">&nbsp;&nbsp;<?php echo get_the_date(); ?></span>
<!--echo all the cat -->

		</div><! -- /box row -->
 </div>
    	<!--col-xs-->
  </div>
  <!--box-row-->
 <?php  // if multiple of 3 close div and open a new div
     if($i % 3 == 0) {echo '</div><div class="flex-container"> ';} ?>
  
<?php $i++; endwhile; 
//make sure open div is closed
echo '</div>'; ?>
</div>
<!--row-->

	
	
	
	
	</section>

</div>
<div class="wrap-page">
<?php 
	get_footer();
?>