<?php
/*
Template Name: FAQ Page
*/
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h1>About Us</h1>
				</div>
			</div>
		</div>
	</div>	
	<div class="container interior">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-7">
				<?php the_content(); ?>
				<?php include('includes/faq-accordion.php'); ?>
  	  </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-md-push-1">
				<?php include('includes/contact-form.php'); ?>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
get_footer();
?>