<?php

/*******
 * 講演プログラム
 * 第３要素に1入れると満席フラグ。
 ******/
$thead = array('小展示場', 'D会議室');

$p[0]["TIME"] = "10:00～";
$p[0]["BODY"] = array(
	array("基調講演", "日本PHPユーザ会 廣川 類", 1),
);

$p[1]["TIME"] = "11:00～";
$p[1]["BODY"] = array(
	array("PHPでつくる ぐるなび", "株式会社ぐるなび 佐藤史彦", 1),
	array("Saityせんせい、わたしとピーえっちピーしよ？", "アシアル株式会社 海原才人", 1),
);

$p[2]["TIME"] = "13:00～";
$p[2]["BODY"] = array(
	array("楽天×PHP  楽天におけるPHPの過去・現在・未来", "楽天株式会社 安藤祐介", 1),
	array("Webセキュリティ", "情報処理推進機構(IPA) 永安佑希允", 1),
);

$p[3]["TIME"] = "14:00～";
$p[3]["BODY"] = array(
	array("大規模向けパッケージソフトウエアと PHP", "サイボウズ株式会社 米川 健一", 1),
	array("PHP開発環境　－ Zend Studio for eclipse - ", "ゼンド・ジャパン株式会社 佐藤栄一 間辺有理", 1),
);

$p[4]["TIME"] = "15:00～";
$p[4]["BODY"] = array(
	array("ユーザ会活動報告/PHPネタの集め方", "", 1),
	array("PHPerのためのXOOPS活用法", "株式会社RYUS 天野龍司", 1),
);

$p[5]["TIME"] = "16:00～";
$p[5]["BODY"] = array(
	array("パネルディスカッション", "", 1),
	array("CodeIgniter ～ 2008年大躍進のPHPフレームワーク", "日本CodeIgniterユーザ会 安藤建一 鈴木憲治", 1),
);

$p[6]["TIME"] = "17:30～";
$p[6]["BODY"] = array(
	array("ライトニングトーク", "", 1),
);



/*******
 * アンケート情報
 ******/

$q[0]["TITLE"] = "参加登録情報";
$q[0]["TYPE"]  = "text";
$q[0]["BODY"]  = array(array("ご所属", ""), array("お名前", ""), );

/*
$q[1]["TITLE"] = "懇親会（別途費用）";
$q[1]["TYPE"]  = "static";
$q[1]["BODY"]  = array(
  array( "", "申し訳ありませんが、懇親会は満席になりました。" ));
 */

$q[1]["TITLE"] = "懇親会（事前登録必須）";
$q[1]["TYPE"]  = "radio";
$q[1]["BODY"]  = array(
  array( "", "参加する" ),
  array( "", "参加しない"));
 
$q[2]["TITLE"] = "業種";
$q[2]["TYPE"]  = "radio";
$q[2]["BODY"]  = array(
    array( "", "情報処理・情報サービス業" ),
    array( "", "ソフトウェア製品製造業" ),
    array( "", "コンピュータ製品製造業" ),
    array( "", "印刷業" ),
    array( "", "病院・医療" ),
    array( "", "官公庁" ),
    array( "", "放送・出版業" ),
    array( "", "コンピュータ関連製品販売業" ),
    array( "", "デザイン・広告業" ),
    array( "", "映像・音楽産業" ),
    array( "", "学校・研究所" ),
    array( "", "建設業" ),
    array( "", "金融・証券・保険・不動産" ),
    array( "", "通信・運搬・公共サービス" ),
    array( "", "商社・小売業・卸業（コンピュータ製品を除く）" ),
    array( "", "その他製造業" ),
    array( "", "その他サービス業" ),
    array( "具体的に", "その他" ));

$q[3]["TITLE"] = "職種";
$q[3]["TYPE"]  = "radio";
$q[3]["BODY"]  = array(
    array( "", "プログラマ（3年未満）" ),
    array( "", "プログラマ（3年以上）" ),
    array( "", "プログラマ（5年以上）" ),
    array( "", "デザイナー" ),
    array( "", "システム設計者" ),
    array( "", "プロジェクトマネージャ" ),
    array( "", "コンサルタント" ),
    array( "", "リサーチャ" ),
    array( "", "総務" ),
    array( "", "広報" ),
    array( "", "経営者" ),
    array( "", "学生" ),
    array( "具体的に" , "その他" ));

$q[4]["TITLE"] = "PHPの利用度を教えてください";
$q[4]["TYPE"]  = "radio";
$q[4]["BODY"]  = array(
    array( "", "まだ使ったことがない" ),
    array( "", "初心者" ),
    array( "", "1年未満" ),
    array( "", "1年以上" ),
    array( "", "3年以上" ),
    array( "", "5年以上" ));

$q[5]["TITLE"] = "PHPを利用するOSを教えてください";
$q[5]["TYPE"]  = "checkbox";
$q[5]["BODY"]  = array(
    array( "", "フリーのLinuxディストリビューション" ),
    array( "", "商用のLinuxディストリビューション" ),
    array( "", "Microsoft Windows" ),
    array( "", "Mac OS X" ),
    array( "", "Solaris" ),
    array( "", "HP-UX" ),
    array( "", "AIX" ),
    array( "", "FreeBSD" ),
    array( "具体的なプロダクト名", "その他" ));

$q[6]["TITLE"] = "PHPと組み合わせて利用するデータベースを教えてください";
$q[6]["TYPE"]  = "checkbox";
$q[6]["BODY"] = array(
    array( "", "MySQL" ),
    array( "", "PostgreSQL" ),
    array( "", "Firebird" ),
    array( "", "SQLite" ),
    array( "", "Oracle" ),
    array( "", "Microsoft SQL Server" ),
    array( "", "DB2" ),
    array( "記入", "その他" ));

$q[7]["TITLE"] = "PHP以外で利用している言語を教えてください";
$q[7]["TYPE"]  = "checkbox";
$q[7]["BODY"]  = array(
    array( "", ".NET (Web系)" ),
    array( "", ".NET (アプリ系)" ),
    array( "", "Java" ),
    array( "", "Perl" ),
    array( "", "Ruby" ),
    array( "", "JavaScript" ),
    array( "", "ActionScript / Flex" ),
    array( "", "C/C++" ),
    array( "", "Cobol" ),
    array( "", "Python" ),
    array( "", "Haskell" ),
    array( "具体的な言語/製品名", "その他" ));

function is_selected( $v, $ary ) {
    $st = FALSE;
    if ( !is_null($ary) ) {
        if ( is_array($ary) ) {
            if ( in_array($v,$ary) ) {
                $st = TRUE;
            }
        } elseif ( $j == $ary ) {
            $st = TRUE;
        }
    }
    return $st;
}

