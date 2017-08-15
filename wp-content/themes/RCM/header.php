<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
		crossorigin="anonymous">
		</script>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">


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

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>

						<div class="socials" id="socials-header">
								<a target="_blank" href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Facebook.png" alt="facebook" class="social-icon">
								</a>
								<a target="_blank" href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Instagram.png" alt="instagram" class="social-icon">
								</a>
								<a target="_blank" href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Twitter.png" alt="twitter" class="social-icon">
								</a>
								<a target="_blank" href="#">	
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Linkedin.png" alt="linkedin" class="social-icon">
								</a>
								<a target="_blank" href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/YouTube.png" alt="youtube" class="social-icon">
								</a>
						</div>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
