<?php
  $post->custom_title = trim(wp_title('', false))."に投稿された記事一覧";
  get_header();
?>

<!-- メイン -->
<?php get_header(); ?>
  <div class="inner clearfix">
    <div class="content excerpt radius">
      <h1 class="archive"><?php trim(wp_title('')); ?>に投稿された記事一覧</h1>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php get_template_part('content','excerpt'); ?>
<?php endwhile; endif; ?>
<?php get_template_part('pagination'); ?>
    </div><!-- // .content -->
<?php get_sidebar(); ?>
  </div><!-- // ..inner -->
<?php get_footer(); ?>

