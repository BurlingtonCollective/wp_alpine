<!DOCTYPE HTML>
<html>
<head>
	<title>Home | Alpine Amusement</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link href="<?= get_template_directory_uri(); ?>/css/master.css?<?= time ( void ); ?>" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?= home_url(); ?>"><img src="<?= get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?= bloginfo('name'); ?>" class="img-responsive"></a>
		    </div>
		    <div id="extra-menu" class="hidden-xs hidden-sm">
		    	<span>(802) 496-4498</span>
		    	<a target="_blank" title="Check on Facebook for images from your event!" href="https://www.facebook.com/pages/Alpine-Amusement/205272029675678" class="social facebook"></a>
		    	<a target="_blank" title="Connect on LinkedIn!" class="social linked_in" href="https://www.linkedin.com/pub/ron-jacobs/70/aa2/611"></a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <?php
		    	wp_nav_menu(array(
		    		'menu' => 'primary',
		    		'theme_location' => 'primary',
		    		'depth' => 2,
		    		'container' => 'div',
		    		'container_class' => 'collapse navbar-collapse',
		    		'container_id' => 'main-nav',
		    		'menu_class' => 'nav navbar-nav pull-right',
		    		'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
		    		'walker' => new wp_bootstrap_navwalker()
		    	));
		    ?>
		  </div><!-- /.container-fluid -->
		</nav>
	</header>