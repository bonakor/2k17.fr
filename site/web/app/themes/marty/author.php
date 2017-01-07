<?php /* Template pour les pages auteurs */ ?>
<?php get_template_part('templates/archive', 'author-top'); ?>
<section class="author-posts">
  <h2>Ses productions</h2>
  <div class="list-posts">
    <?php
$author = get_the_author_meta('ID');
echo do_shortcode('[ajax_load_more seo="true" posts_per_page="2" cache="true" cache_id="7466201738" preloaded="true" preloaded_amount="2" seo="true" repeater="template_2" button_label="Plus de contenus" button_loading_label="Chargement" author="'.$author.'"]');
?></div>
</section>
