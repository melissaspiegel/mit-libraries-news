<?php
/**
 * @package MIT Libraries News
 */
	
	$category = get_the_category();
	$type_post = get_post_type();
	$subtitle;
	$type;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-category="<?php echo $category[0]->slug; ?>">
	<div class="title-page  mySingle">
		<?php if (get_field('mark_as_new') === true): ?>
		<span>New!</span>
		<?php endif; ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if($type_post === 'post') {
			$subtitle = get_field('subtitle');
			echo '<h2 class=subtitle>' . $subtitle . '</h2>';
		} ?>

		<div class="entry-meta">
			<span class="author">
				By <?php the_author_posts_link(); ?>
			</span>
			<span class="date-post">
				<?php echo ' on '; the_date(); ?>
			</span>
			<?php if(has_category()): ?>
			<span class="category-post">
				<?php //echo ' in ' . array_slice($category, 0, 2); ?>
			</span>
			<?php endif; ?>
		</div><!-- .entry-meta -->
	</div><!-- .title-page -->

	<div class="entry-content mitContent">
		<?php
			
		if ( has_post_thumbnail() ) {		
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
			
?>	
	<img src="<?php echo $thumb_url; ?>" width="100%"  />		
				
<?php		
	} 	?>		
		<br /><br />
		
		 <?php
			the_content();
			// Echo type of Feature, if Feature
			if ($type_post === 'features') {
				$type = get_field('feature_type');
				echo 'The feature type is' . $type;
			}
			// Echo start/end dates, if they exist
			if ($type_post === 'exhibits' || $type_post === 'updates') {
				$date_start = get_field('date_start');
				$date_end = get_field('date_end');
				echo '<div>Start date is ' . $date_start . '</div>';
				echo '<div>End date is ' . $date_end . '</div>';
			} ?>
			
			
			<?php $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
					//echo  $date->format('l, F t'); ?>
			
			
			
		<?php
			// Check for events
			if ($type_post === 'post' && get_field('is_event') === true) { ?>
			
			<div class="event"><span class="grey">Event date is</span> <?php echo $date->format('l, F t'); ?> <span class="grey">starting at</span> <?php echo  get_field('event_start_time'); ?> <span class="grey">and ending at</span> <?php echo get_field('event_end_time'); ?></div>
				
		
			<?php 
								}
		?>
			

	</div><!-- .entry-content -->

</article><!-- #post-## -->


