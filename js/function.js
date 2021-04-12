/*----------------------------------------
modal
----------------------------------------*/

$(function(){
  // 1回目のアクセス
  if($.cookie("access") == undefined) {
    $.cookie("access","onece");
    $(".modal").css("display","block")
    $("#container").css({
        "display":"block",
        "opacity":".4",
        "transform":"translate(0, 60px)",
        "transition":"all 1.5s"
        });
  // 2回目以降
  } else {
 
  }
});

// Message close
$(function() {
  $(".modal-btn").click(function(){
    $(".modal").css("display","none")
    $("#container").css({
      "display":"block",
      "opacity":"1",
      "transform":"none"
    });
  });
});
/*----------------------------------------
navigation
----------------------------------------*/
/*　スクロールで固定 */
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.logo-font.nav').html('<span class="logo-font nav">ud.</span>');

          if(!$('.main-nav').hasClass('nav-fixed')){
            $('.main-nav').css({"top": '-104px'});
            $('.main-nav').addClass('nav-fixed');
            $('.main-nav').animate({"top": 0},300,"linear");
          }
        } else {
            $('.main-nav').removeClass('nav-fixed');
            $('.main-nav').removeAttr('style');
            $('.logo-font.nav').html('<span class="logo-font nav">URDR.</span>');
        }
    });
});

/*----------------------------------------
search
----------------------------------------*/

$(function() {
  var cx = '004872256794866107486:yjxv07s-okc';
  var gcse = document.createElement('script');
  gcse.type = 'text/javascript';
  gcse.async = true;
  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(gcse, s);
});

/* サイト内検索の文字 */
$(window).on("load",function(){
  $("#gsc-i-id1").attr("placeholder","サイト内を検索");
});

$(function(){
  $(".sendbtn").click(function(){
        $(".send-message-open").show();
    });
});

/*----------------------------------------
nav-toggle
----------------------------------------*/
    $(function () {
      $('#nav-toggle').click(function() {
        $('body').toggleClass('open');
      });
    });

/*----------------------------------------
item-box
----------------------------------------*/
$(function() {
 $('.item-box').slick({
　　arrows: true,
　　slidesToShow:4,
   autoplay: true,
   pauseOnHover:true,
   responsive: [{
       breakpoint: 768,  //ブレイクポイントを指定
       settings: {
   　　 arrows: false,
       slidesToShow:2,
       }
     }]
 　});
 });

/*----------------------------------------
footer message
----------------------------------------*/

$(function(){
var messages = [
'<p class="message">When one door is closed, many more is open.<br><span>ひとつのドアが閉まっているとき、もっと多くのドアが開いている</span></p>',
'<p class="message">Conquer yourself rather than the world.<br><span>世界ではなく、自分自身を征服せよ</span></p>',
'<p class="message">Your strength is your own knowledge.<br><span>あなたの力とはあなた自身の知識である</span></p>',
'<p class="message">Be yourself. No one can say you’re doing it wrong.<br><span>君らしくいよう。君らしいことを誰も間違いだなんて言えないのさ。</span></p>',
'<p class="message">There is more to life than increasing its speed.<br><span>スピードを上げるばかりが人生じゃない。</span></p>'
];
var randMsg = messages[Math.floor(Math.random() * messages.length)];
$('.rand-message').html(randMsg);
});

$(function(){
    $('#AjaxForm').submit(function(event) {
    // HTMLでの送信をキャンセル
    event.preventDefault();
    var $form = $(this);
    var $button = $form.find('.submit');
    $.ajax({
        url: $form.attr('action'),
        type: $form.attr('method'),
        data: $form.serialize(),
        timeout: 10000,  // 単位はミリ秒
        // 送信前
        beforeSend: function(xhr, settings) {
            // ボタンを無効化し、二重送信を防止
            $button.attr('disabled', true);
        },
        // 応答後
        complete: function(xhr, textStatus) {
            // ボタンを有効化し、再送信を許可
            $button.attr('disabled', false);
        },
        // 通信成功時の処理
        success: function(result, textStatus, xhr) {
            // 入力値を初期化
            $form[0].reset();
            $("#result").append(result);
        },
        // 通信失敗時の処理
        error: function(xhr, textStatus, error) {
            alert('NG...');
        }
    });
    // …
});
    });
/*----------------------------------------
footer 波打つ背景
----------------------------------------*/
$(function() {

var unit = 100,
    canvas, context, canvas2, context2,
    height, width, xAxis, yAxis,
    draw;

/**
 * Init function.
 *
 * Initialize variables and begin the animation.
 */
function init() {

    canvas = document.getElementById("sineCanvas");

    canvas.width = document.documentElement.clientWidth; //Canvasのwidthをウィンドウの幅に合わせる
    canvas.height = 600;

    context = canvas.getContext("2d");

    height = canvas.height;
    width = canvas.width;

    xAxis = Math.floor(height/2);
    yAxis = 0;

    draw();
}

/**
 * Draw animation function.
 *
 * This function draws one frame of the animation, waits 20ms, and then calls
 * itself again.
 */
function draw() {

    // キャンバスの描画をクリア
    context.clearRect(0, 0, width, height);

    //波を描画
    drawWave('#187add', 1, 5, 100);
    drawWave('#187add', 0.4, 3.5, 500);
    drawWave('#187add', 0.2, 4, 400);

    // Update the time and draw again
    draw.seconds = draw.seconds + .006;
    draw.t = draw.seconds*Math.PI;
    setTimeout(draw, 65);
};
draw.seconds = 0;
draw.t = 0;

/**
* 波を描画
* drawWave(色, 不透明度, 波の幅のzoom, 波の開始位置の遅れ)
*/
function drawWave(color, alpha, zoom, delay) {
    context.fillStyle = color;
    context.globalAlpha = alpha;

    context.beginPath(); //パスの開始
    drawSine(draw.t / 0.5, zoom, delay);
    context.lineTo(width + 10, height); //パスをCanvasの右下へ
    context.lineTo(0, height); //パスをCanvasの左下へ
    context.closePath() //パスを閉じる
    context.fill(); //塗りつぶす
}

/**
 * Function to draw sine
 *
 * The sine curve is drawn in 10px segments starting at the origin.
 * drawSine(時間, 波の幅のzoom, 波の開始位置の遅れ)
 */
function drawSine(t, zoom, delay) {

    // Set the initial x and y, starting at 0,0 and translating to the origin on
    // the canvas.
    var x = t; //時間を横の位置とする
    var y = Math.sin(x)/zoom;
    context.moveTo(yAxis, unit*y+xAxis); //スタート位置にパスを置く

    // Loop to draw segments (横幅の分、波を描画)
    for (i = yAxis; i <= width + 10; i += 10) {
        x = t+(-yAxis+i)/unit/zoom;
        y = Math.sin(x - delay)/3;
        context.lineTo(i, unit*y+xAxis);
    }
}

init();

});
