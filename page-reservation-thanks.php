<?php
/* Template Name: 予約(Thanks)*/
?>

<?php get_header(); ?>

<?php
$sub_title = "RESERVATION";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<section class="l-thanks">
  <div class="l-inner p-thanks__inner">
    <p class="p-thanks__text">
      WEBよりご予約いただき誠にありがとうございます。<br>
      送信いただいた内容を確認して1営業日以内に返信いたします。<br>
      <span class="p-thanks__text--attention">
        ※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
      </span>
    </p>
  </div>
</section>

<?php get_footer(); ?>