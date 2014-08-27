<?php

get_header();
if (have_posts()) :
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h1>Testimonials in <?= $wp_query->queried_object->name; ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container interior">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-7">
				<?php while (have_posts()) : the_post(); ?>
				<article class="post" itemscope itemtype="http://schema.org/LocalBusiness">
					<div class="logo">
						<?php the_post_thumbnail('full', array(
							'class' => 'img-responsive',
						)); ?>
					</div>
					<div class="content" itemprop="review" itemscope itemtype="http://schema.org/Review">
						<h4><a href="<?php the_permalink(); ?>"><span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php the_title(); ?></span></span></a></h4>
						<div class="excerpt" itemprop="reviewBody">
							<?php the_excerpt(); ?>
							<a class="more" href="<?php the_permalink(); ?>">See More</a>
						</div>
					</div>
				</article>
				<?php endwhile; ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-md-push-1">
				<?php include('includes/testimonial-subnav.php'); ?>
			</div>
		</div>
	</div>
</section>
<?php
endif;
get_footer();

?>