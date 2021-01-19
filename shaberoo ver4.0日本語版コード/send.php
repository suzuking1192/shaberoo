<?php
date_default_timezone_set('Asia/Tokyo');
require_once ("../data/data/sql-5.php");
require_once ("../data/support/sql-9.php");

//データ受け取り
$mail = $_POST['email'];
$name = $_POST['name'];
$title = $_POST['title'];
$textarea = $_POST['textarea'];
$time = date('c');
//--------------

//DB登録
//時間取得
$date = date('Y-m-d');
$time = date('H:i:s');
$pdo = new PDO($dbn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$prepare1 = $pdo -> prepare("insert into inquiry (name, mail, sub, body, date, time) values (:name, :mail, :sub, :body, :date, :time)");
$prepare1->bindParam(':name', $name, PDO::PARAM_STR);
$prepare1->bindParam(':mail', $mail, PDO::PARAM_STR);
$prepare1->bindParam(':sub', $title, PDO::PARAM_STR);
$prepare1->bindParam(':body', $textarea, PDO::PARAM_STR);
$prepare1->bindParam(':date', $date, PDO::PARAM_STR);
$prepare1->bindParam(':time', $time, PDO::PARAM_STR);
$prepare1->execute();
$id1 = $pdo->query("SELECT contact_id FROM inquiry WHERE date = '$date' AND time = '$time'");
  while ($row = $id1->fetch()) {
    $id = htmlspecialchars($row['contact_id']);
}

//------------------------

//メール送信
mb_language("Japanese");
mb_internal_encoding("UTF-8");
$massage = "問い合わせ番号：".$id."\n名前：". $_POST['name'] . "\nメールアドレス：" . $_POST['email'] . "\nタイトル：" . $_POST['title'] . "\n本文：" . $_POST['textarea'];
$massage = htmlspecialchars($massage, ENT_QUOTES, 'UTF-8'); 

if (mb_send_mail("mokkumokku99@gmail.com", "問い合わせ[ID=".$id."]", $massage, "From: SHABEROO Support<contact@shaberoo.com>", "-f contact@shaberoo.com")){
	echo "送信が完了しました";
}else{
	echo "送信に失敗しました";
}

$massage2 = 
"お問い合わせありがとうございます。SHABEROO運営サポートです。 \n
Thank you for the inquiry.We are the support team of SHABEROO.\n
以下の内容でお問い合わせを受付いたしました。\n
We received your inquiry as the following;\n\n".
"\nInquiry Number/お問い合わせ番号: " . $id .
"\nName/お名前: ". $_POST['name'] . 
"\nAdress/メールアドレス: " . $_POST['email'] . 
"\nTitle/タイトル: " . $_POST['title'] . 
"\nText/本文: " . $_POST['textarea'] ."\n\n\n".
"原則として3営業日以内にご連絡させていただきます。\n".
"We are sorry it takes about 3days to reply it.\n
返信がないときはお手数ですが、お問い合わせ番号を添えて再度ご連絡いただけますと幸いです。\n
If you don't get any response, please contact us again with your inquiry number.\n\n".
"SHABEROO";
$title_EN = "[SHABEROO] Notice of Inquiry reception confirmation./お問い合わせ受付確認のお知らせ";
if (mb_send_mail($_POST['email'], $title_EN, $massage2, "From: SHABEROO Support<contact@shaberoo.com>", "-f contact@shaberoo.com")){
	echo "送信が完了しました";
}else{
	echo "送信に失敗しました";
}
//----------------------
?>


