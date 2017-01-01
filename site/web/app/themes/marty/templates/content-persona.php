<?php get_template_part('templates/fil-ariane'); ?>
<div class="chapeau"><p><?php the_field('chapeau')?></p></div>
<div class="entry-content"><?php the_content(); ?>
  <div class="personnages-concernes"><?php

  // check if the flexible content field has rows of data
  if( have_rows('personnages_concernes') ):

       // loop through the rows of data
      while ( have_rows('personnages_concernes') ) : the_row();

          if( get_row_layout() == 'personnage_concerne' ): //début du loop du repeater ?>
          <div class="perso"><?php

        	get_template_part( 'templates/fiche-perso' ); ?>
          <div class="element-perso"><?php the_sub_field('elements_personnage'); ?>
        </div></div>

<?php
     endif; //Fin du loop du repeater

      endwhile;

  else :

      // no layouts found

  endif;

  ?></div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
