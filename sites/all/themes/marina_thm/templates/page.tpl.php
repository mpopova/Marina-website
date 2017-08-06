<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 * @ingroup templates
 */
?>
<header id="navbar" role="banner">
  <div class="container">
    <div class="navbar-header">
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    </div>
      <div class="navbar-collapse collapse" id="navbar-collapse">
        <nav role="navigation">
            <?php print render($primary_nav); ?>
        </nav>
      </div>
  </div>
</header>

<content>
  <div class="container">
     <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
        
      <?php print $messages; ?>
        
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
  
       <?php print render($page['content']); ?>
  </div>
</content>

  <footer class="footer">
      <div class="container ">
          <div class="copyright">
            Copyright © 2017 | <a href="mailito:marina_it@abv.bg">Marina Popova</a>
          </div>
      </div>
  </footer>
