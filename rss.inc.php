<?php
  define ('MAGPIE_OUTPUT_ENCODING', 'UTF-8');
  require_once 'MagpieRSS/rss_fetch.inc';
  
  function show_rss_titles($url, $title=null, $num=5, $show_date=true) {
    $rss = fetch_rss($url);
    if ($rss === false) {
      echo "      <div class=\"section\">\n";
      echo "        <h2><a href=\"$url\">$title</a></h2>\n";
      echo "      </div>\n";
      return false;
    }
    $url = htmlspecialchars($rss->channel['link']);
    if ($title === null) {
      $title = htmlspecialchars($rss->channel['title']);
    }
    echo "      <div class=\"section\">\n";
    echo "        <h2><a href=\"$url\">$title</a></h2>\n";
    echo "        <ul>\n";
    
    if (! isset($rss->items[0]['date_timestamp'])) {
      if (isset($rss->items[0]['dc']['date']) && strtotime($rss->items[0]['dc']['date']) !== false) {
        foreach ($rss->items as $i => $item) {
          $rss->items[$i]['date_timestamp'] = strtotime($item['dc']['date']);
        }
      }
    }
    
    if ($show_date == true && isset($rss->items[0]['date_timestamp'])) {
      if (count($rss->items) > 1 && $rss->items[0]['date_timestamp'] < $rss->items[1]['date_timestamp']) {
          $rss->items = array_reverse($rss->items);
      }
      $i = 1;
      foreach ($rss->items as $item) {
        $d = strftime('%Y-%m-%d', $item['date_timestamp']);
        $title = htmlspecialchars($item['title']);
        $url = htmlspecialchars($item['link']);
        echo "          <li><a href=\"$url\">$title</a><br /><small>[$d]</small></li>\n";
        if (++$i > $num) { break; }
      }
    } else {
      $i = 1;
      foreach ($rss->items as $item) {
        $d = strftime('%Y-%m-%d', $item['date_timestamp']);
        $title = htmlspecialchars($item['title']);
        $url = htmlspecialchars($item['link']);
        echo "          <li><a href=\"$url\">$title</a></li>\n";
        if (++$i > $num) { break; }
      }
    }
    
    echo "        </ul>\n";
    echo "      </div>\n";
    
    return true;
  }
?>
