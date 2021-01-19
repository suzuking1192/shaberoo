<?php
session_start();
echo $_SERVER['HTTP_REFERER'];
if ($_SERVER['HTTP_REFERER'] != "https://www.shaberoo.com/check"){
	header("Location: ./");
}

//無料会員登録
date_default_timezone_set('Asia/Tokyo');
//データ読み込み
require_once ("../data/data/sql-4.php");
require_once ("../data/sql/sql-8.php");
require_once ("../data/student/sql-1.php");
require_once ("./mailbody.php");

//データ受け取り
$mail 	=	$_SESSION['mail'];
$pas1 	=	$_SESSION['pass'];
$skype =	$_SESSION['skyp'];
$name 	=	$_SESSION['name'];
$nation =   $_SESSION['nati'];
$country=   $_SESSION['coun'];
//----------------
//------

//DB接続
$pdo = new PDO($dbn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//パスワード暗号化
$pas = password_hash ( "$pas1", PASSWORD_DEFAULT);
//----------



//データ登録 po1
$prepare1 = $pdo -> prepare("insert into podaci (firstname, skype, mail, hashed_password, nation, residence) values (:name, :skype, :mail, :pas, :nation, :country)");
$prepare1->bindParam(':name', $name, PDO::PARAM_STR);
$prepare1->bindParam(':skype', $skype, PDO::PARAM_STR);
$prepare1->bindParam(':mail', $mail, PDO::PARAM_STR);
$prepare1->bindParam(':pas', $pas, PDO::PARAM_STR);
$prepare1->bindParam(':nation', $nation, PDO::PARAM_STR);
$prepare1->bindParam(':country', $country, PDO::PARAM_STR);
$prepare1->execute();

//DB切断
$pdo = null;
//---------
$body = $name . $body2 .$body3 . $name .$body4;
$sub = "SHABEROO無料会員登録完了のお知らせ";
mb_language("Japanese");
mb_internal_encoding("UTF-8");
?>
<?php if (mb_send_mail("$mail", $sub, $body, "From: SHABEROO<contact@shaberoo.com>", "-f contact@shaberoo.com")) :?> 
<script language="JavaScript">
		<!--
		location.href="./completed.php";
		// -->
	</script>
<?php else:?>
  メールの送信に失敗しました。
<?php endif;?>
<?php
$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();


//おしまい
?>
