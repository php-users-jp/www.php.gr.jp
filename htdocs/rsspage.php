<?php
 define ('MAGPIE_INPUT_ENCODING', 'UTF-8');
 define ('MAGPIE_OUTPUT_ENCODING', 'UTF-8');
 require_once 'MagpieRSS/rss_fetch.inc';
 $url = 'http://news.php.net/group.php?group=php.announce&format=rss';
 #$url = 'http://d.hatena.ne.jp/harux/rss';
 #$url = 'http://www.hyuki.com/yukiwiki/wiki.cgi?RssPage';
 $url = 'http://www.phppro.jp/news/rss.php';
 $url = 'http://pear.php.net/feeds/latest.rss';
 $rss = fetch_rss($url);
 print '<pre>';
 print_r($rss);
 print '</pre>';
 exit();
 
 $title = $rss->channel['title'];
 #$title = mb_convert_encoding($title, "SJIS", "auto");
 echo "<h2>$title</h2>\n";
 echo "<ul>\n";
 foreach ($rss->items as $item ) {
   print_r($item);
   echo '<hr>';
  /*
  $title = $item[title];
  #$title = mb_convert_encoding($title, "SJIS", "auto");
  $url   = $item[link];
  echo "<li><a href=\"$url\">$title</a></li>\n";
  */
 }
 echo "</ul>\n";
?>