  <article class="clearfix">
    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="eyecatch"><?php the_post_thumbnail('thumbnail',array('class' => 'post-img-thumb picked')); ?></a>
    <section>
      <h1><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <p class="meta">
<?php $cat = get_the_category(); $cat = $cat[0]; ?>
        <span class="meta-category"><?php the_category(' '); ?></span>
        <span class="meta-date"><?php echo get_the_date(); ?></span>
      </p>
<?php the_content(); ?>
    </section>
  </article>
