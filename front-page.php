<?php get_header(); ?>

<main class="l-main">
  <!-- slider -->
  <section class="p-slider">
    <div class="p-slider__inner js-slider">
      <div class="p-slider__content">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-pc_01.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-sp_01.jpg" alt="院内の様子">
        </picture>
      </div>
      <div class="p-slider__content">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-pc_02.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-sp_02.jpg" alt="院内の様子">
        </picture>
      </div>
      <div class="p-slider__content">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-pc_03.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-sp_03.jpg" alt="院内の様子">
        </picture>
      </div>
    </div>
    <div class="p-slider__text">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/top-text.svg" alt="街の皆さまの笑顔を守る。アットホームな歯医者さん">
    </div>
  </section>


  <!-- top -->
  <section class="p-top">
    <div class="p-top__inner">
      <div class="p-top__news p-top-news">
        <div class="p-top-news__wrapper">
          <h2 class="p-top-news__title">お知らせ<span class="p-top-news__title--en">NEWS</span></h2>
          <a class="p-top-news__link" href="<?php echo home_url(); ?>/news">過去のお知らせはこちら</a>
        </div>

        <?php
        $news_query = array(
          'post_type' => 'post',
          'orderby' => "date",
          'order' => 'DESC',
          'posts_per_page' => 1,
        );
        $the_query = new WP_Query($news_query);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a class="p-top-news__post p-top-news-post" href="<?php the_permalink() ?>">
              <date class="p-top-news-post__date"><? the_date('Y.m.d') ?></date>
              <h3 class="p-top-news-post__title"><?php echo mb_substr($post->post_title, 0, 12) . '...'; ?></h3>
            </a>
          <?php endwhile ?>
        <?php else : ?>
          <a class="p-top-news__post p-top-news-post">
            <h3 class="p-top-news-post__title">まだ投稿はありません。。。</h3>
          </a>
        <?php endif; ?>

      </div>
      <div class="p-top__info">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/calendar.png" alt="カレンダー">
      </div>
    </div>
  </section>

  <!-- featured -->
  <section class="l-featured p-featured">
    <div class="p-featured__inner">
      <div class="p-featured__contents">
        <div class="p-featured__body p-featured-body">
          <span class="p-featured-body__sub-title">CONCEPT</span>
          <h2 class="p-featured-body__title">健康的で素敵な笑顔あふれる<br>街づくりを目指して</h2>
          <p class="p-featured-body__desc">
            私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
            お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
          </p>
          <div class="p-featured-body__button">
            <a href="<?php echo home_url(); ?>/about" class="c-button c-button--white c-button--arrow">当院について</a>
          </div>
        </div>
        <div class="p-featured__image">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-concept-img-pc.png" alt="治療中の歯科医師">
        </div>
      </div>
    </div>
  </section>

  <section class="l-recommend p-recommend">
    <div class="l-inner">
      <div class="p-recommend__title">
        <h2 class="c-section-title">当院の3つのおすすめ</h2>
      </div>
      <ul class="p-recommend__list">
        <li class="p-recommend__item p-recommend-item">
          <h3 class="p-recommend-item__title"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-1.png" alt="おすすめ1"></h3>
          <div class="p-recommend-item__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-img-01.png" alt="歯のアイコン"></div>
          <p class="p-recommend-item__desc">歯の治療において、小さな違和感は大きなストレスにつながります。<br>私たちは常に快適な歯科医療技術の研究を行っております。</p>
        </li>
        <li class="p-recommend__item p-recommend-item">
          <h3 class="p-recommend-item__title"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-2.png" alt="おすすめ2"></h3>
          <div class="p-recommend-item__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-img-02.png" alt="駅のアイコン"></div>
          <p class="p-recommend-item__desc">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
        </li>
        <li class="p-recommend__item p-recommend-item">
          <h3 class="p-recommend-item__title"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-3.png" alt="おすすめ3"></h3>
          <div class="p-recommend-item__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-img-03.png" alt="時計のアイコン"></div>
          <p class="p-recommend-item__desc">朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
            <span class="p-recommend-item__desc--emphasis">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
          </p>
        </li>
      </ul>
    </div>
  </section>

  <section class="l-plan p-plan">
    <div class="l-plan--deco-top"></div>
    <div class="p-plan__bg">
      <div class="p-plan__inner l-inner">
        <div class="p-plan__title">
          <h2 class="c-section-title">診療案内</h2>
        </div>
        <div class="p-plan__list">
          <div class="p-plan__item p-plan-item">
            <div class="p-plan-item__line">
              <div class="p-plan-item__text">
                <div class="p-plan-item__title">一般診療</div>
                <div class="p-plan-item__desc">虫歯・入れ歯・小児歯科</div>
              </div>
            </div>
          </div>
          <div class="p-plan__item p-plan-item">
            <div class="p-plan-item__line">
              <div class="p-plan-item__text">
                <div class="p-plan-item__title">特殊診療</div>
                <div class="p-plan-item__desc">インプラント・ホワイトニング<br>
                  予防歯科・口腔外科・審美歯科</div>
              </div>
            </div>
          </div>
        </div>
        <p class="p-plan__content">
          当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>
          痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br>
          <span class="u-color--emphasis">※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
        </p>
      </div>
    </div>
    <div class="l-plan--deco-bottom"></div>
  </section>

  <section class="l-blog p-blog">
    <div class="p-blog__inner l-inner">
      <div class="p-blog__title">
        <h2 class="c-section-title">スタッフブログ</h2>
      </div>
      <ul class="p-blog__cards">
        <?php
        $news_query = array(
          'post_type' => 'blog',
          'orderby' => "date",
          'order' => 'DESC',
          'posts_per_page' => 6,
        );
        $the_query = new WP_Query($news_query);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="p-blog__card p-blog-card">
              <a href="<?php ?>" class="p-blog-card__link">

                <?php
                $days = 3;
                $now = date_i18n('U');
                $entry = get_the_time('U');
                $term = date('U', ($now - $entry)) / 86400;
                if ($days > $term) {
                  echo '<span class="p-blog-card__newtag">NEW</span>';
                }
                ?>

                <div class="p-blog-card__thum">
                  <div class="p-blog-card__image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($the_query->id)) ?>" alt="<?php get_post_meta($attachimentID, '_wp_attachment_image_alt', true); ?>">
                  </div>
                </div>
                <div class="p-blog-card__body">
                  <span class="p-blog-card__tag c-tag">お知らせ</span>
                  <h3 class="p-blog-card__title">
                    <?php
                    if (mb_strlen($post->post_title) > 20) {
                      $title = mb_substr($post->post_title, 0, 20);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </h3>
                  <date class="p-blog-card__date"><? the_date('Y.m.d ') ?></date>
                </div>
              </a>
            </li>
          <?php endwhile ?>
        <?php else : ?>
          まだ投稿はありません。
        <?php endif; ?>
      </ul>
      <div class="p-blog__button">
        <a href="<?php echo home_url(); ?>/blog" class="c-button">スタッフブログ一覧はこちら</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>