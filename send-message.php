<!-- 
	<?php
		mb_language("Japanese");
		mb_internal_encoding("UTF-8");
		$to = "n.ikeda.musik@gmail.com";
		$title = "サイトの感想";
		$message = $_POST['message'];
		mb_send_mail($to,$title,$message);
	?> -->
<?php ini_set('display_errors','no');
if($_POST){
	$data = $_POST['hoge'];
	file_put_contents('data.txt',$data);
// POSTが届いたらテキストファイルをスクリプトと同じフォルダに書き出す。
	$alert = "<script type='text/javascript'>alert('ありがとうございます！感想を送信しました。');</script>";

echo $alert;
}