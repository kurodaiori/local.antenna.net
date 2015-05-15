<?php
@$post->custom_title = get_search_query()." の検索結果";
get_header(); ?>

<!-- メイン -->
  <div class="content-main clearfix">
    <h4>404 Not Found</h4>
<?php query_posts('posts_per_pages=5&order=DESC&'. $query_string); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php get_template_part('content','excerpt'); ?>
<?php endwhile; else: ?>
    <h2>お探しのページは見つかりませんでした。</h2>
    <p>キーワードを変更してお試しください。</p>
    <div class="#">
      <form action="http://dessart.club/" method="get" class="form-inline">
        <fieldset>
          <div class="input-group">
            <input type="text" name="s" id="search" placeholder="キーワードで検索" value="" class="form-control" />
            <span class="input-group-btn">
              <button type="submit" class="btn btn-default btn-lg">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </fieldset>
      </form>
<?php endif; ?>
    </div>
<?php get_sidebar(); ?>
  </div><!-- // .content-main -->
<?php get_footer(); ?>
