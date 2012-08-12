<?php
	$page_name = 'PHPカンファレンス2008 - ライトニングトーク募集';
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
      <h2>PHPカンファレンス2008 ライトニングトーク 発表者募集</h2>
			<p class="navigation"><a href="index.php">PHPカンファレンス2008 紹介ページに戻る</a></p>
    </div>
		<div class="section" id="description-section">
			<p>現在、7月21日(月祝)に行われる「PHPカンファレンス2008」のセッションとして予定されている、ライトニングトークの発表者を募集しております。</p>
			<p>テーマは自由。ライブラリ・アプリ紹介や、PHPを使ってモテる！なんて話まで、PHPに関することなら何でも構いません。</p>
			<p>発表希望者は、下記の募集要項にしたがって発表内容を記述の上、<a href="mailto:phpcon2008@php.gr.jp">phpcon2008＠php.gr.jp</a>宛てに発表希望の旨を記載したメールをお送りください。</p>
			<p>多数のご応募をお待ちしております。</p>
<?php //			<p><strong>応募を締め切らせていただきました。ありがとうございました。</strong></p> ?>
			<table summary="ライトニングトーク応募要項">
				<tr>
					<th>発表時間</th>
					<td>5分間</td>
				</tr>
				<tr>
					<th>募集人数</th>
					<td>8～9人</td>
				</tr>
				<tr>
					<th>テーマ</th>
					<td>自由。PHPに関連することであれば何でも構いません。</td>
				</tr>
				<tr>
					<th>応募期限</th>
					<td>7月7日(月)</td>
				</tr>
				<tr>
					<th>募集受付窓口</th>
					<td><strong><a href="mailto:phpcon2008@php.gr.jp">phpcon2008＠php.gr.jp</a></strong>までメールでご応募ください。</td>
<?php //					<td><strong>応募を締め切らせていただきました。ありがとうございました。</strong></td> ?>
				</tr>
				<tr>
					<th>募集要項</th>
					<td><p>以下のテンプレートの内容を記載の上、<a href="mailto:phpcon2008@php.gr.jp">phpcon2008＠php.gr.jp</a>まで<br /><strong>「PHPカンファレンス2008LT応募: ご自分の名前」</strong><br />という件名でお送りください。</p>
							<pre>
-------------------
発表者氏名(ハンドル可):
発表者所属(任意):
発表タイトル:
発表概要:

連絡先メールアドレス:
(こちらからの連絡に使用されます。一般には公開しません)
-------------------</pre>
					</td>
				</tr>
				<tr>
					<th>選考方法・結果通知</th>
					<td>応募総数が募集人数を上回った場合、応募締め切り後にPHPカンファレンス実行委員の間で公正な議論を行い、その結果を各個人の連絡先メールアドレスへと通知させていただきます。結果通知は7/16(火)頃までに通知いたします。</td>
				</tr>
			</table>
		</div>
  </div>
  <div class="tail"></div>
</div><!-- id="main" -->

<?php include '../../../footer.php'; ?>

