<?php get_header(); ?>
<section id="new-home-banner">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Casino parties throughout New England</h2>
			</div>
		</div>
		<div class="row" id="intro-copy">
			<div class="col-xs-6">
				<p><span>Alpine Amusement</span> &middot; We're a New England based professional Las Vegas Casino Night event &amp; entertainment rental company.  Founded in Vermont, Alpine Amusement has been providing Casino Grade equipment to corporate event planners, non-profit organizations, and personal functions in the New England and northern New York region since 1991.</p>
				<p>Corporate Parties &middot;  Company Events &middot; Team Building &middot; Fundraisers &middot; Weddings &middot; Holiday Parties &middot; Family Gatherings</p>
				<a href="http://alpineamusement.com/contact-us/" class="btn btn-block btn-primary">Contact Us</a>
			</div>
			<div class="col-xs-5 col-xs-push-1">
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
					    <li data-target="#featured-images" data-slide-to="6"></li>
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
<?php get_footer(); ?>