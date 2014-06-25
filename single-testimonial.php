<?php

get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h1>Testimonial via <?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container interior">
		<div class="row">
			<div class="col-xs-7">
				<article class="post">
					<div class="logo">
						<?php the_post_thumbnail('full', array(
							'class' => 'img-responsive'
						)); ?>
					</div>
					<div class="content">
						<div class="excerpt">
							<?php the_content(); ?>
						</div>
					</div>
				</article>
			</div>
			<div class="col-xs-4 col-xs-push-1">
				<?php include('includes/testimonial-subnav.php'); ?>
			</div>
		</div>
	</div>
</section>

<?php
endwhile; endif;
get_footer();

?>