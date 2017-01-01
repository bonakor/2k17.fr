<?php get_template_part('templates/fil-ariane'); ?>
<div class="chapeau"><p><?php the_field('chapeau')?></p></div>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
