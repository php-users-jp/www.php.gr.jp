<?php
	$page_name = 'PHPカンファレンス2008 - プログラム概要';
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
      <h2>PHPカンファレンス2008プログラム概要</h2>
			<p class="notice">当日は、大会場・小会場ともUstream.tvを用いたリアルタイム動画配信を行います。配信については<a href="streaming.php">こちらのページ</a>をご覧ください。</p>

<?php //      <p class="notice">講演プログラムにつきましては、まだ策定段階にあります。今後変更される可能性がございますので、ご了承ください。随時本サイトにて更新を行います。</p> ?>

			<p class="navigation"><a href="index.php">PHPカンファレンス2008 紹介ページに戻る</a></p>
			<p class="navigation"><a href="registration.php">事前登録フォームへ</a></p>
<?php //			<p class="navigation"><a href="lt_offer.php">ライトニングトーク応募ページへ</a></p> ?>
    </div>
		<div class="section" id="description-section">
			<table id="seminar-program" summary="カンファレンスプログラム">
				<tr>
					<th width="10%">開催時刻</th>
					<td width="40%">大会場(2F 小展示ホール)</th>
					<td width="50%">小会場(6F D会議室)</th>
				</tr>
				<tr>
					<th>9:30</th>
					<td colspan="2">開場</td>
				</tr>
				<tr>
					<th>10:00</th>
					<td colspan="2"><p class="seminar-title">オープニング・開会のご挨拶</p></td>
				</tr>
				<tr>
					<th>10:00<br />～<br />10:50</th>
					<td colspan="2">
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>基調講演(大会場)</p>
						<p class="seminar-talker">日本PHPユーザ会 廣川 類</p>
					</td>
				</tr>
				<tr>
					<th>11:00<br />～<br />11:45</th>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>PHPでつくる ぐるなび</p>
						<p class="seminar-talker">株式会社ぐるなび<br />技術department 開発第2グループ グループ長<br />佐藤史彦</p>
					</td>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>Saityせんせい、わたしとピーえっちピーしよ？</p>
						<p class="seminar-title">～キミと学んだPHP～</p>
						<p class="seminar-talker">アシアル株式会社 海原才人</p>
					</td>
				</tr>
				<tr>
					<th></th>
					<td colspan="2">お昼休憩</td>
				</tr>
				<tr>
					<th>13:00<br />～<br />13:45</th>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>楽天×PHP  楽天におけるPHPの過去・現在・未来</p>
						<p class="seminar-talker">楽天株式会社<br />開発部　環境整備課　アーキテクチャ標準化推進グループ<br />安藤祐介</p>
					</td>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>&nbsp;Webセキュリティ (仮題)</p>
						<p class="seminar-talker">情報処理推進機構(IPA) 永安佑希允</p>
					</td>
				</tr>
				<tr>
					<th>14:00<br />～<br />14:45</th>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>大規模向けパッケージソフトウエアと PHP</p>
						<p class="seminar-talker">サイボウズ株式会社<br />開発本部 開発部 ガルーン開発グループ<br />米川 健一</p>
					</td>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>&nbsp;PHP開発環境　－ Zend Studio for eclipse - </p>
						<p class="seminar-talker">ゼンド・ジャパン株式会社 佐藤栄一</p>
						<p class="seminar-talker">ゼンド・ジャパン株式会社 間辺有理</p>
				</tr>
				<tr>
					<th>15:00<br />～<br />15:45</th>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>ユーザ会活動報告</p>
						<p class="seminar-talker">株式会社RYUS halt</p>
						<p class="seminar-title">PHPネタの集め方</p>
						<p class="seminar-talker">株式会社セラン 下岡秀幸</p>
					</td>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>PHPerのためのXOOPS活用法</p>
						<p class="seminar-talker">株式会社RYUS 代表取締役<br />天野龍司</p>
					</td>
				</tr>
				<tr>
					<th>16:00<br />～<br />17:15</th>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>パネルディスカッション</p>
						<p class="seminar-title">「激論！PHPの次に学ぶ言語はこれだ」</p>
						<p>(パネラー)</p>
						<p class="seminar-talker">サイボウズ・ラボ株式会社 竹迫良範</p>
						<p class="seminar-talker">株式会社ツインスパーク／日本Rubyの会 高橋征義</p>
						<p class="seminar-talker">日本Pythonユーザ会 柴田 淳</p>
						<p class="seminar-talker">Seasarプロジェクト ひがやすを</p>
						<p class="seminar-talker">id:amachang</p>
						<p>(モデレータ)</p>
						<p class="seminar-talker">日本PHPユーザ会 個々一番</p>
					</td>
					<td>
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>CodeIgniter ～ 2008年大躍進のPHPフレームワーク </p>
						<p class="seminar-talker">日本CodeIgniterユーザ会 安藤建一</p>
						<p class="seminar-talker">日本CodeIgniterユーザ会 鈴木憲治</p>
						<p class="seminar-title">(～ 16:45)</p>
					</td>
				</tr>
				<tr>
					<th>17:30<br />～<br />18:30</th>
					<td colspan="2">
						<p class="seminar-title"><strong style="color:#FF0000">[満席]</strong>ライトニング・トーク(大会場)</p>
						<p>デザイナとの協業を本気で考える</p>
						<p class="seminar-talker">桑田誠</p>
						<p>PHP meets Ext JS(MA4で受賞するための5つの法則）</p>
						<p class="seminar-talker">Ext Japan, LLC 直鳥裕樹</p>
						<p>Flash 書き換え PHP extension</p>
						<p class="seminar-talker">よや</p>
						<p>前日Hackathonでなにがおきたか？</p>
						<p class="seminar-talker">株式会社ディノ/Maple Project kunit(高橋邦彦)</p>
						<p>家族連れIT系技術者の交流会in東京についての報告と今後の展望</p>
						<p class="seminar-talker">kano-e</p>
						<p>いよいよPHPの人達にrhacoを紹介しちゃいますよ。</p>
						<p class="seminar-talker">rhaco-ja 露木誠</p>
						<p>PHPで作る携帯の新しい未来</p>
						<p class="seminar-talker">memokami 荒木 稔</p>
						<p>PHPプログラマ・エンジニア育成のポイント</p>
						<p class="seminar-talker">リナックスアカデミー 秦 崇</p>
					</td>
				</tr>
				<tr>
					<th>18:30</th>
					<td colspan="2"><p class="seminar-title">クロージング</p></td>
				</tr>
			</table>
			<p style="text-align: left">(敬称略)</p>
		</div>
  </div>
  <div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

