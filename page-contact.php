<?php
/* Template Name: お問い合わせ*/
?>

<?php get_header(); ?>

<?php
$sub_title = "CONTACT";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<div class="p-contact-heading l-contact-heading">
  <div class="p-contact-heading__inner l-inner">
    <p class="p-contact-heading__text">
      お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>
      以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>
      また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
      <span class="p-contact__heading--attention">
        ※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
      </span>
    </p>
  </div>
</div>

<div class="p-contact-contents l-contact-contents">
  <div class="p-contact-contents__inner l-inner">
    <div class="p-contact-contents__title">
      <div class="c-section-title">お問い合わせフォーム</div>
    </div>

    <div class="p-contact-contents__form c-form">
      <?php echo do_shortcode('[contact-form-7 id="227" title="default contact"]') ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>