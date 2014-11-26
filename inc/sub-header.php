
<div class="newsSubHeader">
	<div class="wrap-page">
<div class="title-page flex-container">
	<h1 class="name-site"><?php bloginfo('name'); ?></h1>
	<div class="flex-container">
		<a href="">Subscribe</a>
		<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.jpg" /></a>
		<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.jpg" /></a>
		<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google.jpg" /></a>
		<div class="search"><?php get_search_form('true'); ?></div>
	</div>
</div>

<hr class="news">

<div class="row">
  <div class="col-xs-12
                col-sm-8
                col-md-6
                col-lg-4">
    <div class="box-row newsNav">
	    
	   <?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s udClear">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>	    
    </div>
  </div>
  <div class="col-xs-offset-4 col-xs">
    <div class="box-row">

<ul>


<li id="categories">
		<form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

		<?php
		$args = array(
			'show_option_none' => __( 'Category' ),
			'show_count'       => 0,
			'orderby'          => 'name',
			'echo'             => 0,
		);
		?>

		<?php $select  = wp_dropdown_categories($args); ?>
		<?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
		<?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>

		<?php echo $select; ?>

		<noscript>
			<input type="submit" value="View" />
		</noscript>

	</form>
</li>


<li>
<select id="mitArchive" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Dates' ) ); ?></option> 
  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
</select>
</li>

</ul>	    
    </div>
  </div>
</div>
	</div><!--close div -->
</div><!--100%-->
<div style="background-color:rgb(233, 233, 233);" class="udClear">













<div class="wrap-page">














