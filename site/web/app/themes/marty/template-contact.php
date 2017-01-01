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
    </section>
<section class="contact-form">
<?php echo do_shortcode( '[contact-form-7 id="74" title="Contact form 1"]' ); ?>
</section>
<?php endwhile; ?>
