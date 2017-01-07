<?php get_template_part('templates/archive', 'top'); ?>
<section class="category-posts">
<div class="list-posts">
  <?php
  $cat = get_query_var('cat');
  $category = get_category ($cat);
  echo do_shortcode('[ajax_load_more seo="true" category="'.$category->slug.'" posts_per_page="2" cache="true" cache_id="7468670983" preloaded="true" preloaded_amount="2" seo="true" repeater="template_1" button_label="Plus de contenus" button_loading_label="Chargement"]');
  ?>
</div></section>
