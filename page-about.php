<?php
/* Template Name: 当院について*/
?>

<?php get_header(); ?>

<?php
$sub_title = "ABOUT OUR CLINIC";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<div class="p-sub-about__title">
  <h2 class="c-section-title">ポリシーと特徴</h2>
</div>


<!-- featured -->
<section class="l-featured p-featured">
  <div class="p-featured__inner">
    <div class="p-featured__contents">
      <div class="p-featured__body p-featured-body">
        <span class="p-featured-body__sub-title">POLICY</span>
        <h2 class="p-featured-body__title">コミュニケーションから始まる最適な医療提供</h2>
        <p class="p-featured-body__desc">
          当院ではまず患者様から詳しくお話を伺います。<br>
          難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。<br>
          <br>
          「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。
        </p>
      </div>
      <div class="p-featured__image">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/about/about-feature_1.png" alt="歯科医師が治療中">
      </div>
    </div>
  </div>
</section>

<section class="l-featured--second">
  <div class="p-featured__inner">
    <div class="p-featured__contents p-featured__contents--reverse">
      <div class="p-featured__body p-featured__body--reverse">
        <span class="p-featured-body__sub-title">FEATURE</span>
        <h2 class="p-featured-body__title">「医療技術の追求」と<br>「通いやすさ」</h2>
        <p class="p-featured-body__desc">
          歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。<br>
          また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。<br>
          <br>
          朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。
        </p>
      </div>
      <div class="p-featured__image p-featured__image--reverse">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/about/about-feature_2.png" alt="院内の写真">
      </div>
    </div>
  </div>
</section>

<section class="p-about-situation" id="about-situation">
  <div class="p-about-situation__inner l-inner">
    <div class="p-about-situation__title">
      <h2 class="c-section-title">院内の様子</h2>
      <div class="p-about-situation__list">
        <div class="p-about-situation__item">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/about/about-situation_1.png" alt="院内の様子">
        </div>
        <div class="p-about-situation__item">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/about/about-situation_2.png" alt="院内の様子">
        </div>
        <div class="p-about-situation__item">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/about/about-situation_3.png" alt="院内の様子">
        </div>
        <div class="p-about-situation__item">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/about/about-situation_4.png" alt="院内の様子">
        </div>
        <div class="p-about-situation__item">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/about/about-situation_5.png" alt="院内の様子">
        </div>
        <div class="p-about-situation__item">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/about/about-situation_6.png" alt="院内の様子">
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>