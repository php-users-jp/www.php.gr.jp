<?php 
  $page_name = 'PHP 言語について';
  include '../header.php'; 
?>
<div id="main">
  <div class="section">
    <h2>PHP について</h2>
    <p>PHP （正式名称 PHP:Hypertext Preprocessor）は、オープンソースのスクリプト言語です。
      開発本家サイトは、<a href="http://www.php.net/">http://www.php.net/</a> にあります。
      HTML ファイル内に直接コードを記述でき、サーバサイドで動作する Web アプリケーションの開発に適しています。
      言語構造は簡単で理解しやすく、C 言語の基本構文に多くを拠っています。</p>
    <p>
<!-- <p>HTML 内に PHP コード（&lt;?php と ?>の間）を記述する</p> -->
<pre class="php"><code title="HTML 内に PHP コード（&lt;?php と ?>の間）を記述する">&lt;html>
&lt;head>&lt;title>PHP Test&lt;/title>&lt;/head>
&lt;body>
&lt;?php 
    $now = date('G'); 
    if (4 &lt;= $now && $now &lt;= 12) {
        echo "&lt;p>Good Morning, World!&lt;/p>\n";
    } else {
        echo "&lt;p>Hello, World!&lt;/p>\n"; 
    }
?>
&lt;/body>
&lt;/html>
</code></pre>
    <p>詳しくは、チュートリアル
      <a href="http://www.php.net/manual/ja/tutorial.php">http://www.php.net/manual/ja/tutorial.php</a>
      をお読みください。</p>
    <p>手続き型のプログラミングに加え、（完全ではありませんが）
      <a href="http://www.php.net/manual/ja/language.oop5.php">オブジェクト指向のプログラミング</a>
      も行うことができます。</p>
  
    <h3>機能</h3>
    <p>内部構造がモジュール化されており、gd2 や gettext, ming といった外部ライブラリを
      拡張モジュールとしてサポートしています。これらライブラリを利用するスクリプトを容易に作成することができます。
      各種データベースへの接続も、拡張モジュールによりサポートされ、
      PostgreSQL、MySQL、Oracle、Sybaseといった各種データベースとの連携に優れています。
      他にも、XML、PDF、IMAP、LDAP 等各種機能もサポートされており、
      広範な Web アプリケーションを容易に作成可能です。サポートされている機能は、関数リファレンス
      <a href="http://www.php.net/manual/ja/funcref.php">http://www.php.net/manual/ja/funcref.php</a>
      をご覧ください。</p>
      <p>さらに、オリジナルの拡張モジュールを作成することも
      可能で、拡張モジュールのリポジトリ PECL
      （<a href="http://pecl.php.net/">http://pecl.php.net/</a>）
      も存在します。
    </p>
      
    <h3>ライブラリ</h3>
    <p>
      PHP のライブラリやフレームワークは、数多く開発され公開されています。
      PHP の開発元では、公式リポジトリ PEAR 
      (<a href="http://pear.php.net/">http://pear.php.net/</a>) を運営しています。
      PEAR のライブラリは、「パッケージ」に分けられています。 各パッケージは、個別のプロジェクトにより
      開発されています。各パッケージは、gzip 圧縮された tar アーカイブ として配布されており、
      PEAR インストーラを用いてローカルシステムにインストールします。
      さらに、PEAR プロジェクトにより、PHP スクリプトの標準コーディング規約の作成も行われています。
    </p>
      
    <h3>日本語対応</h3>
    <p> EUC-JP または UTF-8 で記述すれば、日本語文字を PHP スクリプト中に記述することができます。
      正規表現関数 (perl 互換) は、UTF-8 文字列をサポートしています。
      マルチバイト文字列処理の関数群は、本ユーザ会の PHP 国際化プロジェクトの皆さんにより開発され、
      PHP 4.0.6以降、本家のソースコードに取り込まれています。なお、現在でも、さらなる機能強化を目指し、
      国際化機能の開発は続けられています。
    </p>
      
    <h3>ドキュメント</h3>
    <p> PHP およびそのライブラリ PEAR には、詳細なマニュアルが製作されています。
      さらに、PHP/PEAR マニュアル翻訳プロジェクト の方々により、日本語版も提供されています。
        <ul>
          <li><a class="external" href="http://www.php.net/manual/ja/">PHP マニュアル </a></li>
          <li><a class="external" href="http://pear.php.net/manual/ja/">PEAR マニュアル </a></li>
        </ul>
    </p>

    <h3>動作環境</h3>
    <p>C 言語を使って開発されており、
      Linux や FreeBSD, Solaris 等の多くの Unix 系システム, Microsoft Windows, Mac OS X など
      主要な OS で動作します。通常の CGI としても使用できますが、
      PHP をモジュールとしてウェブサーバに組み込むことにより、処理速度の高速化、サーバ負荷の低減が可能です。
      Apache や Microsoft IIS を始めとした多くのウェブサーバに対しモジュールが提供されています。
      また、FastCGI としても使用できです。</p>
      
    <p>各システムでのインストールに関しては、
      <a href="http://www.php.net/manual/ja/install.php">http://www.php.net/manual/ja/install.php</a>
      を参照してください。</p>
    <p>多くの Linux ディストリビューションでは、プラットフォーム別にパッケージ化された PHP が用意されています。
      詳しくは、各ディストリビューションのパッケージを参照してください。</p>
  
    <h3>ダウンロード</h3>
    <p>PHP の最新版は
      <a href="http://www.php.net/downloads.php">http://www.php.net/downloads.php</a>より入手できます。
      完全なソースコードの配布に加え、Windows 版に関してはバイナリ形式での配布が行われています。</p>
    <p>また、随時更新される最新のスナップショット版は、
      <a href="http://snaps.php.net/">http://snaps.php.net/</a>より入手できます。</p>

    <h3>ライセンス</h3>
    <p><a class="external" href="http://sourceforge.jp/projects/opensource/wiki/licenses">オープンソース</a>
        なライセンスでリリースされているため、商用・個人用途を問わず自由に使用することができます。
        PHP 4.0 から、PHP は PHP License に基づいて配布されています。ライセンスに関する詳細に関しては、
      <a href="http://www.php.net/license/">http://www.php.net/license/</a> （英語）
      をご覧ください。PHP License の日本語参考訳は
      <a class="external" href="http://sourceforge.jp/projects/opensource/wiki/licenses">http://sourceforge.jp/projects/opensource/wiki/licenses</a>
      にあります。</p>

    <h3>PHP の歴史</h3>
    <p><b>PHP/FI</b> - 1995 年、Rasmus Lerdorf により作成される。当初は、単純な Perl スクリプト群であったが、
      C 言語により書き直される。
    <p><b>PHP/FI 2.0</b> - 1997 年秋リリース。再び C 言語で書き直された。
    <p><b>PHP 3</b> - 1998 年 6 月リリース。Andi Gutmans と Zeev Suraski により機能強化を目指し完全に書き直された。
      拡張性の向上。より強力で一貫性のある文法の整備とオブジェクト指向の導入。
    <p><b>PEAR</b> - 2001 年 1 月に発足。PHP ライブラリの公式リポジトリとなる。
    <p><b>PHP 4</b> - 2000 年 5 月リリース。コア部分が書き直され（新しいコアは Zend Engine と呼ばれる)、
      パフォーマンスの改善とモジュールの独立性の向上。
    <p><b>PHP 5</b> - 2004 年 7 月リリース。新しいオブジェクト指向モデルの導入。その他、多くの新しい機能の追加。

    <h3>PHP 5について</h3>
    <p>現在、PHP 4、PHP 5の2系統での開発が行われています。PHP 5はPHP 4と比較して、オブジェクト指向機能が大幅に改良され、他にも数多くの新機能や改良が盛り込まれています。ただし下位互換性は保たれないため、PHP 4のために書かれたコードをPHP 5に移行するには注意が必要です。</p>
    <p> PHP 5への移行の詳細に関しては、PHPのマニュアル（<a href="http://www.php.net/manual/ja/migration5.php" target="_blank">http://www.php.net/manual/ja/migration5.php</a>）も参考にしてください。</p>
  </div>
</div>
  
<?php include '../footer.php'; ?>
