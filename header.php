<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/fab.png"/>
<?php wp_head(); ?>
  </head>

  <body>
    <header <?php if(is_front_page()): ?>id="top-header"<?php endif; ?>>
      <div class="header-wrapper">
        <div class="header-logo">
          <div class="header-logo-a" <?php if(is_front_page()): ?>id="header-logo"<?php endif; ?>>
            <a href="/">RikuDon</a>
          </div>
          <button
            class="nav-btn"
            id="nav-btn"
            type="button"
            aria-label="メニュー"
          >
            <span></span><span></span><span></span>
          </button>
        </div>
        <div class="header-nav">
<?php 
wp_nav_menu(
  array(
    'theme_location' => 'place_header',
    'container' => 'false',
  )
  );
?>
        </div>
        <div class="header-twitter">
          <a>
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </div>

      <div id="page-top">
        <i class="fas fa-arrow-circle-up"></i>
      </div>
      <div class="language-switcher">
<?php echo do_shortcode('[gtranslate]'); ?>
      </div>
    </header>