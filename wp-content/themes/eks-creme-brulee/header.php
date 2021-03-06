<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:300,600,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700' rel='stylesheet' type='text/css'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!-- nav -->
		<nav class="nav" role="navigation">
			<?php html5blank_nav(); ?>
		</nav>
		<!-- /nav -->

		<!-- header -->
		<header class="header clear" role="banner">
				
				<div class="menu"></div>

				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ek-logo-small" alt="Logo" class="logo-img">
						creme brulee
					</a>
				</div>
				<!-- /logo -->


		</header>
		<!-- /header -->
