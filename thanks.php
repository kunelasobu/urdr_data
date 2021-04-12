<?php /* navを呼び出し */ require("./site_setup.php")?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URDR.（ユアドクター）</title>
    <meta name="description" content="確かな情報であなたの健康をサポートするURDR.（ユアドクター）|お問い合わせ完了" />
    <meta name="robots" content="index,nofollow" />
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
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
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.cookie.js"></script>
    <script type="text/javascript" src="./js/function.js"></script>
  </head>
<body>
	<?php /* headerを呼び出し */ require("./nav.php")?>

	<div id="thanks">
		<div class="wrapper">
		<h1 class="common-title"><span class="en">Thanks!</span><br>お問い合わせありがとうございました。</h1>
		<p class="thanks">いただいたご意見・ご感想に関してましては、当サイト管理者に帰還されます。情報の公開はされませんのでご安心ください。<br>
			ご不明点はヘルプページをご覧くださいますよう宜しくお願いいたします。</p>
      <a href="<?php echo $root; ?>" class="thanks-link-btn">
        <span>TOPへ</span>
      </a>
      <div class="thanks-img"><img src="<?php echo $root; ?>img/mail.svg" alt="メール完了"></div>

			<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4892928723151392" data-ad-slot="1105769567" data-ad-format="auto"></ins>
			<script>(adsbygoogle = window.adsbygoogle || []).push({});</script> -->

		<!-- 広告ここまで -->
		</div>
  </div>
	<?php /* footerを呼び出し */ require("./footer.php")?>
