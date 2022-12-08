<?php get_header(); ?>

    <h1 class="page-name">WORKS</h1>
    <div id="workspage">
      <ul>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$the_query = new WP_Query( array(
      'post_status'    => 'publish',
      'post_type'      => 'post',
      'paged'          => $paged,
      'posts_per_page' => 10,
      'orderby'        => 'date',
      'order'          => 'DESC'
        ) );
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
?>
        <li class="workspage-works-box">
          <a href="<?php the_permalink(); ?>">
            <div class="workspage-works-box-category">
<?php
$cat_articles = get_the_category();
$cat_name_articles = $cat_articles[0];
$slug_articles = $cat_articles[0]->category_nicename;
?>
              <p class="<?php if($slug_articles == 'shopify'): ?>shopify<?php elseif($slug_articles == 'wordpress'): ?>wordpress<?php elseif($slug_articles == 'otherec'): ?>otherec<?php endif; ?>"><?php echo get_cat_name($cat_name_articles->term_id); ?></p>
            </div>
            <div class="workspage-works-box-title">
              <p><?php the_title(); ?></p>
            </div>
          </a>
        </li>
<?php
    endwhile;
    else:
        echo '<div><p>記事はありません。</p></div>';
    endif;
?>
      </ul>
      <div class="works-pager">
<?php wp_pagenavi(array('query' => $the_query)); ?>
      </div>
    </div>

<?php get_footer(); 