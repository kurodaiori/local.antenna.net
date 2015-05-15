<?php
// excerpt--
function my_excerpt_mblength($length) {
  return 120;
}
add_filter('excerpt_mblength', 'my_excerpt_mblength');

// excerpt 省略記号--
function my_excerpt_more($more) {
  return '…' ;
}
add_filter('excerpt_more', 'my_excerpt_more');

// カテゴリの記事数をリンクに含める
add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
function my_list_categories( $output, $args ) {
    $output = preg_replace('/<\/a>\s*\((\d+)\)/',' ($1)</a>',$output);
      return $output;
}

// アーカイブの記事数をリンクに含める
add_filter( 'get_archives_link', 'my_archives_link' );
function my_archives_link( $output ) {
  $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
  return $output;
}

// auto post thumbnail--
add_theme_support('post-thumbnails');

// 画像を挿入する際、Pタグで囲まないようにする--
function filter_ptags_on_images($content){
       return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

// 自動挿入されるpタグとbrタグを削除する
remove_filter ( 'the_content', 'wpautop' );
remove_filter ( 'the_excerpt', 'wpautop' );

// 西暦年月日の出力
function jp_date_wp_title( $title, $sep, $seplocation ) {
  if ( is_date() ) {
    $m = get_query_var('m');
    if ( $m ) {
      $year = substr($m, 0, 4);
      $month = intval(substr($m, 4, 2));
      $day = intval(substr($m, 6, 2));
    } else {
      $year = get_query_var('year');
      $month = get_query_var('monthnum');
      $day = get_query_var('day');
    }

    $title = ($seplocation != 'right' ? " $sep " : '') .
         ($year ? $year . '年' : '') .
         ($month ? $month . '月' : '') .
         ($day ? $day . '日' : '') .
         ($seplocation == 'right' ? " $sep " : '');
  }
  return $title;
}
add_filter( 'wp_title', 'jp_date_wp_title', 10, 3 );

// メディアから画像投稿時にclass、width、heightを付与しない
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   $html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
   return $html;
}


?>
