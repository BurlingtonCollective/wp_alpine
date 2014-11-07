<?php
/*
Template Name: Contact Page
*/
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container interior">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-7">
				<?php include('includes/contact-form.php'); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-md-push-1">
				<ul class="plain">
					<li>Alpine Amusement</li>
					<li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">P.O. Box 477</span>, <span itemprop="addressLocality">Waitsfield</span> <span itemprop="addressRegion">VT</span> <span itemprop="postalCode">05673</span></li>
					<li>Office: <span itemprop="telephone">802.496.4498</span></li>
					<li>Cell: <span itemprop="telephone">802.279.2214</span></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
get_footer(); ?>