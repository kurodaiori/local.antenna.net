<aside>
  <div class="sidebar radius category">
    <h3>カテゴリ</h3>
    <ul>
<?php
//  $archives_category = wp_list_categories('title_li=&echo=0');
//   echo str_replace("\n</li>","</li>",$archives_category);
?>
<?php wp_list_categories('title_li=&show_count=1&hide_empty=1'); ?>
    </ul>
  </div><!-- // .category -->

  <div class="sidebar radius tag">
    <h3>タグ</h3>
    <ul>
<?php
  $tags = get_terms('post_tag', 'hide_empty=1');
  foreach($tags as $value):
?>
        <li><a title="<?php echo $value->description; ?>" href="<?php echo get_tag_link($value->term_id); ?>"><?php echo $value->name; ?> (<?php echo $value->count; ?>)</a></li>
<?php
  endforeach;
?>
    </ul>
  </div><!-- // .tag -->

  <div class="sidebar radius monthly">
    <h3>月別アーカイブ</h3>
    <ul>
<?php
$args = array(
  'type'            => 'monthly',
  'limit'           => '',
  'format'          => 'html',
  'before'          => '',
  'after'           => '',
  'show_post_count' => true,
  'echo'            => 1,
  'order'           => 'DESC'
);
wp_get_archives( $args );
?>
    </ul>
  </div><!-- // .monthly -->
</aside>
