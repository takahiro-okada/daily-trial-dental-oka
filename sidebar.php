<aside class="l-sidenav">
  <!-- sidenav top -->
  <div class="l-sidenav__info p-sidenav-info">
    <h3 class="p-sidenav-info__title c-widget-title c-widget-title--building">クリニックの紹介</h3>
    <div class="p-sidenav-info__image"><img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/widget/widget-profile.jpg'); ?>" alt="院内の様子"></div>
    <div class="p-sidenav-info__name">みなみ歯科クリニック</div>
    <div class="p-sidenav-info__description">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</div>
    <a href="<?php echo home_url(); ?>/about" class="p-sidenav-info__link c-link c-link--arrow">当院について</a>
  </div>

  <!-- sidenav new article -->
  <div class="l-sidenav__articles p-sidenav-articles">
    <h3 class="p-sidenav__common-title c-widget-title c-widget-title--newpost">新着記事</h3>
    <div class="p-sidenav-articles__contents">
      <?php
      // Check news or blog
      $isBlog = false;
      if ("blog" === get_post_type()) {
        $isBlog = true;
      }
      if ($isBlog) {
        $args = array(
          "posts_per_page" => 5,
          "order" => "DESC",
          "post_type" => array('blog')
        );
      } else {
        $args = array(
          "posts_per_page" => 5,
          "order" => "DESC",
        );
      }

      $new_posts_query = new WP_Query($args);
      if ($new_posts_query->have_posts()) :
        while ($new_posts_query->have_posts()) :
          $new_posts_query->the_post();
      ?>
          <a class="p-sidenav-articles__card p-sidenav-article" href="<?php the_permalink() ?>">
            <div class="p-sidenav-new-article__image"><?php the_post_thumbnail('thumbnail'); ?></div>
            <div class="p-sidenav-new-article__body">
              <?php
              if ($isBlog) {
                $terms = get_the_terms($post->ID, 'blog-category');
                foreach ($terms as $term) :
                  $output = '<div class="p-sidenav-new-article__tag">' . $term->name . '</div>';
                  echo $output;
                endforeach;
              } else {
                $categories = get_the_category();
                $first_category_name = $categories[0]->name;
                $output = '<div class="p-sidenav-new-article__tag">' . $first_category_name . '</div>';
                echo  $output;
              }
              ?>
              <div class="p-sidenav-new-article__title"><?php echo mb_substr($post->post_title, 0, 25) . '…'; ?></div>
              <div class="p-sidenav-new-article__date"><?php the_time('Y.m.d'); ?></div>
            </div>
          </a>
      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </div>
  </div>

  <div class="l-sidenav__category p-sidenav-category">
    <h3 class="p-sidenav-info__title c-widget-title c-widget-title--category">カテゴリー</h3>
    <?php
    if (is_archive()) {
      $args = [
        'type' => 'post',
        'taxonomy' => 'blog-category',
      ];
    }
    ?>
    <?php $categoryList = get_categories($args); ?>
    <?php if ($categoryList) : ?>
      <ul class="p-sidenav-category__list">
        <?php foreach ($categoryList as $value) : ?>
          <li class="p-sidenav-category__item">
            <a href="<?= home_url($value->taxonomy . '/' . $value->slug) ?>/" class="p-sidenav-category__link"><?= $value->name ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

  </div>
</aside>