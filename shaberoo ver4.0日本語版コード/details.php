<?php include('./assets/includes/start.php'); ?>
<!DOCTYPE html>
<?php if($_SESSION['language'] == "en") :?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>SHABEROOとは | SHABEROO</title>
<meta name="keywords" content="日本語,会話,しゃべろう,SHABEROO,オンライン日本語スクール,SHABEROOとは">
<meta name="description" content="習うより慣れろ！SHABEROOで日本人と毎日しゃべろう！">
<?php elseif($_SESSION['language'] == "ja") :?>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Details of SHABEROO | SHABEROO</title>
<meta name="keywords" content="Japanese,conversation,speaking,SHABEROO,online,school">
<meta name="description" content="An online Japanese classroom to speak one-on-one every day!">
<?php endif; ?>
<?php include($path.'_head.php'); ?>

<?php include($path.'_ga.php'); ?>
</head>
<body>
<?php include($path.'_header.php');?>
