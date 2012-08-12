<?php
  include '../../../header.php';
  include '../../../rss.inc.php';
?>
<div id="main">
  <div id="sub-body" class="feed">
<?php
  show_rss_titles('http://news.php.gr.jp/rss.xml', 'ユーザ会よりお知らせ', 5, true);
  show_rss_titles('http://events.php.gr.jp/event.php/rss', 'イベント情報', 5, false);
  show_rss_titles('http://planet.php.gr.jp/rss.xml', 'プラネット', 5, false);
  show_rss_titles('http://bbs.php.gr.jp/rss.xml', '掲示板', 5, true);
?>
  </div><!-- id="sub-body" -->

  <div id="main-body">
    <div class="section">
    <?php
    include ("setup.php");

    for ( $qnum = 0; $qnum < count($q); $qnum++ ) {
      $chkary = $_POST[("q".$qnum)];
      if (!is_null($chkary)) {
        if (is_array($chkary)) {
          // 重複値(不正操作)を除去
          $chkary = array_unique($chkary);
          for ( $i = 0; $i < count($chkary); $i++ ) {
            $fwstr[] = "q".$qnum."a".$chkary[$i]."=1\n";
          }
        } else {
          $fwstr[] = "q".$qnum."a".$chkary."=1\n";
        }
      }

      for ( $i = 0; $i < count($q[$qnum]["BODY"]); $i++ ) {
        if ( $q[$qnum]["BODY"][$i][0] != "" ) {
          $my = "q".$qnum."t".$i;
          if ( !is_null( $_POST[$my] )) {
            $fwstr[]  = $my."=";
            $fwstr[] .= nl2br($_POST[$my])."\n";
          }
        }
      }
    }

    $time = $_POST["timestamp"];
    if ( $time == "" ) {
      die("ERROR:Cannot get timestamp for check.");
    }
    $id = $_SERVER["REMOTE_ADDR"]."-".$time;
    $vfile = "./adm/data/".$id.".txt";

    @chmod($vfile,0666);
    $fp = @fopen($vfile,"w") or die("ERROR:Cannot open file for write.");

    for ( $i = 0; $i < count($fwstr); $i++ ) {
      fputs($fp,$fwstr[$i]);
    }
    fclose($fp);
    ?>
    <h3>事前登録を受け付けました</h3>
    <p>PHPカンファレンス2007への事前登録をしていただき、誠にありがとうございました。</p>
    <p>講演内容の変更などの通知につきましては、本ウェブサイトにて随時更新いたします。では、当日お会いいたしましょう！</p>
    <p class="navigation"><a href="<?php echo($root_url) ?>">PHPユーザ会トップページに戻る</a></p>
    </div>
  </div>
  <div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

