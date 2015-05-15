<?php get_header(); ?>
<div class="inner clearfix">
  <div class="content excerpt radius">
    <h1 class="archive">新着記事</h1>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php get_template_part('content','excerpt'); ?>
<?php endwhile; endif; ?>
  </div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
