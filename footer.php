  <!-- <script type="text/javascript" src="./js/function.js"></script>
  <script type="text/javascript" src="./js/slick.min.js"></script> -->
  <div class="scroll-to-top">

  </div>

  <footer>
    <div id="canvas-container" class="footer">
      <div class="footer-inner">

        <div class="rand-message"></div>

        <a href="#" class="over"><span class="logo-font footer">URDR.</span></a>
        <div class="footer-container">
          <div class="using">
            <ul>
              <li><a href="<?php echo $root; ?>privacy-policy.php" class="over">プライバシーポリシー</a></li>
              <li><a href="<?php echo $root; ?>contact.php" class="over">お問い合わせ</a></li>
            </ul>
          </div>
          <div class="sns">
            <a href="#" class="over"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="over"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        <small>&copy; 2019 URDR. healthcare Inc.</small>
      </div>

      <div class="only-pc">
        <form action="<?php echo $root; ?>send-message.php" method="post" class="message-letter" id="AjaxForm">
          <p><span class="letter-strong">Send a letter to URDR.</span></p>
          <p>あなたの感想を自由に聞かせてください</p><br>
          <textarea cols="50" rows="5" name="message" class="message-box"></textarea><br />
          <br />
          <p><span class="attention">頂いたご意見への回答は行っておりませんのでご了承ください</span></p>
          <input type="submit" value="送る" class="sendbtn"/>
        </form>
      </div>
      <div id="result"></div>

      <canvas id="sineCanvas" width="1960" height="450"></canvas>
    </div>
  </div>

  </footer>
    </body>
</html>
