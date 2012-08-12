<?php

  # 応募締め切り
#  header("Location: http://www.php.gr.jp/seminar/20080721/");
#  exit;
	$page_name = 'PHPカンファレンス2008 事前登録';
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
    <h2>PHPカンファレンス2008 事前登録フォーム</h2>

    <p>以下の事前登録フォームに記入の上、「確認」ボタンをクリックしてください。</p>
    <p class="navigation"><a href="index.php">PHPカンファレンス2008 紹介ページに戻る</a></p>
		<p class="navigation"><a href="prog.php">プログラム概要ページへ</a></p>
    <form action="confirm.php" method="post" class="seminar-form">
    <?php
      include("setup.php");

			echo '<h3>参加希望セッションの選択</h3>' . "\n";
			echo '<div class="section" id="description-section">'. "\n";
			echo '<table id="seminar-program" summary="プログラム申込" style="width:100%">'. "\n";
			echo '<tr>';
			echo '<th style="width:14%">開催時刻</th>';
			foreach ($thead as $v) {
				echo '<th style="width:43%">' . $v . '</th>';
			}
			echo '</tr>'. "\n";
			foreach ($p as $pnum => $prog) {
				$_POST[("p".$pnum)];
				echo '<tr>';
				echo "<th>{$prog["TIME"]}</th>\n";
				for ($i = 0;$i < count($thead);$i++) {
					if (isset($prog["BODY"][$i][2]) &&  $prog["BODY"][$i][2] == 1) {
						echo "<td><strong style=\"color:#FF0000\">満席</strong>&nbsp;{$prog["BODY"][$i][0]}<br />{$prog["BODY"][$i][1]}</td>\n";
					} else if (!empty($prog["BODY"][$i])) {
						echo "<td><input type=\"radio\" name=\"p{$pnum}\" value=\"{$i}\"";
						if (isset($_POST[("p".$pnum)]) && $i == $_POST[("p".$pnum)] ) {
							echo ' checked="checked"';
						}
						echo " />{$prog["BODY"][$i][0]}<br />{$prog["BODY"][$i][1]}</td>\n";
					} else {
						echo "<td></td>\n";
					}
				}
				echo '</tr>'. "\n";
			}
			echo '</table>'. "\n";
			echo '</div>'. "\n";

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
		<h4>■個人情報の利用目的</h4>
		<p>このフォームで収集した個人情報は、PHPカンファレンス2008の運営に必要な範囲で利用させて頂きます。
		また、収集した個人情報を日本PHPユーザ会以外の第三者へ提供することはございません。
		この内容に同意頂ける場合のみ、ご登録をお願い致します。</p>
		<p>個人情報に関するお問い合わせは phpcon2008@php.gr.jp までお願い致します。</p>
    </div>
  </div>    
  <div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

