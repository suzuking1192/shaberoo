<?php 
include('./assets/includes/start.php');

//データ受け取り
$mail 	=	$_POST['mail'];
$pas1 	=	$_POST['pass'];
$pas2 	=	$_POST['pass2'];
$skype =	$_POST['skype'];
$check =	$_POST['check'];
$name 	=	$_POST['name'];
$country =  $_POST['country'];
$nation =   $_POST['national'];
//----------------

$err = 0;
$strlen = mb_strlen($_POST['pass']);
if($_POST['mail'])	{$_SESSION['mail'] = $_POST['mail'];}else{$_SESSION['mail'] = 1;$err++;}
if($_POST['skype'])	{$_SESSION['skyp'] = $_POST['skype'];}else{$_SESSION['skyp'] = 1;$err++;}
if($_POST['name'])	{$_SESSION['name'] = $_POST['name'];}else{$_SESSION['name'] = 1;$err++;}
if($_POST['check'])	{$_SESSION['agre'] = $_POST['check'];}else{$_SESSION['agre'] = 1;$err++;}
if($_POST['pass'])	{$_SESSION['pass'] = $_POST['pass'];}else{$_SESSION['pass'] = 1;$err++;}
if($strlen < 8)												  {$_SESSION['strl'] = 1;$err++;}
if($pas1 != $pas2)											 {$_SESSION['pami'] = 1;$err++;}
if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))		  {$_SESSION['mava'] = 1;$err++;}
if($_POST['country'])	{$_SESSION['coun'] = $_POST['country'];}else{$_SESSION['coun'] = 1;$err++;}
if($_POST['national'])	{$_SESSION['nati'] = $_POST['national'];}else{$_SESSION['nati'] = 1;$err++;}
?>
<?php if ($err != 0) :?>
	<script language="JavaScript">
		<!--
		location.href="./regist.php";
		// -->
	</script>
<?php endif; ?>
<!DOCTYPE html>
<?php if($_SESSION['language'] == "en") :?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員登録ページ ｜ SHABEROO</title>
<meta name="keywords" content="日本語,会話,しゃべろう,SHABEROO,オンライン日本語スクール">
<meta name="description" content="習うより慣れろ！SHABEROOで日本人と毎日しゃべろう！">
<?php elseif($_SESSION['language'] == "ja") :?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration｜ SHABEROO</title>
<meta name="keywords" content="Japanese,conversation,shaberoo,,online school,correction">
<meta name="description" content="An online Japanese classroom to speak one-on-one every day!">
<?php endif; ?>

<?php include($path.'_head.php'); ?>

<?php include($path.'_ga.php'); ?>
</head>
<body>
<?php include($path.'_header.php'); ?>
