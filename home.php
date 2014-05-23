<?php get_header(); ?>
<section id="home-banner">
	<div class="jumbotron">
		<div class="container">
			<div class="row banner-top">
				<div class="col-xs-12">
					<h1>Alpine Amusement</h1>
					<h3>Casino themed parties available throughout New England</h3>
					<div class="btn-group btn-group-lg">
						<a class="btn btn-default" href="tel:+18888888888">(888) 888-8888</a>
						<a class="btn btn-primary" href="contact_us.html">Contact Us</a>
					</div>
				</div>
			</div>
			<?php
				$query = new WP_Query(array('post_type'=>'testimonial', 'posts_per_page'=>10));
				if($query->have_posts()):
			?>
			<div class="row banner-bottom">
				<div class="col-xs-12">
					<?php
						$query = new WP_Query(array('post_type'=>'testimonial', 'posts_per_page'=>6));
					?>
					<div class="slider-container">
						<div class="testimonial">
							<div id="testimonial-slider" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
							  	<?php 
							  	$indicatorIndex = 0;
							  	$indicatorActive = true;
							  	while($query->have_posts()): $query->the_post(); ?>
							    <li data-target="#testimonial-slider" data-slide-to="<?= $indicatorIndex; ?>" <?= ($indicatorActive) ? 'class="active"' : ''; ?>></li>
								  <?php
								  $active = false;
								  $indicatorIndex++;
								  endwhile; ?>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner">
							  	<?php
							  	$innerActive = true;
							  	while($query->have_posts()): $query->the_post();
							  	?>
							    <div class="item <?= ($innerActive) ? 'active' : ''; ?>">
							    	<?php the_content(); ?>
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
						</div>
						<div class="logo-bar">
							<div class="row">
								<div class="col-xs-2">
									<img class="img-responsive" src="http://placehold.it/200x100"/>
								</div>
								<div class="col-xs-2">
									<img class="img-responsive" src="http://placehold.it/200x100"/>
								</div>
								<div class="col-xs-2">
									<img class="img-responsive" src="http://placehold.it/200x100"/>
								</div>
								<div class="col-xs-2">
									<img class="img-responsive" src="http://placehold.it/200x100"/>
								</div>
								<div class="col-xs-2">
									<img class="img-responsive" src="http://placehold.it/200x100"/>
								</div>
								<div class="col-xs-2">
									<img class="img-responsive" src="http://placehold.it/200x100"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; //if($query->have_posts()) ?>
		</div>
	</div>
</section>
<section>
	<div class= "container">
		<div class="row">
			<div class="col-xs-5">
				<h4>Lorem ipsum dolor sit amet</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>We offer services for all types of events:</p>
				<ul>
					<li>Corporate Parties</li>
					<li>Office Parties</li>
					<li>Company Events</li>
					<li>Team Building</li>
					<li>Fundraisers</li>
					<li>Weddings</li>
					<li>Holiday Parties</li>
					<li>Family Gatherings &amp; Reunions</li>
        </ul>
			</div>
			<div class="col-xs-6 col-xs-push-1">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				    	<img class="img-responsive" src="http://placehold.it/800x400">
				    </div>
				    <div class="item">
				    	<img class="img-responsive" src="http://placehold.it/800x400">
				    </div>
				    <div class="item">
				    	<img class="img-responsive" src="http://placehold.it/800x400">
				    </div>
				    <div class="item">
				    	<img class="img-responsive" src="http://placehold.it/800x400">
				    </div>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>
			</div>
		</div>		
	</div>
</section>
<?php get_footer(); ?>