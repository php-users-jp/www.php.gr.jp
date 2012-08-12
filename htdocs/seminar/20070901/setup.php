<?php

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

