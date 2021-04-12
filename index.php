<?php /* navを呼び出し */ require("./site_setup.php")?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URDR.（ユアドクター）</title>
    <meta name="description" content="確かな情報であなたの健康をサポートするURDR.（ユアドクター）のトップページです。" />
    <meta name="robots" content="index,nofollow" />
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.cookie.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/function.js"></script>
  </head>
  <body>
    <div class="modal wrapper">
        <p class="modal-txt">このサイトは健康をサポートするため<br>医療に関わる情報を発信することを想定して作成された仮想サイトです</p>
        <p class="modal-txt">当サイトに掲載されています情報に関しましては<br>一切の責任を追いかねますのでご了承ください</p>
        <p class="modal-txt">また、今後みなさまの健康にお役立ちできるようなサイトの運用を目指していきますので<br>何卒ご理解のほどよろしくお願いいたします</p>
        <button class="modal-btn over">OK</button>
        <a href="http://www.google.co.jp/" class="modal-link">LEAVE</a>
     </div><!-- /modal --> 
    <div id="container">
    <?php /* headerを呼び出し */ require("header.php")?>
    <?php /* seasonを呼び出し */ require("season.php")?>
    <?php /* columnを呼び出し */ require("column.php")?>
    <?php /* troubleを呼び出し */ require("trouble.php")?>
    <?php /* itemを呼び出し */ require("item.php")?>
    <?php /* contentsを呼び出し */ require("contents.php")?>
    <?php /* footerを呼び出し */ require("footer.php")?>
