<?php include('./assets/includes/start.php'); ?>
<!DOCTYPE html>
<?php if($_SESSION['language'] == "en") :?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>決済ページ ｜ SHABEROO</title>
<meta name="keywords" content="日本語,会話,しゃべろう,SHABEROO,オンライン日本語スクール,会員登録">
<meta name="description" content="習うより慣れろ！SHABEROOで日本人と毎日しゃべろう！">
<?php elseif($_SESSION['language'] == "ja") :?>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment ｜ SHABEROO</title>
<meta name="keywords" content="Japanese,conversation,speaking,shaberoo,online school">
<meta name="description" content="An online Japanese classroom to speak one-on-one every day!">
<?php endif; ?>
<?php include($path.'_head.php'); ?>

<!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv-printshiv.min.js"></script>
<![endif]-->
<?php include($path.'_ga.php'); ?>
</head>
<body>
<?php include($path.'_header.php'); ?>
