<?php

/*
Template Name: Contact
Template Post Type: page
*/ ?>
<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }

    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>
<?php while (have_posts()) : the_post(); ?>
    <section class="contact-top">
      <h1 class="entry-title">On se parle ?</h1>
      <h2>IjsbergPress SAS</h2>
      <div class="contact-pre">
      <div class="d-inline-flex">
        <figure><svg><?php get_template_part( 'assets/svg/inline', 'location.svg' ); ?></svg></figure>
        <p>3 rue le Royer, 69003 Lyon</p>
      </div></br>
      <div class="d-inline-flex">
          <figure><svg><?php get_template_part( 'assets/svg/inline', 'location.svg' ); ?></svg></figure>
          <p>210 rue du Faubourg St Antoine, 75012 Paris</p>
        </div>
      </div>
    </section>
<section class="contact-form">
<? /*php echo do_shortcode( '[contact-form-7 id="22" title="Formulaire de contact 1"]' );*/ ?>
Tu peux nous écrire à sebastien@2k17.fr
</section>
<?php endwhile; ?>
