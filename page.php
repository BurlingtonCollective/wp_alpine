<?php
get_header();
if(have_posts()): while(have_posts()): the_post();
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
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
get_footer();
?>