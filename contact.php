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
			<div class="col-xs-12 col-sm-6 col-sm-push-6 col-md-4 col-md-push-8">
				<?php include('includes/contact-form.php'); ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-sm-pull-6 col-md-7 col-md-pull-4">
				<?php the_content(); ?>
				<h3>Frequently Asked Questions</h3>
				<?php include('includes/faq-accordion.php'); ?>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
get_footer(); ?>