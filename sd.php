<?php
/*
  $domain : current sub domain
*/
$sd_subdomains = array(
    'www'=> 0
  , 'news' => 0
  , 'ml' => 0
  , 'bbs' => 0
  , 'planet' => 0
  , 'docs' => 0
  , 'events' => 0
);
$sd_titles = array(
  'www'=>'メイン'
  , 'news' =>'ニュース'
  , 'ml' => 'メーリングリスト'
  , 'bbs' => '掲示板'
  , 'planet' => 'プラネット'
  , 'docs' => '日本語ドキュメント'
  , 'events' => 'イベント');
if (isset($sd_subdomains[$domain])) {$sd_subdomains[$domain] = 1; }
if (isset($sd_titles[$domain])) {$sd_title = $sd_titles[$domain]; }
?>