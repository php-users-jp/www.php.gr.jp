<?php

  # 応募締め切り
  header("Location: http://www.php.gr.jp/seminar/20070901/");
  exit;

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

    <p>以下の事前登録フォームに記入の上、「確認」ボタンをクリックしてください。</p>
    <p class="navigation"><a href="index.php">PHPカンファレンス2007 紹介ページに戻る</a></p>
    <form action="confirm.php" method="post" class="seminar-form">
    <?php
      include("setup.php");

      for ( $qnum = 0; $qnum < count($q); $qnum++ ) {
        $chkary = $_POST[("q".$qnum)];
        $type = $q[$qnum]["TYPE"];
        
        echo "<h3>Q".($qnum+1);
        echo ".&nbsp;".$q[$qnum]["TITLE"]."</h3>";

        echo "<ul>";
        if ( $type == "checkbox" && count($q[$qnum]["BODY"]) > 1) echo "<li>(複数回答可)</li>";
        foreach ( $q[$qnum]["BODY"] as $selnum => $value ) {
          echo "<li class=\"input-item\">";
          switch ( $type ) {
          case "static":
            $my = "q".$qnum."t".$selnum;
            echo $value[1];
            echo "&nbsp;";
            break;

          case "radio":
          case "checkbox":
            echo "<input id=\"q".$qnum."t".$selnum."\" type='".$type."' name='q".$qnum."[]'";
            echo " value='".$selnum."'";
            if ( is_selected($selnum, $chkary) ) {
              echo " checked='checked'";
            }
            echo " />";
            echo "<label for=\"q".$qnum."t".$selnum."\">".$value[1]."</label>";

            if ( $value[0] != "" ) {
              $my = "q".$qnum."t".$selnum;
              echo "&nbsp;<br />";
              echo "&nbsp;(";
              echo "<label for=\"tq".$qnum."t".$selnum."\">".$value[0]."</label>";
              echo "<input id=\"tq".$qnum."t".$selnum."\" class=\"text\" type='text' name='".$my."'";
              echo " size='50' value='";
              echo htmlspecialchars( $_POST[$my], ENT_QUOTES );
              echo "' />)";
            }
            break;

          case "text":
            $my = "q".$qnum."t".$selnum;
            echo "<label for=\"q".$qnum."t".$selnum."\">".$value[0]."</label>";
            echo "&nbsp;";
            echo "<input id=\"q".$qnum."t".$selnum."\" class=\"text\" size=\"50\" type='".$type."' name='".$my."'";
            echo " value='";
            if ( is_null($_POST[$my]) ) {
              echo $value[1];
            } else {
              echo htmlspecialchars( $_POST[$my], ENT_QUOTES );
            }
            echo "' />";
            break;

          case "textarea":
            $my = "q".$qnum."t".$selnum;
            echo $value[0];
            echo "<br />";
            echo "<textarea name='".$my."'";
            echo " rows='4' cols='40'>";
            if ( is_null($_POST[$my]) ) {
              echo $value[1];
            } else {
              echo htmlspecialchars( $_POST[$my], ENT_QUOTES );
            }
            echo "</textarea>";
            break;
          }
          echo "</li>\n";
        }
        echo "</ul>\n";
      }
    ?>
		<div class="seminar-form-navigation">
			<input type="submit" name="submit" value="　確認　" />
		</div>
    </form>
    </div>
  </div>    
  <div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

