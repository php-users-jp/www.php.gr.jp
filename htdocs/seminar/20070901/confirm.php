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
    <h2>PHPカンファレンス2007 事前登録フォーム</h2>
  <form action="thankyou.php" method="post" class="seminar-confirm-form">
  <?php
  include ("setup.php");

  for ( $qnum = 0; $qnum < count($q); $qnum++ ) {
    $anscnt = 0;
    $chkary = $_POST[("q".$qnum)];
    $type = $q[$qnum]["TYPE"];
    echo "<h3>Q".($qnum+1);
    echo ".&nbsp;".$q[$qnum]["TITLE"]."</h3>\n";
    echo "<ul>";
    foreach ( $q[$qnum]["BODY"] as $selnum => $value ) {
      switch ( $type ) {
      case "radio":
      case "checkbox":
        if ( is_selected($selnum, $chkary) ) {
          echo "<li><input type='hidden' name='q".$qnum."[]'";
          echo " value='".$selnum."' />";
          if (isset($value[2]) && $value[2] != "") {
            echo $value[2];
          } else {
            echo $value[1];
          }
          if ( $value[0] != "" ) {
            $my = "q".$qnum."t".$selnum;
            echo "<input type='hidden' name='".$my."'";
            echo " value='";
            echo htmlspecialchars( $_POST[$my], ENT_QUOTES );
            echo "' />";
            echo "&nbsp;(";
            echo $value[0];
            echo "：";
            if ( $_POST[$my] == "" ) {
              echo "<strong>回答なし</strong>";
            } else {
              echo htmlspecialchars( $_POST[$my], ENT_QUOTES );
            }
            echo ")";
          }
          echo "</li>\n";
          $anscnt++;
        }
        break;

      case "text":
      case "textarea":
        $my = "q".$qnum."t".$selnum;
        if ( !is_null($_POST[$my]) ) {
          if ( $_POST[$my] == $value[1] ) break;
          echo "<p class=\"text\"><input type='hidden' name='".$my."'";
          echo " value='";
          echo htmlspecialchars( $_POST[$my], ENT_QUOTES );
          echo "' />";
          echo nl2br( htmlspecialchars( $_POST[$my], ENT_QUOTES ) );
          echo "</p>\n";
          $anscnt++;
        }
        break;
      }
    }
		if ( $anscnt == 0 ) echo "<li><strong>回答なし</strong></li>\n";
		echo "</ul>";
  }

  // 多重投稿ミス回避用
  echo "<input type='hidden' name='timestamp' value='".time()."' />\n";
?>
<div class="seminar-form-navigation">
<input type="submit" name="submit" value="事前登録を送信" />
</div>
</form>

<form action='registration.php' method='POST'>
<?php
  for ( $qnum = 0; $qnum < count($q); $qnum++ ) {
    $chkary = $_POST[("q".$qnum)];
    if ( !is_null($chkary) ) {
      if ( is_array($chkary) ) {
        for ( $i = 0; $i < count($chkary); $i++ ) {
          echo "<input type='hidden' name='q".$qnum."[]'";
          echo " value='".$chkary[$i]."' />\n";
        }
      } else {
        echo "<input type='hidden' name='q".$qnum."[]'";
        echo " value='".$chkary."' />\n";
      }
    }

    for ( $selnum = 0; $selnum < count($q[$qnum]["BODY"]); $selnum++ ) {
      $my = "q".$qnum."t".$selnum;
      if ( !is_null($_POST[$my]) and ($_POST[$my] != $q[$qnum]["BODY"][$selnum][1]) ) {
        echo "<input type='hidden' name='".$my."'";
        echo " value='";
        echo htmlspecialchars( $_POST[$my], ENT_QUOTES );
        echo "' />\n";
      }
    }
  }
?>
<div class="seminar-form-navigation"><input type="submit" name="submit" value="回答内容を修正する" /></div>
</form>
<p class="alert">チェックしなかった項目の詳細部分の記述は回答として使われません。
回答として構わない場合は、回答内容の修正にてチェックしてください。</p>
</form>

<div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

