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
			<div class="col-xs-7">
				<?php the_content(); ?>
				<h3>Frequently Asked Questions</h3>
				<?php include('includes/faq-accordion.php'); ?>
			</div>
			<div class="col-xs-4 col-xs-push-1">
				<?php include('includes/contact-form.php'); ?>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
get_footer(); ?>