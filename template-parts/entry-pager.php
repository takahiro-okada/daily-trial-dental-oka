<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
if ($prev_post || $next_post) :
?>
  <nav class="c-entry-pager">
    <?php if ($prev_post) :
    ?>
      <a href="<?php echo get_permalink($prev_post->ID); ?>" class="c-entry-pager__prev-link">前の記事</a>
    <?php endif; ?>

    <?php
    $isBlog = false;
    if ("blog" === get_post_type()) {
      $isBlog = true;
    }
    if ($isBlog) {
      echo '<a class="c-entry-pager__back" href="' . home_url() . '/blog">記事一覧</a>';
    } else {
      echo '<a class="c-entry-pager__back" href="' . home_url() . '/news">記事一覧</a>';
    }
    ?>

    <?php if ($next_post) :
    ?>
      <a href="<?php echo get_permalink($next_post->ID); ?>" class="c-entry-pager__next-link">次の記事</a>
    <?php endif; ?>
  </nav>
<?php endif; ?>