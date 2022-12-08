<?php if(!is_page('contact')): ?>
    <section id="contact">
      <div class="contact-area">
        <div class="heading">
          <h2>CONTACT</h2>
        </div>
        <p>本サービスに関するお問い合わせは、</p>
        <p>コンタクトフォームよりお願いいたします。</p>
        <div class="button">
          <a href="/contact">問い合わせ ＞ </a>
        </div>
      </div>
    </section>
<?php endif; ?>
    <footer>
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_footer',
    'container' => 'false',
  )
  );
?>
      <p><a href="privacy-policy">プライバシーポリシー</a></p>
      <small>&copy; Riku Oyamaguchi All rights reserved.</small>
    </footer>
<?php wp_footer(); ?>
  </body>
</html>
