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
      <h2>PHPカンファレンス2008動画配信</h2>
			<p class="navigation"><a href="index.php">PHPカンファレンス2008 紹介ページに戻る</a></p>
    </div>
		<div class="section" id="description-section">

            <p>Ustream.tvにてストリーミング中継を実施します。必要に応じて片側の音声をミュートしてください。</p>

            <table>
                <tr>
                    <th>大会場</th>
                    <th>小会場</th>
                </tr>
                <tr>
                    <td>
                        <embed flashvars="autoplay=true&amp;brand=embed&amp;chat=true" width="300" height="240" allowfullscreen="true" allowscriptaccess="always" src="http://www.ustream.tv/flash/live/232963" type="application/x-shockwave-flash" /><a href="http://www.ustream.tv/channel/phpcon" style="padding:2px 0px 4px;width:300px;background:#FFFFFF;display:block;color:#000000;font-weight:normal;font-size:10px;text-decoration:underline;text-align:center;" target="_blank">ustream.tvで表示 (大会場)</a>
                    </td>
                    <td>
                        <embed flashvars="autoplay=true&amp;brand=embed&amp;chat=true" width="300" height="240" allowfullscreen="true" allowscriptaccess="always" src="http://www.ustream.tv/flash/live/233873" type="application/x-shockwave-flash" /><a href="http://www.ustream.tv/channel/phpcon-sub" style="padding:2px 0px 4px;width:300px;background:#FFFFFF;display:block;color:#000000;font-weight:normal;font-size:10px;text-decoration:underline;text-align:center;" target="_blank">ustream.tvで表示 (小会場)</a>
                    </td>
                </tr>
            </table>

            <h3>IRC</h3>
            <p>IRCは、Ustream.tvのチャットをご利用ください。書き込みをする、もしくはIRCクライアントで直接接続するには、Ustream.tvへの会員登録が必要となります。</p>

            <ul>
                <li><a href="http://www.ustream.tv/channel/phpcon">大会場 (channel: phpcon)</a></li>
                <li><a href="http://www.ustream.tv/channel/phpcon-sub">小会場 (channel: phpcon-sub)</a></li>
            </ul>

            <h4>IRC接続情報</h4>
            <ul>
                <li>サーバ: chat1.ustream.tv:6667</li>
                <li>チャンネル: #phpcon (大会場), #phpcon-sub (小会場)</li>
                <li>文字コード: UTF-8</li>
            </ul>

		</div>
  </div>
  <div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

