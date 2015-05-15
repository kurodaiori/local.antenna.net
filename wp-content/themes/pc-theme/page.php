<?php get_header(); ?>
<div class="inner clearfix">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="content radius">
    <article>
<!--
      <p class="meta">
<?php $cat = get_the_category(); $cat = $cat[0]; ?>
        <span class="meta-category"><?php the_category(' '); ?></span>
        <span class="meta-date"><?php echo get_the_date(); ?></span>
      </p>
-->
      <h1><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <section class="single">
<?php the_content(); ?>
      </section>
    </article>
  </div>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
