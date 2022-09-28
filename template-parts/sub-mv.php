<?php if(is_archive()) :?>
    <div class="p-sub-mv" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>')">
      <div class="p-sub-mv__contents">
        <h2 class="p-sub-mv__title"><?php the_archive_title(); ?></h2>
        <p class="p-sub-mv__subtitle"><?php echo $args ?></p>
      </div>
    </div>
  <?php else : ?>
    <div class="p-sub-mv" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>')">
      <div class="p-sub-mv__contents">
        <h2 class="p-sub-mv__title"><?php the_title(); ?></h2>
        <p class="p-sub-mv__subtitle"><?php echo $args ?></p>
      </div>
    </div>
<?php endif ;?>