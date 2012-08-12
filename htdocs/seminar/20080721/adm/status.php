<html>
<head>
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title>status</title>
  <style type="text/css">
  <!--
    body {
      color: #000000;
      background-color: #ffffff;}

    table.out {
      border-collapse: separate;
      border-spacing: 0px;}

    table.in {
      border: solid 1px #000000;
      border-collapse: separate;
      border-spacing: 1px;
      empty-cells: show;}

    th.entry {
      font-size: 14px;}

    td.entry {
      font-size: 12px;
      padding: 2px 4px;
      border: solid 1px #000000;}

    td.none {
      font-size: 16px;
      border: solid 0px;}

    td.graph {
      font-size: 1px;
      border: solid 1px #000000;
      empty-cells: show;
      padding: 0px;}

    td.num {
      font-size: 12px;
      border: solid 1px #000000;}

    *.out {
      border: solid 0px;}

    caption {
      font-size: 14px;}

    .item {
      font-size: 12px;}
   -->
  </style>
</head>
<body>
<div align="center">
<h3>現在までの集計</h3>
<?php

include("../setup.php");
define('ITEM_HEAD', 0);
define('ITEM_BODY', 1);

unset($vote);
$dh = opendir("./data");
while ( $ety = readdir($dh) ) {
    if ( !is_dir($ety) ) {
        $fp = fopen("./data/".$ety,"r");
        unset($ary);
        while ( $line = fgets($fp, 4096) ) {
            $key = substr( $line, 0, strpos($line,"=") );
            $value = trim( substr( $line, strpos($line,"=")+1 ) );
//          echo "KEY:$key<br>\n";
//          echo "VAL:$value<br>\n";
            // textareaタイプの改行の変換をミスったので、ここで誤魔化し。
            // 最後の設問だったのでちょっとは救われたが。
            if ( $key == "q9t0" ) {
                while ( $line = fgets($fp, 4096) ) {
                    $value .= trim( $line );
                }
            }
            $value = preg_replace("/\r\n/", "\n", $value);
            $value = preg_replace("/\r/", "\n", $value);
            $value = preg_replace("/<br>/","\n", $value);
            $value = preg_replace("/<br \/>/","\n", $value);
            $value = preg_replace("/\n/", "", $value);         // 改行関係はやっぱり全部取り除きます 
            $ary[$key] = $value;
        }
        fclose($fp);
        $vote[] = $ary;
     }
}
closedir($dh);

// 項目集計(radioとcheckboxのタイプのみ集計)
unset($result);
$result["TOTAL"] = count($vote);
for ($i = 0; $i < count($vote); $i++) {
    for ( $qnum = 0; $qnum < count($q); $qnum++ ) {
        for( $selnum = 0; $selnum < count($q[$qnum]["BODY"]); $selnum++ ) {
            $type = $q[$qnum]["TYPE"];
            if ( $type == "radio" || $type =="checkbox" ) {
                $qa = "q".$qnum."a".$selnum; 
                $result[$qa] += $vote[$i][$qa];
                $qt = "q".$qnum."t".$selnum; 
                if ( !is_null($vote[$i][$qt]) || $vote[$i][$qt] != "" ) {
                    $result[$qt][] = $vote[$i][$qt];
                }
            }
        }
    }
}

// 参加セッション集計
for ($i = 0; $i < count($vote); $i++) {
	foreach($p as $pnum => $prog) {
		if (array_key_exists("p".$pnum, $vote[$i])) {
			$p_value = $vote[$i]["p".$pnum];
			$result["p".$pnum][$p_value]++;
		}
	}
}


// 結果書きだし
$ie="<font size='1'>&nbsp;</font>"; // empty-cells:show の効かないIEは死んでくれ
$msp = 400;
$nsp = 44;

echo "<p>投稿総数:".$result["TOTAL"]."件</p>\n";

// セッション集計書きだし
echo "<p>セッション集計</p>\n";
echo '<table align="center" class="in">'."\n";
foreach ($p as $pnum => $prog) {
	echo "<tr class=\"in\">\n";
	echo "<th>{$prog["TIME"]}</th>\n";
	foreach ($prog["BODY"] as $key => $value) {
		echo "<td width=\"$msp\" class=\"entry\">{$value[0]}</td><td width=\"$nsp\" class=\"num\" style=\"text-align:right\">{$result["p".$pnum][$key]}</td>\n";
	}
	echo "</tr>\n";
}
echo "</table>\n";

// 表書き出し
for ( $qnum = 0; $qnum < count($q); $qnum++ ) {

    $title = $q[$qnum]["TITLE"];
    $type = $q[$qnum]["TYPE"];

    switch ( $type ) {
        case "radio":
        case "checkbox":
            echo "<p><table class='out' border='0' align='center'>\n";
            echo "<caption><strong>Q.".$qnum.":&nbsp;".$title."</strong>";
            if ( $type == "checkbox" ) echo "(複数回答)";
            echo "</caption>\n";
            unset($detail);
            foreach ( $q[$qnum]["BODY"] as $selnum => $value ) {
                $qa = "q".$qnum."a".$selnum; 
                $qt = "q".$qnum."t".$selnum; 
                // 詳細入力欄確認
                if ( $value[ITEM_HEAD] != "" ) $detail[$qt] = $value[ITEM_BODY];
                echo "<tr class='out'><td class='out'>\n";
                echo "  <table class='in' width='".($result["TOTAL"]+$msp+$nsp)."' border='1'><tr>\n";
                echo "  <td class='none' width='".$msp."' align='left'><span class='item'>".$value[ITEM_BODY]."</span></td>\n";
                echo "  <td class='none' width='".($result["TOTAL"]-$result[$qa])."' bgcolor='#ffffff'></td>\n";
                if ( $result[$qa] != 0 ) {
                    echo "  <td class='graph' width='".$result[$qa]."' bgcolor='#dd9944' align='left'></td>\n";
                } else {
                    echo "  <td class='none' width='0' bgcolor='#ffffff' align='left'></td>\n";
                }
                echo "  <td class='num' width='".$nsp."' align='right'>".$result[$qa]."</td>";
                echo "</tr></table></td></tr>\n";
            }

            // 詳細入力欄
            if ( !is_null($detail) ) {
                foreach ( $detail as $qt => $value ) {
                    echo "<tr><td class='entry'></td></tr>\n";
                    echo "<tr><td class='entry'><b>".$value."</b>の詳細</td></tr>\n";
                    echo "<tr><td class='entry'>\n";
                    $i = 0; 
                    while ( $i < count($result[$qt]) - 1 ) {
                        echo $result[$qt][$i];
                        echo " ｜ ";
                        $i++;
                    }
                    echo $result[$qt][$i];
                    echo "</td></tr>\n";
                }                
            }
            echo "</table></p>\n";
            break;

        case "text":
            // このテーブルは別ファイルの出力に分けた方が無難かもしれない。
            echo "<p><table class='in' align='center' width='600' >\n";
            echo "<caption><strong>Q.".$qnum.":&nbsp;".$title."</strong></caption>\n";
            echo "<tr>";
            echo "<th class='entry'>No.</th>";
            foreach ( $q[$qnum]["BODY"] as $value ) {
                echo "<th class='entry'>".$value[ITEM_HEAD]."</th>";
            }
            echo "</tr>\n";
            for ( $i = 0; $i < count($vote); $i++ ) {
                echo "<tr>";
                echo "<td class='entry' align='right'>".$i."</td>";
                foreach ( $q[$qnum]["BODY"] as $selnum => $value ) {
                    $qt = "q".$qnum."t".$selnum; 
                    echo "<td class='entry'>";
                    echo htmlspecialchars( $vote[$i][$qt], ENT_QUOTES );
                    echo "</td>";
                }
                echo "</tr>\n";
            }
            echo "</table></p>\n";
            break;

        case "textarea":
            // 取り合えずtextタイプと同じ処理
            // このテーブルは別ファイルの出力に分けた方が無難かもしれない。
            echo "<p><table class='in' align='center' width='600' >\n";
            echo "<caption><strong>Q.".$qnum.":&nbsp;".$title."</strong></caption>\n";
            echo "<tr>";
            echo "<th class='entry'>No.</th>";
            foreach ( $q[$qnum]["BODY"] as $value ) {
                echo "<th class='entry'>".$value[ITEM_HEAD]."</th>";
            }
            echo "</tr>\n";
            for ( $i = 0; $i < count($vote); $i++ ) {
                echo "<tr>";
                echo "<td class='entry' align='right'>".$i."</td>";
                foreach ( $q[$qnum]["BODY"] as $selnum => $value ) {
                    $qt = "q".$qnum."t".$selnum; 
                    echo "<td class='entry'>";
                    // textareaタイプは、ファイル格納時にnl2brしちゃってるけど
                    // どうしようかねぇ
                    echo htmlspecialchars( $vote[$i][$qt], ENT_QUOTES );
                    echo "</td>";
                }
                echo "</tr>\n";
            }
            echo "</table></p>\n";
            break;
    }
}

?>
</div>
</body>
</html>
