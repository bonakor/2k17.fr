<?php
 $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
 $author_id = get_the_author_meta('ID');
 ?>
<header class="page-header">
  <div class="container-author">
  <figure class="avatar-container">
<?php

    $image = get_field('image_page_auteur', 'user_'. $author_id );

    if( !empty($image) ): ?>

    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <?php endif; ?>
  </figure>
<div class="metas">
   <h1><?php echo $curauth->nickname; ?></h2>
   <h2><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></h2>
<a href="<?php the_field('lien_twitter', 'user_'. $author_id ); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</div>
</div>

</header>
