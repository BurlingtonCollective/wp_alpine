<div id="testimonial-subnav" class="well">
	<h4>Testimonial Categories</h4>
	<ul class="nav nav-stacked">
	<?php
	$tax_terms = get_terms('testimonial-category');
	foreach($tax_terms as $tax_term){
		echo '<li>'.'<a href="'.esc_attr(get_term_link($tax_term, 'testimonial-category')).'">'.$tax_term->name.'</a></li>';
	}
	?>
	</ul>
</div>