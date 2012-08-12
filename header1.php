<?php
include_once 'rooturl.php';
include_once 'sd.php';
?>
<div id="header">
  <h1 class="ja"><a href="<?php echo $root_url; ?>" title="日本 PHP ユーザ会メインページへ">日本 PHP ユーザ会</a></h1>
  <h1 class="en"><a href="<?php echo $root_url; ?>" title="日本 PHP ユーザ会メインページへ">Japan PHP Users Group</a></h1>
  <div id="phpug-logo">
    <a href="<?php echo $root_url; ?>" title="日本 PHP ユーザ会メインページへ">
      <img src="<?php echo $root_url; ?>images/h1.gif" width="179" height="19" alt="Japan PHP Users Group" />
    </a>
  </div>
  <div id="navigation">
    <ul>
<?php foreach ($sd_subdomains as $k => $v) { 
  print '      <li id="menu-item-'.$k.'" class="menu-item';
  if ($v) { print ' menu-point'; }
  print '"><a href="http://' .$k. '.php.gr.jp/">'.$sd_titles[$k].'</a> </li>'."\n";
} ?>
    </ul>
  </div>
  <div class="tail"></div>
</div>
