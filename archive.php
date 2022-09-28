<?php
/* Template Name: ブログ一覧*/
?>


<?php get_header(); ?>

<div class="p-sub-mv" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/img/archive/archive_top.jpeg)" alt="スタッフブログ">
  <div class="p-sub-mv__contents">
    <h2 class="p-sub-mv__title">スタッフブログ</h2>
    <p class="p-sub-mv__subtitle">STAFF BLOG</p>
  </div>
</div>

<div class="l-inner l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<div class="p-archive">
  <div class="l-inner">
    <div class="p-archive__wrapper">
      <div class="p-archive__contents">
        <div class="p-archive__list">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <article class="p-archive__article p-article">
                <a class="p-article__link" href="<?php the_permalink() ?>">

                  <?php
                  if (is_new()) {
                    echo '<span class="p-article__new-tag">NEW</span>';
                  }
                  ?>
                  <div class="p-article__image">

                    <?php the_post_thumbnail('thumbnail'); ?>
                  </div>
                  <div class="p-article__body">
                    <?php
                    if ($terms = get_the_terms($post->ID, 'blog-category')) {
                      echo '<span class="p-article__tag">' . $terms[0]->name . '</span>';
                    }
                    ?>
                    <?php if (wp_is_mobile()) : ?>
                      <div class="p-article__title"><?php echo wp_trim_words(get_the_title(), 25, '...'); ?></div>
                    <?php else : ?>
                      <div class="p-article__title"><?php echo wp_trim_words(get_the_title(), 40, '...'); ?></div>
                    <?php endif; ?>
                    <date class="p-article__date"> <?php the_time('Y.m.d'); ?></date>
                  </div>
                </a>
              </article>
          <?php endwhile;
          endif; ?>
          <?php get_template_part('./template-parts/pagination') ?>
        </div>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>