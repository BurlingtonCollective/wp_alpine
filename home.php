<?php get_header(); ?>
<section id="home-banner">
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="inner">
						<h2>Casino themed parties available throughout New England</h2>
						<?php
							$query = new WP_Query(array('post_type'=>'testimonial', 'posts_per_page'=>6, 'meta_key'=>'wpcf-featured', 'meta_value', 1));
							if($query->have_posts()):
						?>
						<div id="testimonial-slider" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php
						  	$innerActive = true;
						  	while($query->have_posts()): $query->the_post();
						  	error_log(print_r($post, true));
						  	$raw_state = types_render_field("state", array( ));
						  	$raw_state = strtolower($raw_state);
						  	$fixed_state = preg_replace("/[\s_]/", "-", $raw_state);
						  	$category = wp_get_post_terms($post->ID, 'testimonial-category', array('fields'=>'names'));
						  	error_log($category[0]);
						  	?>
						    <div class="item <?= ($innerActive) ? 'active' : ''; ?>">
						    	<p><?php the_title(); echo ' - ' . $category[0]; ?></p>
						    	<div class="content">
						    		<?php the_excerpt(); ?>
						    		<a href="<?php the_permalink(); ?>">See More</a>
						    	</div>
						    	<div class="map sprite sprite-<?= $fixed_state; ?>"></div>
						    </div>
						    <?php
						    $innerActive = false;
						    endwhile;
						    ?>
							</div>
							<!-- Controls -->
						  <a class="left carousel-control" href="#testimonial-slider" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						  </a>
						  <a class="right carousel-control" href="#testimonial-slider" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						  </a>
						</div>
						<?php endif; ?>
						<ol class="carousel-indicators hidden-xs hidden-sm">
					  	<?php 
					  	$indicatorIndex = 0;
					  	$indicatorActive = true;
					  	while($query->have_posts()): $query->the_post(); ?>
					    <li class="col-md-2" data-target="#testimonial-slider" data-slide-to="<?= $indicatorIndex; ?>" <?= ($indicatorActive) ? 'class="active"' : ''; ?>>
				    		<?php the_post_thumbnail('full', array(
						    )); ?>
						  </li>
						  <?php
						  $active = false;
						  $indicatorIndex++;
						  endwhile; ?>
					  </ol>
					  <div id="extra-logos" class="hidden-xs hidden-sm">
					  	<div class="row">
					  		<div class="col-xs-12">
					  			<h5 style="text-align: center;">Previously Partnered With:</h5>
					  		</div>
					  	</div>
					  	<div class="row">
					  		<div class="col-xs-2">
					  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-burton-white.png" style="margin: 0 auto;">
					  		</div>
					  		<div class="col-xs-2">
					  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-aig-white.png" style="margin: 0 auto;">
					  		</div>
					  		<div class="col-xs-2">
					  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-bcg-white.png" style="margin: 17px auto 0;">
					  		</div>
					  		<div class="col-xs-2">
					  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-chevy-white.png" style="margin: 13px auto 0;">
					  		</div>
					  		<div class="col-xs-2">
					  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-amr-white.png" style="margin: 22px auto 0;">
					  		</div>
					  		<div class="col-xs-2">
					  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-gsk-white.png" style="margin: 0 auto;">
					  		</div>
					  	</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="intro">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-7">
				<div class="inner">
					<h1>Alpine Amusement</h1>
					<p class="faux-heading">Casino themed parties available throughout New England</p>
					<p>Alpine Amusement is a Vermont-based professional Las Vegas Casino Night event &amp; entertainment rental company.  Founded in Vermont, Alpine Amusement has been providing Casino Grade equipment to corporate event planners, non-profit organizations, and personal functions in the New England and northern New York region since 1991.</p>
					<p>Corporate Parties &middot;  Company Events &middot; Team Building &middot; Fundraisers &middot; Weddings &middot; Holiday Parties &middot; Family Gatherings</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-md-push-1">
				<div class="carousel-wrapper">
					<div id="featured-images" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#featured-images" data-slide-to="0" class="active"></li>
					    <li data-target="#featured-images" data-slide-to="1"></li>
					    <li data-target="#featured-images" data-slide-to="2"></li>
					    <li data-target="#featured-images" data-slide-to="3"></li>
					    <li data-target="#featured-images" data-slide-to="4"></li>
					    <li data-target="#featured-images" data-slide-to="5"></li>
					    <li data-target="#featured-images" data-slide-to="6"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/table.jpg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/party2.jpg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/craps.jpg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/table2.jpg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/party1.jpeg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/party3.jpg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/maroon-table.jpg">
					    </div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#featured-images" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#featured-images" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 separator-wrapper">
				<img src="<?= get_stylesheet_directory_uri(); ?>/images/chip-separator.png" class="img-responsive">
			</div>
		</div>
	</div>
</section>
<!-- <section id="home-tertiary">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-push-2">
				
			</div>
		</div>		
	</div>
</section> -->
<?php get_footer(); ?>