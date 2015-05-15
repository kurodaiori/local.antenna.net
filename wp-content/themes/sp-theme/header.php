<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:locale" content="ja_JP">
  <meta property="fb:admins" content="#">
  <meta property="article:publisher" content="#">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
</head>

<body>
  <header class="header">
    <div class="inner clearfix">
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <ul>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
  </header>
  <div class="header-nav">
    <div class="inner">
      <ul>
        <li><a href="#">カテゴリー</a>
          <ul>
            <li><a href="#">カテゴリー2</a></li>
            <li><a href="#">カテゴリー2</a></li>
            <li><a href="#">カテゴリー2</a></li>
            <li><a href="#">カテゴリー2</a></li>
          </ul>
        </li>
        <li><a href="#">カテゴリー</a>
          <ul>
            <li><a href="#">カテゴリー2</a></li>
            <li><a href="#">カテゴリー2</a></li>
            <li><a href="#">カテゴリー2</a></li>
            <li><a href="#">カテゴリー2</a></li>
            <li><a href="#">カテゴリー2</a></li>
            <li><a href="#">カテゴリー2</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
