<?php get_header(); ?>

    <h1 class="page-name">DETAILS</h1>
    <section class="single-content">
      <div class="single-image">
        <img src="<?php echo get_field('thumbnail_of_work'); ?>" alt="" />
      </div>
      <h2><?php echo get_field('cliant_name'); ?></h2>
<?php
$cat_single = get_the_category();
$cat_name_single = $cat_single[0];
$slug_single = $cat_single[0]->category_nicename;
?>
      <div class="single-category <?php if($slug_single == 'shopify'): ?>shopify<?php elseif($slug_single == 'wordpress'): ?>wordpress<?php elseif($slug_single == 'otherec'): ?>otherec<?php endif; ?>"><?php echo get_cat_name($cat_name_single->term_id); ?></div>
      <?php the_content(); ?>
      <div class="single-button">
        <a href="/works">一覧に戻る ＞ </a>
      </div>
    </section>
    
<?php get_footer(); 