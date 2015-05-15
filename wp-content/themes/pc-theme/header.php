<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:locale" content="ja_JP">
  <meta property="fb:admins" content="#">
  <meta property="article:publisher" content="#">
  <meta name="viewport" content="width=1024, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
</head>

<body>
  <header class="header">
    <div class="inner clearfix">
      <h1><a title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <ul>
        <li>
          <a title="Home" href="/">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-home fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
        <li>
          <a target="_blank" title="Twitter" href="https://twitter.com/#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
        <li>
          <a target="_blank" title="Facebook" href="https://www.facebook.com/#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
        <li>
          <a target="_blank" title="RSS" href="http://local.antenna.net/?feed=rss2">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
      </ul>
    </div>
  </header>
  <div class="header-nav">
    <div class="inner">
      <ul>
        <li>
          <a title="カテゴリ" href="#">カテゴリ<i class="fa fa-caret-down"></i></a>
          <ul>
<?php
//  $archives_category = wp_list_categories('title_li=&echo=0');
//  echo str_replace("\n</li>","</li>",$archives_category);
?>
<?php wp_list_categories('title_li=&show_count=1&hide_empty=1'); ?>
          </ul>
        </li>
        <li>
          <a title="タグ" href="#">タグ<i class="fa fa-caret-down"></i></a>
          <ul>
<?php
  $tags = get_terms('post_tag', 'hide_empty=0');
  foreach($tags as $value):
?>
              <li><a title="<?php echo $value->description; ?>" href="<?php echo get_tag_link($value->term_id); ?>"><?php echo $value->name; ?> (<?php echo $value->count; ?>)</a></li>
<?php endforeach; ?>
          </ul>
        </li>
        <li>
          <a title="人気記事" href="#">人気記事<i class="fa fa-caret-down"></i></a>
          <ul>
<?php
  $wpp = array (
  'range' => 'daily', /*集計期間の設定（daily,weekly,monthly）*/
  'limit' => 5, /*表示数はmax5記事*/
  'post_type' => 'post', /*投稿のみ指定（固定ページを除外）*/
  'title_length' => '35', /*タイトル文字数上限*/
  'stats_comments' => '0', /*コメント数は非表示*/
  'stats_views' => '1', /*閲覧数を表示させる*/
  'thumbnail_width' => '50', /*画像のwidth（px）*/
  'thumbnail_height' => '50', /*画像のheight（px）*/
  'post_html' => '<li>{thumb}<span>{title}</span></li>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
); ?>
<?php wpp_get_mostpopular($wpp); ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
