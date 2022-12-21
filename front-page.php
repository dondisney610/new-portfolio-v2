<?php get_header(); ?>

    <section class="section-contents" id="top">
      <h1>Riku Oyamaguchi's Portforio</h1>
    </section>
    <section id="greeting" class="top-section-container">
      <p>初めまして！大山口吏紅と申します。</p>
      <br />
      <p>「質」と「スピード」を重視することで、</p>
      <p>期待以上のものを提供させていただきます。</p>
      <br />
      <p>また、クライアント様に寄り添った</p>
      <p>丁寧なコミュニケーションを常に心がけ、</p>
      <p>最後まで責任を持って、仕事に取り組ませていただきます。</p>
      <div class="button">
        <a href="/about">ABOUT ME ＞ </a>
      </div>
    </section>
    <section id="service" class="top-section-container">
      <div class="heading">
        <h2>Service</h2>
        <div class="under-bar"></div>
      </div>
      <div class="service-boxes" data-aos="fade">
        <div class="service-box">
          <h2>コーディング</h2>
          <div class="service-icon">
            <i class="fas fa-code"></i>
          </div>
          <div class="service-text">
            <p class="service-p">
              LPやコーポレートサイト、ブログなど、
              目的に応じた適切なコーディングを行います。<br />
              スマートフォン等のデバイスに適切に表示させるレスポンシブ対応も可能です。
              <br />
              既存サイトの微修正や、Vanilla
              JavaScriptやjQueryを用いたアニメーションの導入も得意としております。
            </p>
          </div>
        </div>
        <div class="service-box">
          <h2>サイト運用サポート</h2>
          <div class="service-icon">
            <i class="fas fa-laptop"></i>
          </div>
          <div class="service-text">
            <p class="service-p">
              管理画面の操作方法がわからない、プラグインを導入して機能を追加したい、既存システムに変更を加えたいというようなお悩みはございませんでしょうか。<br />
              こちらではすでに運用されているサイトの運用サポートも承っております。<br />
              どんな些細なことでも、まずは一度ご相談ください！
            </p>
          </div>
        </div>
        <div class="service-box">
          <h2>ECサイト構築</h2>
          <div class="service-icon">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <div class="service-text">
            <p class="service-p">
              Shopifyを用いて、ECサイトの構築代行をお引き受けます。<br />
              構築後は諸設定や運営方法の解説資料もご用意し、安心して運営していただける環境を提供します。
              <br />
              追加機能やデザインのカスタマイズは、アプリやコーディングを用いて実装させていただきます。
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="works">
      <div class="heading">
        <h2>WORKS</h2>
        <div class="under-bar"></div>
      </div>
      <ul class="works-boxes">
<?php
$query_args = array(
    'post_atatus' => 'publish',
    'post_type' => 'post',
    'order' => 'DESC',
    'posts_per_page' => 3,
);

$the_query = new WP_Query($query_args);
if($the_query->have_posts()):
    while($the_query->have_posts()):
        $the_query->the_post();

$cat = get_the_category();
$cat_name = $cat[0];
$slug = $cat[0]->category_nicename;
?>
        <li class="works-box">
          <a href="<?php the_permalink(); ?>">
            <div class="works-box-category">
              <p class="<?php if($slug == 'shopify'): ?>shopify<?php elseif($slug == 'wordpress'): ?>wordpress<?php elseif($slug == 'otherec'): ?>otherec<?php endif; ?>"><?php echo get_cat_name($cat_name->term_id); ?></p>
            </div>
            <div class="works-box-title">
              <p><?php the_title(); ?></p>
            </div>
          </a>
        </li>
<?php
    endwhile;
endif;
wp_reset_query();
?>
      </ul>
      <div class="button">
        <a href="/works">VIEW ALL ＞ </a>
      </div>
    </section>
    <section id="customer-reviews" class="top-section-container">
      <div class="heading">
        <h2>CUSTOMER REVIEWS</h2>
        <div class="under-bar"></div>
      </div>
      <div class="customer-reviews-boxes">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ROBINsan-review.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/yukisan-review.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/shopify-review.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/siraisan-review.png" alt="" />
      </div>
      <div class="button">
        <a
          href="https://coconala.com/users/2453340/reviews"
          target="_blank"
          rel="noopener noreferrer"
          >VIEW MORE ＞
        </a>
      </div>
    </section>
<?php get_footer(); 