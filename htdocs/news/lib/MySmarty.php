<?php

require_once 'smarty/Smarty.class.php';

function convert_encoding_to_eucjp($template_source, &$smarty) {
  if (function_exists("mb_convert_encoding")) {
    // mbstringモジュールが利用可能でテンプレートがEUC-JPでない場合は
    // 文字コードを変換する
    $template_source = mb_convert_encoding($template_source, "EUC-JP", "auto");
  }
  return $template_source;
}

function convert_encoding_to_utf8($template_source, &$smarty) {
  if (function_exists("mb_convert_encoding")) {
    // mbstringモジュールが利用可能でテンプレートがEUC-JPでない場合は
    // 文字コードを変換する
    $template_source = mb_convert_encoding($template_source, "UTF-8", "auto");
  }
  return $template_source;
}

function convert_encoding_to_sjis($template_source, &$smart) {
  if (function_exists("mb_convert_encoding")) {
    return mb_convert_encoding($template_source, "SJIS", "EUC-JP");
  }
  return $template_source;
}

function strip_php_codes($template_source, &$smarty) {
	$template_source = preg_replace("/^<\?php.+\?>/s", "", $template_source);
	return $template_source;
}

class MySmarty extends Smarty {
  /**
   * The class constructor.
   */
  function MySmarty()
  {
    $this->force_compile = true;
    $this->register_prefilter("strip_php_codes");
    $this->register_prefilter("convert_encoding_to_utf8");
    $this->compile_dir = "e:/mydocu~1/webapp/asial/tmp";
    $this->cache_dir = "e:/mydocu~1/webapp/asial/tmp";
    $this->template_dir = $_SERVER["DOCUMENT_ROOT"];
  }
}
?>
