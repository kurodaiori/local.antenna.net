<?php get_header(); ?>
<div class="inner clearfix">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="content radius">
<!--
    <h1 class="archive"><?php the_category(''); ?>カテゴリーの記事</h1>
-->
    <article>
      <p class="meta">
<?php $cat = get_the_category(); $cat = $cat[0]; ?>
        <span class="meta-category"><?php the_category(' '); ?></span>
        <span class="meta-date"><?php echo get_the_date(); ?></span>
      </p>
      <h1><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <section class="single">
<?php the_content(); ?>
<?php
  $values = post_custom('引用元サイト');
  if($values){
  echo '<div class="exter-link"><p><i class="fa fa-link"></i>引用元サイト</p>';
  echo "\n" . '<ul>' . "\n";
  foreach ((array)$values as $value) {
    echo '<li><i class="fa fa-arrow-circle-right"></i><cite>' . $value . '</cite></li>';
  }
  echo '</ul></div><!-- // .related-info -->' . "\n";
} ?>

<ul class="sns">
  <li class="twitter"><a target="_blank" title="Twitter" href="https://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
  <li class="facebook"><a target="_blank" title="Facebook" href="https://www.facebook.com/#"><i class="fa fa-facebook"></i></a></li>
  <li class="googleplus"><a target="_blank" title="Google+" href="https://plus.google.com/#"><i class="fa fa-google-plus"></i></a></li>
  <li class="hatena"><a target="_blank" title="はてなブックマーク" href="http://b.hatena.ne.jp/#"><img src="<?php echo get_template_directory_uri(); ?>/img/hatenabookmark-logo-noBG.png" /></a></li>
<!--
  <li class="mixi">mixi</li>
-->
</ul>
      </section>
    </article>
  </div>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
