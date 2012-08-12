<?php
/*
  $page_name : name of current page
  $domain : subdomain of current page
  $css : (array) extra CSS files 
*/
include_once 'rooturl.php';
include_once 'sd.php';
if (! isset($css)) { $css = array(); }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="<?php echo $root_url; ?>css/common.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root_url; ?>css/main.css" type="text/css" />
<?php if ($domain == 'www') { ?>
  <link rel="stylesheet" href="<?php echo $root_url; ?>css/header1.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root_url; ?>css/footer1.css" type="text/css" />
<?php } else { ?>
  <link rel="stylesheet" href="<?php echo $root_url; ?>css/header1_s.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root_url; ?>css/footer1_s.css" type="text/css" />
<?php } ?>
<?php foreach ($css as $v) { 
  echo '  <link rel="stylesheet" href="' . $root_url . 'css/' .$v. '" type="text/css" />'."\n";
} ?>
  <link rel="icon" href="<?php echo $root_url; ?>images/favicon.png" type="image/png" />
  <title>日本 PHP ユーザ会 (Japan PHP Users Group)<?php print ' :: '.$sd_title; 
    if (isset($page_name)) { print ' :: '.htmlspecialchars($page_name); } ?></title>
</head>
<body><div id="page-top" class="contents">
<?php 
  include 'header1.php'; 
?>
