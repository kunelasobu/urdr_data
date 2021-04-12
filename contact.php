<?php /* navを呼び出し */ require("./site_setup.php")?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>健康に関するコラム記事一覧｜URDR.（ユアドクター）</title>
    <meta name="description" content="確かな情報であなたの健康をサポートするURDR.（ユアドクター）のトップページです。" />
    <meta name="robots" content="noindex,nofollow" />
    <meta property="og:url" content="ページのURL" />
    <meta property="og:title" content="ページのタイトル" />
    <meta property="og:type" content="ページのタイプ">
    <meta property="og:description" content="記事の抜粋" />
    <meta property="og:image" content="画像のURL" />
    <meta name="twitter:card" content="カード種類" />
    <meta name="twitter:site" content="@Twitterユーザー名" />
    <meta property="og:site_name" content="サイト名" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="appIDを入力" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/sweetalert.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/mailform.css" />
    <link rel="stylesheet" href="./css/jquery.datetimepicker.css" />
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery.cookie.js"></script>
    <script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="./js/function.js"></script>
  </head>
  <?php /* headerを呼び出し */ require("./nav.php")?>

      <div id="container">
        <div class="wrapper">
          <h2 class="common-title"><span class="en">contact</span><br>お問い合わせ・ご意見ご感想</h2>
          <p class="contact">お問い合わせ・ご意見ご感想はこちらからお寄せください。</p>
          <form action="./mailform.php" method="post" id="mail_form">
          	<dl>

          		<dt>名前<span>Your Name</span></dt>
          		<dd class="required"><input type="text" id="name_1" name="name_1" value="" /> <input type="text" id="name_2" name="name_2" value="" /></dd>

          		<dt>メールアドレス<span>Mail Address</span></dt>
          		<dd class="required"><input type="email" id="mail_address" name="mail_address" value="" /></dd>

          		<dt>お問い合わせの内容<span>Mail Contents</span></dt>
          		<dd class="required"><textarea id="mail_contents" name="mail_contents" cols="40" rows="5"></textarea></dd>
          	</dl>

          	<p id="form_submit"><input type="button" id="form_submit_button" value="送信する" /></p>
          </form>




          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
          <script src="js/mailform-js.php"></script>


          <!-- フリガナ自動入力ライブラリここから -->
          <script src="js/jquery.autoKana.js"></script>
          <script>
          	(function( $ ) {
              $.fn.autoKana( '#name_1', '#read_1', {
                katakana: false
              });
              $.fn.autoKana( '#name_2', '#read_2', {
                katakana: false
              });
          	})( jQuery );
          </script>
          <!-- フリガナ自動入力ライブラリここまで -->


          <!-- 住所自動入力ライブラリここから -->
          <script src="js/ajaxzip3.js"></script>
          <!-- 住所自動入力ライブラリここまで -->


          <!-- ご希望の日時選択ライブラリここから -->
          <script src="js/jquery.datetimepicker.js"></script>
          <script>
          	(function( $ ) {
          		$( 'input#schedule' ).datetimepicker({
          			lang: 'ja'
          		});
          	})( jQuery );
          </script>
          <!-- ご希望の日時選択ライブラリここまで -->
        </div>


    <?php /* footerを呼び出し */ require("./footer.php")?>
