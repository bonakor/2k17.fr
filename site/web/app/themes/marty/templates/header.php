<header class="banner fixed-header">
<nav class="container">
<figure class="menu toggle-button"><svg><?php get_template_part( 'assets/svg/inline', 'menu_icon.svg' ); ?></svg></figure>
<figure class="logo hidden-md-down">
<a href="/" rel="home"><img src="<?= get_template_directory_uri() . '/assets/images/2k17_logo.png'; ?>" class="img-fluid" title='logo 2K17' alt='logo 2K17'></a>
</figure>
<a class="nav-link first" href="https://www.facebook.com/2K17-381390085538284/?fref=ts">
  <i class="fa fa-facebook" aria-hidden="true"></i>
  <span class="sr-only">Notre page Facebook</span>
</a>
<a class="nav-link" href="https://www.facebook.com/2K17-381390085538284/?fref=ts"><figure><svg><?php get_template_part( 'assets/svg/inline', 'facebook-messenger.svg' ); ?></svg></figure><span class="sr-only">Hermione, notre bot messenger</span></a>
<a class="nav-link" href="https://twitter.com/2k17_official">
  <i class="fa fa-twitter" aria-hidden="true"></i>
  <span class="sr-only">Notre Twitter</span>
</a>
</nav>
<div class="share-button">
  <input class="toggle-input" id="toggle-input" type="checkbox" />
  <label for="toggle-input" class="toggle"></label>
  <ul class="network-list">
    <li class="twitter">
      <a href="http://twitter.com/intent/tweet/?text=<?php echo esc_html( get_the_title() ); ?>&url=<?php echo esc_url( get_the_permalink() ); ?>&via=2k17_official" class="twitter" data-size="large" target="_blank">Twitter</a>
    </li>
    <li class="facebook">
<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_the_permalink() ); ?>" class="facebook" target="_blank">Share on Facebook</a>
    </li>
    <li class="googleplus">
      <a href="#">Share on Google+</a>
    </li>
  </ul>
</div>
</header>
<nav id="menu">
<h2>Menu</h2>
</nav>
