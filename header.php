<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till div#breadcrumb
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js lte-ie9" lang="en"><![endif]-->
<!--[if !(IE 8) | !(IE 9) ]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- <meta name="format-detection" content="telephone=no"> -->
<!--<meta name="viewport" content="width=device-width" />-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta property="og:title" content="MIT Libraries"/>
<meta property="og:image" content="http://libraries.mit.edu/wp-content/themes/libraries/images/mit-libraries-logo-bg-black-1200-1200.png"/>
<meta property="og:url" content="http://libraries.mit.edu">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<?php
		//$askUrl = get_post_meta($post->ID, "ask_us_override", 1);
		$askUrl = "";
		if ($askUrl == "") $askUrl = "/ask";
?>
	<script>
		todayDate="";
	</script>
</head>

<body <?php body_class(); ?>>
	
	
		<div style="background-color:rgb(51, 51, 51);;height: auto"> 
			<div class="wrap-page">
		<header class="header-main flex-container flex-end">
			
			<h1 class="name-site group">
				<a href="/" class="logo-mit-lib"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="128.027" height="53.766" viewBox="0 0 128.027 53.766" enable-background="new 0 0 128.027 53.766" xml:space="preserve"><polygon points="0,53.486 0,29.308 5.919,29.308 8.671,45.75 8.72,45.75 11.643,29.308 17.367,29.308 17.367,53.486 13.787,53.486   13.787,34.833 13.738,34.833 10.352,53.486 6.845,53.486 3.629,34.833 3.581,34.833 3.581,53.486 "/><rect x="20.662" y="29.308" width="3.678" height="24.179"/><polygon points="37.659,29.308 37.659,33.326 33.567,33.326 33.567,53.486 29.889,53.486 29.889,33.326 25.797,33.326   25.797,29.308 "/><polygon points="40.547,53.43 40.547,29.249 42.691,29.249 42.691,51.621 50.695,51.621 50.695,53.43 "/><path d="M52.535 36.517h2.01V53.43h-2.01V36.517zM52.3 29.249h2.478v2.545H52.3V29.249z"/><path d="M57.154 53.431c0.101-0.57 0.201-1.106 0.201-1.676V29.249h2.01v9.176l0.067 0.067c1.037-1.606 2.377-2.311 4.286-2.311 5.493 0 5.058 5.761 5.058 8.774 0 3.719-0.301 8.81-5.225 8.81 -1.976 0-3.416-0.804-4.253-2.378h-0.067v2.043H57.154zM62.948 52.157c3.718 0 3.818-3.182 3.818-7.134s-0.101-7.233-3.818-7.233c-3.249 0-3.65 4.387-3.65 6.933C59.298 47.401 59.298 52.157 62.948 52.157"/><path d="M72.79 38.794h0.066c0.838-1.607 2.613-2.611 4.656-2.611v2.043c-2.847-0.235-4.723 1.474-4.723 4.319v10.886h-2.01V36.517h2.01V38.794z"/><path d="M86.852 51.353h-0.067c-1.072 1.608-2.713 2.412-4.789 2.412 -3.015 0-4.656-2.043-4.656-4.99 0-5.929 5.963-5.325 9.377-5.592v-1.408c0-2.478-0.735-3.985-3.414-3.985 -1.844 0-3.317 0.905-3.317 2.914h-2.144c0.168-3.249 2.68-4.521 5.627-4.521 1.709 0 5.259 0.166 5.259 4.487v8.507c0 1.205 0 2.277 0.2 4.254h-2.075V51.353zM86.716 44.789c-2.879 0.101-7.233-0.233-7.233 3.885 0 1.909 0.972 3.483 3.048 3.483 2.311 0 4.186-2.076 4.186-4.287V44.789z"/><path d="M93.61 38.794h0.067c0.839-1.607 2.613-2.611 4.656-2.611v2.043c-2.847-0.235-4.724 1.474-4.724 4.319v10.886h-2.01V36.517h2.01V38.794z"/><path d="M99.936 36.517h2.009V53.43h-2.009V36.517zM99.7 29.249h2.479v2.545H99.7V29.249z"/><path d="M106.765 45.393v1.306c0 2.344 0.637 5.459 3.818 5.459 2.512 0 3.752-1.607 3.719-3.885h2.109c-0.234 4.086-2.445 5.492-5.828 5.492 -2.914 0-5.827-1.172-5.827-6.296v-4.153c0-4.89 2.043-7.134 5.827-7.134 5.828 0 5.828 4.187 5.828 9.211H106.765zM114.401 43.784c0-3.751-0.603-5.994-3.818-5.994 -3.215 0-3.818 2.243-3.818 5.994H114.401z"/><path d="M123.038 53.765c-3.651 0-5.092-1.774-5.058-5.358h2.043c0 2.312 0.535 3.852 3.114 3.852 1.943 0 2.88-1.104 2.88-2.981 0-4.42-7.603-3.281-7.603-8.875 0-3.114 2.144-4.219 5.092-4.219 3.349 0 4.42 2.311 4.42 4.889h-1.977c-0.1-2.144-0.67-3.282-2.947-3.282 -1.439 0-2.578 0.938-2.578 2.444 0 4.221 7.603 3.082 7.603 8.742C128.027 52.157 126.186 53.765 123.038 53.765"/><path class="arch" fill-rule="evenodd" clip-rule="evenodd" d="M121.487 19.746c-33.822-10.8-82.05-10.8-115.805 0C36.39 3.176 90.661 3.176 121.487 19.746"/><path class="arch" fill-rule="evenodd" clip-rule="evenodd" d="M105.419 8.979c-24.436-7.803-59.282-7.803-83.67 0C43.936-2.993 83.147-2.993 105.419 8.979"/></svg></a>
			</h1>

			<?php get_template_part('inc/nav', 'main'); ?>
			
			<a class="link-logo-mit" href="http://www.mit.edu"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="54" height="28" viewBox="0 0 54 28" enable-background="new 0 0 54 28" xml:space="preserve" class="logo-mit"><rect x="28.9" y="8.9" width="5.8" height="19.1" class="color"/><rect width="5.8" height="28"/><rect x="9.6" width="5.8" height="18.8"/><rect x="19.3" width="5.8" height="28"/><rect x="38.5" y="8.9" width="5.8" height="19.1"/><rect x="38.8" width="15.2" height="5.6"/><rect x="28.9" width="5.8" height="5.6"/></svg></a>

			<a href="/search" class="link-site-search hidden-non-mobile">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search"><path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
				</svg>
				<span class="bottom">Search</span>
			</a>
			<a href="/barton-account" class="link-account hidden-non-mobile">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="15.4" height="16" viewBox="0 0 15.4 16" enable-background="new 0 0 15.445 16" xml:space="preserve" class="icon-account"><path d="M13.4 15.7C12.2 15.9 10.4 16 7.7 16c-5.4 0-7.3-0.6-7.3-0.6 -0.3-0.1-0.4-0.4-0.4-0.7 0.3-1.6 1.2-2.5 2.5-3.3 0.3-0.2 0.8-0.4 1.2-0.6 0.8-0.3 1.8-0.7 2-1.3C5.8 9.2 5.7 8.6 5.2 7.9c-1.4-2.3-1.7-4.3-0.8-5.9C5.1 0.7 6.4 0 7.7 0c1.4 0 2.6 0.7 3.3 2 0.9 1.6 0.7 3.6-0.8 5.9C9.8 8.6 9.6 9.2 9.8 9.6c0.2 0.6 1.2 1 2 1.3 0.4 0.2 0.9 0.4 1.2 0.6 1.2 0.8 2.1 1.6 2.5 3.3 0.1 0.3-0.1 0.6-0.4 0.7C15 15.4 14.5 15.6 13.4 15.7"/></svg>
				<span class="bottom">Account</span>
			</a>

		</header>
			</div><!--close page wrap-->
	</div><!--new black header that extends 100%-->
		<?php 

			$pageRoot = getRoot($post);
			$section = get_post($pageRoot);

		?>
		