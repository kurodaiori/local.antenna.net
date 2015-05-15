<?php
  $cat = get_category($post->id);
  // 親カテゴリ
  $cat_name = single_cat_title('',false);
  $cat_id = get_cat_ID($cat_name);
  $cat_parent = get_category_parents($cat_id, false, ' > ');
  $cat_parent = substr($cat_parent, 0, -3);
  $post->custom_title = $cat_parent." カテゴリの記事一覧";
  get_header();
?>

<!-- メイン -->
<?php get_header(); ?>
  <div class="inner clearfix">
    <div class="content excerpt radius">
      <h1 class="archive"><?php echo $cat_parent ?> カテゴリの記事一覧</h1>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php get_template_part('content','excerpt'); ?>
<?php endwhile; endif; ?>
<?php get_template_part('pagination'); ?>
    </div><!-- // .content -->
<?php get_sidebar(); ?>
  </div><!-- // ..inner -->
<?php get_footer(); ?>

