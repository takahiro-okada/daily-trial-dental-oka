<?php
/* Template Name: 予約*/
?>

<?php get_header(); ?>

<?php
$sub_title = "RESERVE";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<section class="l-reservation p-reservation">
  <div class="l-inner p-reservation__inner">
    <div class="p-reservation__heading p-reservation-heading">
      <div class="p-reservation-heading__tel">
        <h3 class="p-reservation-heading__title">お電話でのご予約/ご相談</h3>
        <div class="p-reservation-heading__info">
          <div class="p-working-info__tel"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/icon-tel.svg" alt="ロゴ">03-1234-5678</div>
          <div class="p-working-info__time">(年中無休 AM9:00〜PM22:00)</div>
        </div>
        <p class="p-reservation-heading__text">
          お急ぎの方は電話での連絡がスムーズです。<br>
          混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
          あらかじめご了承ください。
        </p>
      </div>
      <div class="p-reservation-heading__email">
        <h3 class="p-reservation-heading__title">メールでのご予約/ご相談</h3>
        <p class="p-reservation-heading__text u-mt-20">
          【ご予約に関しての注意点】<br>
          メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
          ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
        </p>
      </div>
    </div>

    <?php echo do_shortcode('[contact-form-7 id="228" title="WEB予約"]') ?>
   
  </div>
</section>


<?php get_footer(); ?>