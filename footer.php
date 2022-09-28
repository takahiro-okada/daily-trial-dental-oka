<div class="l-footer-deco-top"></div>
<footer class="l-footer">
  <div class="l-footer__inner">
    <div class="l-footer__contents p-footer-contents">
      <div class="p-footer-contents__main">
        <div class="p-footer-contents__logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/logo.svg" alt="ロゴ"></div>
        <div class="p-footer-contents__address"><span class="p-footer-contents__zip">〒166-0001</span>東京都杉並区阿佐谷北7-3-1</div>
        <div class="p-working-info p-footer-contents__info">
          <div class="p-working-info__tel"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/icon-tel.svg" alt="TELロゴ">03-1234-5678</div>
          <div class="p-working-info__time">(年中無休 AM9:00〜PM22:00)</div>
        </div>
        <div class="p-footer-contents__buttons">
          <a href="<?php echo home_url(); ?>/reservation" class="p-footer-button p-footer-button--reservation">WEB予約</a>
          <a href="<?php echo home_url(); ?>/contact" class="p-footer-button p-footer-button--contact">お問い合わせ</a>
        </div>
        <div class="p-footer-contents__calendar">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/calendar.png" alt="カレンダー">
        </div>
      </div>
      <div class="p-footer-contents__map">
        <div class="p-footer-contents__iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13302.959424984901!2d38.978565176473246!3d-6.787676950753371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c69cb6a71e2bb%3A0x5cdab6b5812e9fec!2sPangani%20Dormitory!5e0!3m2!1sja!2sjp!4v1654849708433!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      </div>
    </div>

    <nav class="l-footer__nav p-footer-nav">
      <div class="p-footer-nav__contents">
        <div class="p-footer-nav__heading">TOP</div>
      </div>
      <div class="p-footer-nav__contents">
        <div class="p-footer-nav__heading">当院について</div>
        <ul class="p-footer-nav__list">
          <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/about" class="p-footer-nav__link">ポリシーと特徴</a></li>
          <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/about#about-situation" class="p-footer-nav__link">当院の様子</a></li>
        </ul>
      </div>
      <div class="p-footer-nav__contents">
        <div class="p-footer-nav__heading">スタッフ紹介</div>
        <ul class="p-footer-nav__list">
          <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/staff" class="p-footer-nav__link">院長のあいさつ</a></li>
          <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/staff" class="p-footer-nav__link">スタッフ</a></li>
          <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/blog" class="p-footer-nav__link">スタッフブログ</a></li>
        </ul>
      </div>
      <div class="p-footer-nav__contents">
        <div class="p-footer-nav__heading">診療内容</div>
        <div class="p-footer-nav__list-wrapper">
          <ul class="p-footer-nav__list">
            <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/medical/#general_anchor56" class="p-footer-nav__link">一般歯科</a></li>
            <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/medical/#general_anchor85" class="p-footer-nav__link">小児歯科</a></li>
            <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/medical/#general_anchor89" class="p-footer-nav__link">予防歯科</a></li>
            <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/medical/#general_anchor96" class="p-footer-nav__link">入れ歯</a></li>
          </ul>
          <ul class="p-footer-nav__list p-footer-nav__list-second">
            <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/medical/#special_anchor100" class="p-footer-nav__link">矯正歯科</a></li>
            <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/medical/#special_anchor105" class="p-footer-nav__link">ホワイトニング</a></li>
            <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/medical/#special_anchor109" class="p-footer-nav__link">口腔外科</a></li>
            <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/medical/#special_anchor128" class="p-footer-nav__link">レーザー治療</a></li>
          </ul>
        </div>
      </div>
      <div class="p-footer-nav__contents">
        <div class="p-footer-nav__heading">お問い合わせ</div>
        <ul class="p-footer-nav__list">
          <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/contact" class="p-footer-nav__link">お問い合わせフォーム</a></li>
          <li class="p-footer-nav__item"><a href="<?php echo home_url(); ?>/reservation" class="p-footer-nav__link">WEB予約</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="l-copy-right">
    <span class="l-copy-right__text">©︎2020-2021 みなみ歯科クリニック</span>
  </div>
</footer>

<a href="#" class="back-to-top js-to-top"></a>

<?php get_template_part('./template-parts/cta-side') ?>
<?php get_template_part('./template-parts/cta-bottom') ?>


<?php wp_footer() ?>
</body>

</html>