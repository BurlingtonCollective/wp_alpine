<?php
/*
Template Name: Testimonial Page
*/
get_header();
?>
<section>
	<div class="container interior-container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h1>Testimonials</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-7">
				<?php
				$query = new WP_Query(array(
					'post_type'=>'testimonial'
				));
				if($query->have_posts()):while($query->have_posts()):$query->the_post();
				?>
				<div class="media">
				  <a class="pull-left" href="#">
				    <img class="media-object" src="http://placehold.it/200x100&text=Logo" alt="...">
				  </a>
				  <div class="media-body">
				    <h4 class="media-heading"><?php the_title(); ?></h4>
			    	<?php the_content(); ?>
				  </div>
				</div>
				<?php
				endwhile;
				endif;
				?>
			</div>
			<div class="col-xs-4 col-xs-push-1">
				<?php include('includes/contact-form.php'); ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>