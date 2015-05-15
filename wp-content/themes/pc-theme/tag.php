<?php
  $post->custom_title = single_tag_title("", false)." タグが付けられた記事一覧";
  get_header();
?>

<!-- メイン -->
<?php get_header(); ?>
  <div class="inner clearfix">
    <div class="content excerpt radius">
      <h1 class="archive"><?php single_tag_title() ?> タグが付けられた記事一覧</h1>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php get_template_part('content','excerpt'); ?>
<?php endwhile; endif; ?>
<?php get_template_part('pagination'); ?>
    </div><!-- // .content -->
<?php get_sidebar(); ?>
  </div><!-- // ..inner -->
<?php get_footer(); ?>

