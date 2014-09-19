<!DOCTYPE HTML>
<html>
<head>
	<title><?php wp_title('&#124;','true','right'); ?><?php bloginfo('name'); ?></title>
	<meta name="Description" content="Casino Parties, Theme Nights & Events - serving New England. Alpine Amusement works with corporate event and meeting planners, fundraiser committees and individuals to provide fun and entertainment for all ages. Plan your next event with Alpine Amusement - Casino Parties and Theme Nights with Las Vegas grade equipment.">
	<meta name="Keywords" content="casino, party, planner, theme, theme party, corporate, events, planning, amusement, Texas, hold em, Las Vegas, night, fundraiser, ideas, fundraising, adult, entertainment,tradeshows, trade, show, rehearsal dinner, rehearsal, dinner, weddings, wedding, Vermont, New Hampshire, Massachusetts, Maine, Rhode Island, New England, black jack, craps, roulette, money wheel, poker">
	<meta name="Author" content="Zachary Lincoln - burlingtoncollective.com">
	<meta name="Robots" content="ALL">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="google-site-verification" content="cADrV0Udi4rIUHU4O8DTlCHbz1FXN1IS3HWg092x9X8" />
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link href="<?= get_template_directory_uri(); ?>/css/master.css?<?= time ( void ); ?>" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
</head>
<body itemscope itemtype="http://schema.org/LocalBusiness">
	<nav id="top-nav">
		<div class="container">
			<p class="pull-right"><span>Ron Jacobs &middot; (802) 496-4498</span> <a href="http://alpineamusement.com/contact-us/" class="btn btn-primary btn-sm">Contact Us</a></p>
		</div>
	</nav>
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
		      <a class="navbar-brand" href="<?= home_url(); ?>"><img src="<?= get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?= bloginfo('name'); ?>" class="img-responsive" itemprop="logo"><meta itemprop="name" content="Alpine Amusement"></a>
		    </div>
		    <!-- <div id="extra-menu" class="hidden-xs hidden-sm">
		    	<span>(802) 496-4498</span>
		    	<a target="_blank" title="Check on Facebook for images from your event!" href="https://www.facebook.com/pages/Alpine-Amusement/205272029675678" class="social facebook"></a>
		    	<a target="_blank" title="Connect on LinkedIn!" class="social linked_in" href="https://www.linkedin.com/pub/ron-jacobs/70/aa2/611"></a>
		    </div> -->
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