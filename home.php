<?php get_header(); ?>
<section id="new-home-banner">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Casino parties throughout New England</h2>
			</div>
		</div>
		<div class="row" id="intro-copy">
			<div class="col-xs-12 col-md-6">
				<p><span>Alpine Amusement</span> &middot; We're a New England based professional Las Vegas Casino Night event &amp; entertainment rental company.  Founded in Vermont, Alpine Amusement has been providing Casino Grade equipment to corporate event planners, non-profit organizations, and personal functions in the New England and northern New York region since 1991.</p>
				<p id="party-types"><a href="/gallery/#special-occasions">Weddings</a> &middot; <a href="/gallery/#special-occasions">Civil Unions</a> &middot; <a href="/gallery/#special-occasions">Bar / Bat Mitzvah</a> &middot;  <a href="/gallery/#private-parties">Private Parties</a> &middot; <a href="/gallery/#theme-parties">Theme Parties</a> &middot; <a href="/gallery/#non-profits">Non-profits</a> &middot; <a href="/gallery/#outdoor">Tents / Outdoor Venues</a> &middot; <a href="/gallery/#corporate">Corporate Parties</a> &middot; <a href="/gallery/#corporate">Tradeshows</a></p>
				<a href="http://alpineamusement.com/contact-us/" class="btn btn-block btn-primary">Contact Us</a>
			</div>
			<div class="col-xs-12 col-md-5 col-md-push-1">
				<div id="carousel-wrapper">
					<div id="featured-images" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#featured-images" data-slide-to="0" class="active"></li>
					    <li data-target="#featured-images" data-slide-to="1"></li>
					    <li data-target="#featured-images" data-slide-to="2"></li>
					    <li data-target="#featured-images" data-slide-to="3"></li>
					    <li data-target="#featured-images" data-slide-to="4"></li>
					    <li data-target="#featured-images" data-slide-to="5"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/new-party.jpg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/party2.jpg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/craps.jpg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/speakeasy.jpg">
					    </div>
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/IMG_3823.jpg">
					    </div>
					    <!-- <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/maroon-table.jpg">
					    </div> -->
					    <div class="item">
					    	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/marketing/replace-maroon.JPG">
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
		</div>
		<div class="row">
			<div class="col-xs-12">
				<?php
					$query = new WP_Query(array('post_type'=>'testimonial', 'posts_per_page'=>6, 'meta_key'=>'wpcf-featured', 'meta_value', 1));
					if($query->have_posts()):
				?>
				<div id="testimonial-slider" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				  	<?php
				  	$innerActive = true;
				  	while($query->have_posts()): $query->the_post();
				  	$raw_state = types_render_field("state", array( ));
				  	$raw_state = strtolower($raw_state);
				  	$fixed_state = preg_replace("/[\s_]/", "-", $raw_state);
				  	$category = wp_get_post_terms($post->ID, 'testimonial-category', array('fields'=>'names'));
				  	?>
				    <div class="item <?= ($innerActive) ? 'active' : ''; ?>">
				      <h3><?php the_title(); echo ' - ' . $category[0]; ?></h3>
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
				  <a class="left carousel-control" href="#testimonial-slider" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#testimonial-slider" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div>
	  	<div class="row">
	  		<div class="col-xs-12">
	  			<h5 style="text-align: center;margin-top: 30px;">Representative Clients:</h5>
	  		</div>
	  	</div>
	  	<div id="extra-logos" class="row">
	  		<div class="col-xs-4 col-sm-2">
	  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-burton-white.png" style="margin: 0 auto;">
	  		</div>
	  		<div class="col-xs-4 col-sm-2">
	  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-aig-white.png" style="margin: 0 auto;">
	  		</div>
	  		<div class="col-xs-4 col-sm-2">
	  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-bcg-white.png" style="margin: 17px auto 0;">
	  		</div>
	  		<div class="col-xs-4 col-sm-2">
	  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-chevy-white.png" style="margin: 13px auto 0;">
	  		</div>
	  		<div class="col-xs-4 col-sm-2">
	  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-amr-white.png" style="margin: 22px auto 0;">
	  		</div>
	  		<div class="col-xs-4 col-sm-2">
	  			<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logos/ko-gsk-white.png" style="margin: 0 auto;">
	  		</div>
	  	</div>
	  </div>
	</div>
</section>
<?php get_footer(); ?>