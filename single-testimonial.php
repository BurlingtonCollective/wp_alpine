<?php

get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h1>Testimonial via <?php the_title(); ?></span></span></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container interior" itemprop="review" itemscope itemtype="http://schema.org/Review">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-7">
				<article class="post">
					<div class="logo">
						<?php the_post_thumbnail('full', array(
							'class' => 'img-responsive'
						)); ?>
						<span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><span style="display:none;"><?php the_title();?></span></span></span>
					</div>
					<div class="content">
						<div class="excerpt" itemprop="reviewBody">
							<?php the_content(); ?>
						</div>
					</div>
				</article>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-md-push-1">
				<?php include('includes/testimonial-subnav.php'); ?>
			</div>
		</div>
	</div>
</section>

<?php
endwhile; endif;
get_footer();

?>