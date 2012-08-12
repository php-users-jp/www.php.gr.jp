<?php 
  include '../header.php';
  include '../rss.inc.php';
?>
<div id="main">
  <div id="sub-body" class="feed">
<?php
  //show_rss_titles('http://news.php.gr.jp/rss.xml', 'ユーザ会よりお知らせ', 5, true);
  show_rss_titles('http://events.php.gr.jp/event.php/rss', 'イベント情報', 5, false);
  //show_rss_titles('http://planet.php.gr.jp/rss.xml', 'プラネット', 5, false);
  show_rss_titles('http://bbs.php.gr.jp/rss.xml', '掲示板', 5, true);
  show_rss_titles('http://news.php.net/group.php?group=php.announce&format=rss', 'php.announce', 5, true);
  show_rss_titles('http://pear.php.net/feeds/latest.rss', 'PEAR 最新リリース', 5, true);
  show_rss_titles('http://pecl.php.net/feeds/latest.rss', 'PECL 最新リリース', 5, true);
?>
  </div><!-- id="sub-body" -->
        
  <div id="main-body">
    <div class="section">
      <!-- <h2>インフォメーション</h2> -->
      <p>本ユーザ会では、オープンソースのスクリプト言語 PHP（正式名称 PHP:Hypertext Preprocessor）の更なる開発の促進と普及を目指しています。</p>
    </div>
    <div class="section">
      <p class="notice">
        2007年8月から、PHPユーザ会のWebサイトは新しいコンテンツに移行いたしました。古いコンテンツは <a href="http://oldwww.php.gr.jp">oldwww.php.gr.jp</a> より閲覧していただけます。
      </p>
      <h2>PHP とは</h2>
      <p><a class="external" href="http://www.php.net/">PHP</a> は、オープンソースの汎用スクリプト言語です。
        特に、サーバサイドで動作する Web アプリケーションの開発に適しています。
        言語構造は簡単で理解しやすく、C 言語の基本構文に多くを拠っています。
        手続き型のプログラミングに加え、（完全ではありませんが）オブジェクト指向のプログラミングも行うことができます。</p>
      <p>
        Linux や FreeBSD 等の多くの Unix 系システム, Microsoft Windows, Mac OS X など主要な OS で動作します。
        また、Apache や Microsoft IIS を始めとした多くのウェブサーバをサポートします。</p>
      <p>
        <a class="external" href="http://sourceforge.jp/projects/opensource/wiki/licenses">オープンソース</a>
        なライセンスでリリースされているため、商用・個人用途を問わず自由に使用することができます。
        各種ライブラリも充実しており、さまざまな Web サイト、Web アプリケーションが PHP を使って開発されています。</p>
      <p class="details"><span class="gt">&gt;&gt;</span> <a href="aboutphp.php">より詳しく </a></p>
      
      <div class="section">
        <h3>PHP 関連情報</h3>
        <ul>
          <li><a class="external" href="http://www.php.net/">PHP 言語の開発元</a>（英語）</li>
          <li><a class="external" href="http://www.php.net/downloads.php">PHP のダウンロード</a> - ソースと windows バイナリ（英語）</li>
          <li><a class="external" href="http://www.php.net/manual/ja/">PHP マニュアル </a></li>
          <li><a class="external" href="http://pear.php.net/">PEAR</a> - 公式ライブラリレポジトリ（英語） </li>
          <li><a class="external" href="http://pear.php.net/manual/ja/">PEAR マニュアル </a></li>
        </ul>
        <!-- <p class="details"><span class="gt">&gt;&gt;</span> <a href="">その他の php.net 公式サイト</a></p> -->
      </div>
      
      <p class="notice">なお、「PHP:Hypertext Preprocessor」はオープンソースのソフトウエアの名称であり、出版社である「PHP研究所」とは一切関係ありません。</p>
    </div>
        
    <div class="section">
      <h2>日本 PHP ユーザ会について</h2>
      <p>日本 PHP ユーザ会は、オープンソースのスクリプト言語 PHP に関するコミュニティです。</p>
      <ul>
        <li>PHP の開発の促進 </li>
        <li>PHP に関する情報の収集と公開 </li>
        <li>PHP ユーザ相互の技術的・人間的交流</li>
      </ul>
      <p>などを目的とし、PHP 開発者／ユーザの有志により活動が行われています。</p>
      <p class="details"><span class="gt">&gt;&gt;</span> <a href="aboutphpgrjp.php">より詳しく </a></p>
          
      <div id="phpinfo" class="section">
        <h3>プロジェクト</h3>
        <ul>
          <li><a href="http://oldwww.php.gr.jp/project/i18n/">PHP 言語自体の開発 - 国際化を中心として</a></li>
          <li><a href="http://news.php.gr.jp/">PHP 関連ニュース</a></li>
          <li><a href="http://planet.php.gr.jp/">PHP プラネット</a></li>
          <li><a href="http://bbs.php.gr.jp/">PHP ユーザ会掲示板</a></li>
          <li><a href="http://ml.php.gr.jp/">メーリングリスト</a></li>
          <li><a href="http://docs.php.gr.jp/">PHP 日本語ドキュメント - マニュアル翻訳プロジェクト</a></li>
          <li><a href="http://events.php.gr.jp/">イベント</a> -> <a href="http://events.php.gr.jp/pages/eventproposal">イベントの申請に関して</a></li>
        </ul>
      </div>
    </div>
      
    <!--
    <div id="search" class="sub-section menu-section">
      <h2>各種検索</h2>
      <ul>
        <li><a href="http://ns1.php.gr.jp/search.html">メーリングリスト検索</a>
       （<a href="http://ns1.php.gr.jp/php-jp/">～01年6月迄</a>） </li>
        <li><a href="http://search.net-newbie.com/">PHPマニュアル検索</a></li>
      </ul>
    </div>
    -->
  </div>
  <div class="tail"></div>
</div><!-- id="main" -->
          
<?php include '../footer.php'; ?>
