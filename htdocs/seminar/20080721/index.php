<?php
	$page_name = 'PHPカンファレンス2008 - メインページ';
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
      <h2>『PHPカンファレンス2008』開催のご案内</h2>
			<p class="notice">当日は、大会場・小会場ともUstream.tvを用いたリアルタイム動画配信を行います。配信については<a href="streaming.php">こちらのページ</a>をご覧ください。</p>

      <p>今年も、PHPユーザの夏の祭典、PHPカンファレンスの開催が決定いたしました。今回のPHPカンファレンスでは、技術をテクニカルセッションとビギナーズセッションの２つのセッションを用意しています。</p>
			<p>テクニカルセッションでは、PHPの大規模な運用実績の紹介にはじまり、PHPの枠にとらわれない様々な言語コミュニティの識者の方によるパネルディスカッションなど、ステップアップを目指したい技術者垂涎のセッションとなっています。</p>
			<p>またビギナーズセッションも、PHPを一から始める超入門セッション、とにかくサイトを作りたい人に向けたCMS・Xoopsの紹介など、PHPをほとんど知らない初心者の方でも広く楽しめるセッションを用意しています。</p>
      <p>内容も豊富で様々なバックグラウンドの方でも幅広く楽しめる内容となっておりますので、ぜひ参加登録の上ご来場ください。</p>
      <p>では、皆様にお目にかかるのを楽しみにしております。</p>
    </div>
		<div class="section" id="description-section">
			<table summary="カンファレンスの詳細">
				<tr>
					<th>日時</th>
          <td>
            <p>7月21日（月祝）10:00-18:30（09:30開場）</p>
            <p>終了後(19:00を目安)に懇親会を行います（希望者のみ、約2時間）</p>
          </td>
				</tr>
				<tr>
					<th>会場</th>
					<td>大田区産業プラザ（PiO） 2F 小展示場、6F D会議室</td>
				</tr>
				<tr>
					<th>住所</th>
					<td>大田区南蒲田1-20-20 ( → <a href="http://www.pio-ota.jp/plaza/map.html" target="_blank">会場への交通アクセス</a> )</td>
				</tr>
				<tr>
					<th>アクセス</th>
					<td>
						<p>京浜急行線・空港線/京急蒲田駅より徒歩3分</p>
						<p>(品川・横浜・羽田空港からの所要時間各10数分)</p>
						<p>JR京浜東北線/蒲田駅より徒歩12分</p>
					</td>
				</tr>
				<tr>
					<th>参加費用</th>
					<td>無料（懇親会は会費3000円程度を予定）</td>
				</tr>
				<tr>
					<th>主催</th>
					<td>日本PHPユーザ会　（<a href="http://www.php.gr.jp/">http://www.php.gr.jp/</a> ）</td>
          </tr>
				<tr>
					<th>運営</th>
					<td>PHPカンファレンス2008実行委員会(phpcon2008＠php.gr.jp)</td>
          </tr>
				</tr>
				<tr>
					<th>協賛</th>
					<td>
						<p>協賛</p>
						<ul>
							<li><a href="http://www.asial.co.jp/">アシアル株式会社</a></li>
							<li><a href="http://extjs.co.jp/">Ext Japan, LLC</a></li>
							<li><a href="http://www.zend.co.jp/">ゼンド・ジャパン株式会社</a></li>
							<li><a href="http://www.dino.co.jp/">株式会社ディノ</a></li>
							<li><a href="http://begi.net/">株式会社びぎねっと</a></li>
							<li><a href="http://www.tricorn.co.jp/">トライコーン株式会社</a></li>
						</ul>
						<p>後援</p>
						<ul>
							<li><a href="http://gihyo.jp/">株式会社 技術評論社</a></li>
							<li><a href="http://www.shoeisha.co.jp/">株式会社 翔泳社</a></li>
							<li><a href="http://www.mycom.co.jp/">株式会社 毎日コミュニケーションズ</a></li>
						</ul>
						<p>メディア協賛</p>
							<li><a href="http://www.atmarkit.co.jp/">＠IT</a></li>
							<li><a href="http://codezine.jp/">CodeZine</a></li>
							<li><a href="http://itpro.nikkeibp.co.jp/">ITPro</a></li>
							<li><a href="http://gihyo.jp/">gihyo.jp</a></li>
<?php //						<li><a href="http://www.thinkit.co.jp/">Software Developer's Think IT</a></li> ?>
<?php //						<li><a href="http://tedia.jp/">テクノロジーポータル TEDIA</a></li> ?>
						<ul>
					</td>
				</tr>
				<tr>
					<th>プログラム</th>
					<td><a href="prog.php">プログラム概要はこちら</a></td>
				</tr>
				<tr>
					<th>事前登録</th>
          <td>
            <p>事前登録フォームへ</p>
          </td>
				</tr>
			</table>
		</div>
  </div>
  <div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

