<?php
	$query = new WP_Query(array('post_type'=>'faqs', 'posts_per_page'=>-1));
	$faqIndex = 0;
	if($query->have_posts()):
?>
<div class="panel-group" id="faq-accordion">
	<?php while ($query->have_posts()): $query->the_post(); ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#faq-accordion" href="#collapse-<?= $faqIndex; ?>">
          <?php the_title(); ?>
        </a>
      </h4>
    </div>
    <div id="collapse-<?= $faqIndex; ?>" class="panel-collapse collapse <?= ($faqIndex == 0) ? 'in' : ''; ?>">
      <div class="panel-body">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
	<?php
	$faqIndex++;
	endwhile; ?>
</div> 
<?php endif; wp_reset_postdata();?>