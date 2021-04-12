
<nav class="main-nav">
  <div class="nav-container">
    <div class="nav-l">
      <a href="<?php echo $root; ?>" class="over"><span class="logo-font nav">URDR.</span></a>
    </div>
    <div class="nav-r">
      <div id="nav-toggle" class="only-sp">
        <div>
            <span></span>
            <span></span>
            <span></span>
        </div>
      </div>
    <ul class="menu-list flexbox only-pc">
      <li><a href="<?php echo $root; ?>column/">コラムを読む</a></li>
      <li><a href="#">悩みを解決</a></li>
      <li><a href="#">カテゴリ一覧</a></li>
      <li>
      <gcse:search></gcse:search>
    </li>
    <li class="help"><a href="#" class="over"><i class="far fa-question-circle over"></i></a>
      <small class="small-alert">使い方のヘルプページを開きます</small>
    </li>
  </ul><!-- menu-list only-pc-->
  <ul class="menu-list flexbox only-sp">
    <li>
      <gcse:search></gcse:search>
    </li>
    <li class="sp-tab"><a href="<?php echo $root; ?>column/">コラムを読む</a></li>
    <li class="sp-tab"><a href="#">悩みを解決</a></li>
    <li class="sp-tab"><a href="#">カテゴリ一覧</a></li>
    <li class="help sp-tab"><a href="#" class="over">ヘルプページ</a>
    </li>
  </ul><!-- menu-list only-sp-->
  </div><!-- nav-container -->
  </div><!-- main-nav -->
</nav>
