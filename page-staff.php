<?php
/* Template Name: スタッフ紹介*/
?>

<?php get_header(); ?>

<?php
$sub_title = "STAFF";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<section class="l-sub-staff__greeting p-greeting">
  <div class="l-inner">
    <div class="p-greeting__title">
      <h2 class="c-section-title">院長のあいさつ</h2>
    </div>
    <div class="p-greeting__contents">
      <div class="p-greeting__body p-greeting-body">
        <h3 class="p-greeting-body__title">気軽に相談できる<br>街の歯医者さんでありたい。</h3>
        <div class="p-greeting-body__text">
          <p>
            当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。<br>
          </p>
          <p>
            「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
          </p>
        </div>
        <div class="p-greeting-body__name">みなみ歯科クリニック<br>院長　南 俊雄</div>

        <div class="p-greeting__image u-pc-hidden">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/staff/staff1.jpg" alt="院長　南 俊雄">
        </div>

        <div class="p-greeting__infos">
          <div class="p-greeting-info">
            <div class="p-greeting-info__title">経歴</div>
            <table class="p-greeting-table">
              <tr>
                <th>2004年</th>
                <td>東京医科歯科大学歯学部 卒業</td>
              </tr>
              <tr>
                <th>2008年</th>
                <td>東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</td>
              </tr>
              <tr>
                <th>2012年</th>
                <td>みなみ歯科クリニック 開院</td>
              </tr>
            </table>
          </div>
          <div class="p-greeting-info">
            <div class="p-greeting-info__title">資格</div>
            <table class="p-greeting-table">
              <tr>
                <th>歯科医師臨床研修指導歯科医</th>
              </tr>
              <tr>
                <th>博士(歯学)</th>
              </tr>
              <tr>
                <th>衛生検査技師</th>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="p-greeting__image u-sp-hidden">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/staff/staff1.jpg" alt="院長　南 俊雄">
      </div>
    </div>
  </div>
</section>

<section class="p-staff-slider">
  <div class="js-staff-slider">
    <div class="p-staff-slider__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/staff/staff-slider-1.jpg" alt="治療中の写真"></div>
    <div class="p-staff-slider__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/staff/staff-slider-2.jpg" alt="治療中の写真"></div>
    <div class="p-staff-slider__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/staff/staff-slider-3.jpg" alt="治療中の写真"></div>
    <div class="p-staff-slider__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/staff/staff-slider-4.jpg" alt="治療中の写真"></div>
    <div class="p-staff-slider__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/staff/staff-slider-5.jpg" alt="治療中の写真"></div>
  </div>
</section>

<!-- Logic -->
<?php
$dental_hygienist_posts = array();
$args = array(
  'post_type' => 'staffs',
  'post_status' => 'publish',
  'order' => 'DESC',
  'tax_query' => array(
    array(
      'taxonomy' => 'job_category',
      'field' => 'slug',
      'terms' => 'dental-hygienist'
    )
  )
);
$dental_hygienist_query = new WP_Query($args);
if ($dental_hygienist_query->have_posts()) : while ($dental_hygienist_query->have_posts()) : $dental_hygienist_query->the_post();
    $dental_hygienist_items = array(
      'id' => get_the_ID(),
      'title' => get_the_title(),
      'content' => get_the_content(),
      'image' => get_the_post_thumbnail(get_the_ID(), 'large'),
      'meta_area' => post_custom('area'),
      'meta_hobby' => post_custom('hobby'),
      'meta_favorite_food' => post_custom('favorite_food'),
    );
    $dental_hygienist_posts[] = $dental_hygienist_items;
  endwhile;
endif;
wp_reset_postdata();
?>
<?php
$dental_assistant_posts = array();
$args = array(
  'post_type' => 'staffs',
  'post_status' => 'publish',
  'order' => 'DESC',
  'tax_query' => array(
    array(
      'taxonomy' => 'job_category',
      'field' => 'slug',
      'terms' => 'dental-assistant'
    )
  )
);
$dental_assistant_query = new WP_Query($args);
if ($dental_assistant_query->have_posts()) : while ($dental_assistant_query->have_posts()) : $dental_assistant_query->the_post();
    $dental_assistant_items = array(
      'id' => get_the_ID(),
      'title' => get_the_title(),
      'content' => get_the_content(),
      'image' => get_the_post_thumbnail(get_the_ID(), 'large'),
      'image_meta' => get_post_meta(get_the_ID(), '_wp_attachment_image_alt', true),
      'meta_area' => post_custom('area'),
      'meta_hobby' => post_custom('hobby'),
      'meta_favorite_food' => post_custom('favorite_food'),
    );
    $dental_assistant_posts[] = $dental_assistant_items;
  endwhile;
endif;
wp_reset_postdata();
?>

<section class="p-staff-members">
  <div class="l-inner">
    <div class="p-staff-members__title">
      <h2 class="c-section-title">スタッフ紹介</h2>
    </div>
    <div class="p-staff-members__content">
      <h3 class="p-staff-members__profession">歯科衛生士</h3>
      <ul class="p-staff-members__items">
        <?php foreach ($dental_hygienist_posts as $dental_hygienist) : setup_postdata($dental_hygienist) ?>
          <li class="p-staff-members__item p-staff-card">
            <div class="p-staff-card__image">
              <?php echo $dental_hygienist['image'] ?>
            </div>
            <div class="p-staff-card__heading">
              <span class="p-staff-card__charge">歯科衛生士</span>
              <span class="p-staff-card__name"><?php echo $dental_hygienist['title'] ?></span>
            </div>
            <dl class="p-staff-card__info">
              <dt class="p-staff-card__info-left">出身地</dt>
              <dt class="p-staff-card__info-right"><?php echo $dental_hygienist['meta_area'] ?></dt>
              <dt class="p-staff-card__info-left">趣味</dt>
              <dt class="p-staff-card__info-right"><?php echo $dental_hygienist['meta_hobby'] ?></dt>
              <dt class="p-staff-card__info-left">好きな食べ物</dt>
              <dt class="p-staff-card__info-right"><?php echo $dental_hygienist['meta_favorite_food'] ?></dt>
            </dl>
          </li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>

    <div class="p-staff-members__content">
      <h3 class="p-staff-members__profession">歯科助手</h3>
      <ul class="p-staff-members__items">
        <?php foreach ($dental_assistant_posts as $dental_assistant) : setup_postdata($dental_assistant) ?>
          <li class="p-staff-members__item p-staff-card">
            <div class="p-staff-card__image">
              <?php echo $dental_assistant['image'] ?>
            </div>
            <div class="p-staff-card__heading">
              <span class="p-staff-card__charge">歯科衛生士</span>
              <span class="p-staff-card__name"><?php echo $dental_assistant['title'] ?></span>
            </div>
            <dl class="p-staff-card__info">
              <dt class="p-staff-card__info-left">出身地</dt>
              <dt class="p-staff-card__info-right"><?php echo $dental_assistant['meta_area'] ?></dt>
              <dt class="p-staff-card__info-left">趣味</dt>
              <dt class="p-staff-card__info-right"><?php echo $dental_assistant['meta_hobby'] ?></dt>
              <dt class="p-staff-card__info-left">好きな食べ物</dt>
              <dt class="p-staff-card__info-right"><?php echo $dental_assistant['meta_favorite_food'] ?></dt>
            </dl>
          </li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>