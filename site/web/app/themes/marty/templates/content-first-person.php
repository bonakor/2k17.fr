<?php get_template_part('templates/fil-ariane'); ?>
<div class="chapeau"><p><?php the_field('chapeau')?></p></div>
<div clas="entry-content"><?php the_content(); ?></div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
