<header class="page-header card">
  <figure class="avatar-container">
  <?php echo get_avatar( get_the_author_meta( 'ID' ), '800', '', '', array('class' => 'cover-archive-author')); ?>
  </figure>
<div class="card-img-overlay image-une">
  <?php
   $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
   ?>
<div class="metas">
   <h1><?php echo $curauth->nickname; ?></h2>
   <h2><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></h2>
<a href="<?php the_field('lien_twitter'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</div>
</div>

</header>
