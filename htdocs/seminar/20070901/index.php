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
      <h2>『PHPカンファレンス2007』開催のご案内</h2>

      <p class="notice">カンファレンスへの参加応募が定員に達しましたので、締め切らせていただきました。</p>

      <p>日本PHPユーザ会は、毎年「PHPカンファレンス」を開催しております。</p>
      <p>今回のPHPカンファレンスでは、最近話題の技術テーマを中心としたテクノロジーセッションに加え、初心者の方やディレクター・デザイナーの方にも興味をもってご参加いただけるパネルセッションを織りまぜています。ほかにも、著名なWebサイト運営の事例、PHPの最新事情など、大変興味深い内容となっています。</p>
      <p>この機会に是非ともPHPについての理解を深めていただき、LAMPシステム構築の醍醐味を楽しむ一助となれば幸いです。ぜひ参加登録の上ご来場ください。</p>
      <p>では、皆様にお目にかかるのを楽しみにしております。</p>
      
    </div>
		<div class="section" id="description-section">
			<table summary="カンファレンスの詳細">
				<tr>
					<th>日時</th>
          <td>
            <p>9月1日（土）10:00-17:30（09:30開場）</p>
            <p>18:00より懇親会を行います（希望者のみ、約2時間）</p>
          </td>
				</tr>
				<tr>
					<th>会場</th>
					<td>大田区産業プラザ（PiO） 2F 小展示場、6F C会議室</td>
				</tr>
				<tr>
					<th>住所</th>
					<td>大田区南蒲田1-20-20 ( → <a href="http://www.pio.or.jp/plaza/access/index.htm" target="_blank">会場への交通アクセス</a> )</td>
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
					<td>PHPカンファレンス2007実行委員会(phpcon2007＠php.gr.jp)</td>
          </tr>
				</tr>
				<tr>
					<th>協賛</th>
					<td>
						<p>協賛</p>
						<ul>
							<li><a href="http://www.asial.co.jp/">アシアル株式会社</a></li>
							<li><a href="http://code.nanigac.com/">codeなにがしプロジェクト</a></li>
							<li><a href="http://www.zend.co.jp/">ゼンド・ジャパン株式会社</a></li>
							<li><a href="http://www.casareal.co.jp/">株式会社カサレアル</a></li>
							<li><a href="http://www.dino.co.jp/">株式会社ディノ</a></li>
							<li><a href="http://www.dsp.co.jp/">株式会社デジタルスケープ</a></li>
							<li><a href="http://www.microsoft.com/japan/">マイクロソフト株式会社</a></li>
							<li><a href="http://www.linuxacademy.ne.jp/">リナックスアカデミー</a></li>
							<li><a href="http://begi.net/">株式会社びぎねっと</a></li>
						</ul>
						<p>後援</p>
						<ul>
							<li><a href="http://www.impressjapan.jp/">株式会社インプレスジャパン</a></li>
							<li><a href="http://www.gihyo.co.jp/">株式会社技術評論社</a></li>
							<li><a href="http://www.shuwasystem.co.jp/">株式会社秀和システム</a></li>
							<li><a href="http://www.locus.co.jp/">株式会社ローカス</a></li>
							<li><a href="http://www.thinkit.co.jp/">Think IT（株式会社インプレスIT）</a></li>
							<li><a href="http://www.softbankcr.co.jp/">ソフトバンク クリエイティブ株式会社</a></li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>プログラム</th>
					<td><a href="prog.php">プログラム概要</a>をご覧ください。</td>
				</tr>
				<tr>
					<th>事前登録</th>
          <td>
            <p><strong>カンファレンスの応募が定員に達しましたので、締め切らせていただきました。</strong></p>
          </td>
				</tr>
			</table>
		</div>
  </div>
  <div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

