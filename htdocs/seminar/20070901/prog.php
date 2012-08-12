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
      <h2>PHPカンファレンス2007プログラム概要</h2>

      <p class="notice">講演プログラムにつきましては、まだ策定段階にあります。今後変更される可能性がございますので、ご了承ください。随時本サイトにて更新を行います。</p>

    </div>
		<div class="section" id="description-section">
			<table id="seminar-program" summary="カンファレンスプログラム">
				<tr>
					<th width="10%">開催時刻</th>
					<td width="40%">大会場(2F 小展示ホール)</th>
					<td width="50%">小会場(6F C会議室)</th>
				</tr>
				<tr>
					<th>9:30</th>
					<td colspan="2">開場</td>
				</tr>
				<tr>
					<th>10:00</th>
					<td colspan="2">開会のご挨拶</td>
				</tr>
				<tr>
					<th>10:00</th>
					<td colspan="2">
						<p class="seminar-title">基調講演</p>
						<p class="seminar-talker">日本PHPユーザ会 廣川 類(<a href="data/phpcon070901a.ppt">講演資料</a>)</p>
					</td>
				</tr>
				<tr>
					<th>11:00</th>
					<td>
						<p class="seminar-title">大規模サイトの構築・運用ノウハウ</p>
						<p class="seminar-talker">グリー株式会社 藤本真樹<br />(<a href="data/phpcon-2007-dist.pdf">講演資料</a>)</p>
						<p class="seminar-talker">ウノウ株式会社 尾藤正人<br />(<a href="data/php-conference-2007.pdf">講演資料</a>)</p>
					</td>
					<td>
						<p class="seminar-title">PHP入門</p>
						<p class="seminar-talker">有限会社アリウープ 柏岡秀男</p>
					</td>
				</tr>
				<tr>
					<th>12:30</th>
					<td colspan="2">お昼休憩</td>
				</tr>
				<tr>
					<th>13:30</th>
					<td>
						<p class="seminar-title">PHP Framework Update</p>
						<p class="seminar-talker">株式会社ディノ 月宮紀柳<br />(symfony)(<a href="data/FW/PHPCon07.ppt">講演資料</a>) </p>
						<p class="seminar-talker">株式会社カサレアル 安藤祐介<br />(Cake PHP)(<a href="http://puyo2.upper.jp/cake/">資料掲載ページ</a>) </p>
						<p class="seminar-talker">株式会社アイテマン 久保敦啓<br />(Piece Framework) </p>
						<p class="seminar-talker">グリー株式会社 一井 崇<br />(Ethna)(<a href="data/FW/ethna.pdf">講演資料</a>) </p>
					</td>
					<td>
						<p class="seminar-title">マイクロソフトの次世代Webテクノロジー 徹底解説 - Windows Server 2008 / IIS7.0 / FastCGIで変わるPHP環境</p>
						<p class="seminar-talker">マイクロソフト株式会社 奥主 洋<br />(<a href="data/PHP_Conference_Microsoft.pdf">講演資料</a>)</p>
						<p class="seminar-title">Zend Core による PHP 環境の改善 for Windows and  PowerGres</p>
						<p class="seminar-talker">ゼンド・ジャパン株式会社 岡部昭洋<br />(<a href="data/zend_okabe.pdf">講演資料</a>)</p>
				</tr>
				<tr>
					<th>15:00</th>
					<td>
						<p class="seminar-title">PHP at Yahoo! JAPAN</p>
						<p class="seminar-talker">ヤフー株式会社 荻原一平<br />(<a href="data/phpcon2007-yahoo.pdf">講演資料</a>)</p>
					</td>
					<td>
						<p class="seminar-title">今日からはじめるPHPエクステンション</p>
						<p class="seminar-talker">関山隆介<br />(<a href="data/phpcon2007-fixed.zip">講演資料</a>)</p>
				</tr>
				<tr>
					<th>16:00</th>
					<td>
						<p class="seminar-title">パネルディスカッション -<br /> ビジネス側面から語るPHP</p>
						<p>(パネラー)</p>
						<p class="seminar-talker">リナックスアカデミー　河江 信嗣</p>
						<p class="seminar-talker">株式会社パソナテック　加藤 直樹</p>
						<p class="seminar-talker">株式会社IMJモバイル　一條 武久</p>
						<p class="seminar-talker"></p>
						<p>(モデレータ)</p>
						<p class="seminar-talker"> 楽天株式会社 技術研究所　森 正弥</p>
					</td>
					<td>
						<p class="seminar-title">ライトニングトーク</p>
						<p class="seminar-title">モバイル開発におけるPHPの利用方法やTips</p>
						<p class="seminar-talker">memokami　荒木 稔<br />(<a href="http://ideaup.seesaa.net/article/53593663.html">資料掲載ページ</a>)</p>
						<p class="seminar-title">PHPをつかったPHPライセンスのSNSエンジン「MyNETS」について</p>
						<p class="seminar-talker">UsagiProject　辻岡 国治</p>
						<p class="seminar-title">PEAR DB_DataObject 開発ケーススタディ</p>
						<p class="seminar-talker">Piece Project　熊倉 洋介<br />(<a href="data/LT/20070901_DBDataObject.zip">講演資料</a>)</p>
						<p class="seminar-title">PHPで画像処理をしてモテようかと思う</p>
						<p class="seminar-talker">ウノウ株式会社　新井 啓太<br />(<a href="data/LT/PHPCON.pdf">講演資料</a>)</p>
						<p class="seminar-title">PHPプログラマのための恋愛術</p>
						<p class="seminar-talker">アシアル株式会社　海原 才人<br />(<a href="data/LT/phpcon2007-renai.ppt">講演資料</a>)</p>
						<p class="seminar-title">codeなにがしの紹介</p>
						<p class="seminar-talker">オープンタイプ株式会社 　早川  仁<br />(<a href="http://opentype.jp/files_press/2007_0901/">資料掲載ページ</a>)</p>
						<p class="seminar-title">ケータイキット for Smartyについて</p>
						<p class="seminar-talker">アイデアマンズ株式会社　寺嶋 芳延<br />(<a href="data/LT/KK4S.ppt">講演資料</a>)</p>
						<p class="seminar-title">PHPでログインシェルを作る</p>
						<p class="seminar-talker">ウノウ株式会社　尾藤  正人<br />(<a href="data/LT/php-conference-2007-LT.pdf">講演資料</a>)</p>
					</td>
				</tr>
			</table>
			<p style="text-align: left">(敬称略)</p>
		</div>
  </div>
  <div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

