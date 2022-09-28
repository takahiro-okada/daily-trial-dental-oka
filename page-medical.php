<?php
/* Template Name: 診療案内*/
?>

<?php get_header(); ?>

<?php
$sub_title = "MEDICAL";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<!-- Logic -->
<?php
$general_posts = array();
$args = array(
  'post_type' => 'plan',
  'post_status' => 'publish',
  'order' => 'DESC',
  'tax_query' => array(
    array(
      'taxonomy' => 'plan-category',
      'field' => 'slug',
      'terms' => 'general'
    )
  )
);
$general_query = new WP_Query($args);
if ($general_query->have_posts()) : while ($general_query->have_posts()) : $general_query->the_post();
    $general_items = array(
      'id' => get_the_ID(),
      'title' => get_the_title(),
      'content' => get_the_content(),
      'image' => get_the_post_thumbnail(get_the_ID(), 'large'),
      'meta_lead' => post_custom('medical_lead'),
      'meta_text' => post_custom('medical_text'),
    );
    $general_posts[] = $general_items;
  endwhile;
endif;
wp_reset_postdata();
?>

<?php
$special_posts = array();
$args = array(
  'post_type' => 'plan',
  'post_status' => 'publish',
  'order' => 'DESC',
  'tax_query' => array(
    array(
      'taxonomy' => 'plan-category',
      'field' => 'slug',
      'terms' => 'special'
    )
  )
);
$special_query = new WP_Query($args);
if ($special_query->have_posts()) : while ($special_query->have_posts()) : $special_query->the_post();
    $special_items = array(
      'id' => get_the_ID(),
      'title' => get_the_title(),
      'content' => get_the_content(),
      'image' => get_the_post_thumbnail(get_the_ID(), 'large'),
      'meta_lead' => post_custom('medical_lead'),
      'meta_text' => post_custom('medical_text'),
    );
    $special_posts[] = $special_items;
  endwhile;
endif;
wp_reset_postdata();
?>
<!-- End Logic -->

<section class="l-sub-medical__toc p-medical-toc">
  <div class="p-medical-toc__inner l-inner">
    <div class="p-medical-toc__contents p-medical-toc-contents">
      <div class="p-medical-toc-contents__heading">
        <h3 class="p-medical-toc-contents__title">一般診療</h3>
        <div class="p-medical-toc-contents__tag p-medical-toc-contents__tag--normal">保険対象</div>
      </div>
      <ul class="p-medical-toc__list">
        <?php foreach ($general_posts as $general_post) : setup_postdata($general_post) ?>
          <li class="p-medical-toc__item"><a href="#general_anchor<?php echo $general_post['id'] ?>" class="p-medical-toc__link"><?php echo $general_post['title'] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="p-medical-toc__contents p-medical-toc-contents">
      <div class="p-medical-toc-contents__heading">
        <h3 class="p-medical-toc-contents__title">特殊診療</h3>
        <div class="p-medical-toc-contents__tag p-medical-toc-contents__tag--special">実費</div>
      </div>
      <ul class="p-medical-toc__list">
        <?php foreach ($special_posts as $special_post) : setup_postdata($special_post) ?>
          <li class="p-medical-toc__item"><a href="#special_anchor<?php echo $special_post['id'] ?>" class="p-medical-toc__link"><?php echo $special_post['title'] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<!-- 一般診療 -->
<section class="l-medical-treatment__normal p-medical-treatment">
  <div class="l-plan--deco-top"></div>
  <div class="p-medical-treatment__inner">
    <div class="l-inner">
      <h2 class="p-medical-treatment__title c-section-title">一般診療</h2>
      <div class="p-medical-treatment__contents">
        <?php foreach ($general_posts as $general_post) : setup_postdata($general_post) ?>
          <div id="general_anchor<?php echo $general_post['id'] ?>" class="p-medical-treatment__body p-medical-treatment-content">
            <div class="p-medical-treatment-content__tag medical-tag medical-tag--general">保険対象</div>
            <div class="p-medical-treatment-content__heading">
              <h3 class="p-medical-treatment-content__title"><?php echo $general_post['title'] ?></h3>
              <span class="p-medical-treatment-content__subtitle"><?php echo $general_post['meta_lead'] ?></span>
            </div>
            <div class="p-medical-treatment-content__body">
              <p class="p-medical-treatment-content__text">
                <?php echo $general_post['meta_text'] ?>
              </p>
              <div class="p-medical-treatment-content__image">
                <div class="c-thumbnail--75">
                  <?php echo $general_post['image'] ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <div class="l-plan--deco-bottom"></div>
</section>

<!-- 特殊診療 -->
<section class="l-medical-treatment__special p-medical-treatment">
  <div class="l-plan--deco-top"></div>
  <div class="p-medical-treatment__inner">
    <div class="l-inner">
      <h2 class="p-medical-treatment__title c-section-title">特殊診療</h2>
      <div class="p-medical-treatment__contents">
        <?php foreach ($special_posts as $special_post) : setup_postdata($special_post) ?>
          <div id="special_anchor<?php echo $special_post['id'] ?>" class="p-medical-treatment__body p-medical-treatment-content">
            <div class="p-medical-treatment-content__tag medical-tag medical-tag--special">実費</div>
            <div class="p-medical-treatment-content__heading">
              <h3 class="p-medical-treatment-content__title"><?php echo $special_post['title'] ?></h3>
              <span class="p-medical-treatment-content__subtitle"><?php echo $special_post['meta_lead'] ?></span>
            </div>
            <div class="p-medical-treatment-content__body">
              <p class="p-medical-treatment-content__text">
                <?php echo $special_post['meta_text'] ?>
              </p>
              <div class="p-medical-treatment-content__image">
                <div class="c-thumbnail--75">
                  <?php echo $special_post['image'] ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <div class="l-plan--deco-bottom"></div>
</section>

<?php get_footer(); ?>