<?php
session_start();
require_once('./assets/includes/_path.php');
 
//データ受け取り
$mail   =   $_POST['mail'];
$pas1   =   $_POST['pass'];
$pas2   =   $_POST['pass2'];
$skype =	$_POST['skype'];
$check =	$_POST['check'];
$name   =   $_POST['name'];
//----------------
 
$err = 0;
$strlen = mb_strlen($_POST['pass']);
if($_POST['mail'])  {$_SESSION['mail'] = $_POST['mail'];}else{$_SESSION['mail'] = 1;$err++;}
if($_POST['skype']) {$_SESSION['skyp'] = $_POST['skype'];}else{$_SESSION['skyp'] = 1;$err++;}
if($_POST['name'])  {$_SESSION['name'] = $_POST['name'];}else{$_SESSION['name'] = 1;$err++;}
if($_POST['check']) {$_SESSION['agre'] = $_POST['check'];}else{$_SESSION['agre'] = 1;$err++;}
if($_POST['pass'])  {$_SESSION['pass'] = $_POST['pass'];}else{$_SESSION['pass'] = 1;$err++;}
if($strlen < 8)                                            	{$_SESSION['strl'] = 1;$err++;}
if($pas1 != $pas2)                                       	{$_SESSION['pami'] = 1;$err++;}
if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))    	{$_SESSION['mava'] = 1;$err++;}
?>
<?php if ($err != 0) :?>
    <script language="JavaScript">
        <!--
        location.href="./regist.php";
        // -->
    </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Registration｜ SHABEROO</title>
<meta name="keywords" content="Japanese,conversation,shaberoo,,online school,correction">
<meta name="description" content="An online Japanese classroom to speak one-on-one every day!">
<?php include($path.'_head.php'); ?>
 
<?php include($path.'_ga.php'); ?>
</head>
<body>
<?php include($path.'_header.php'); ?>
<main class="page_main">
    <div class="container">
        <section class="register_page_section">
            <h1 class="page_section_title">Registration</h1>
            <div class="page_section_contents">
                <div class="register_form_block">
                    <ol class="register_step">
                        <li><i class="step_num">STEP1</i><span class="step_title">Comfirmation of your information</span></li>
                        <li class="active"><i class="step_num">STEP2</i><span class="step_title">Confirmation of the contents</span></li>
                        <li><i class="step_num">STEP3</i><span class="step_title">Completion of registration</span></li>
                    </ol>
                    <div id="registerBlock" class="control_block_container">
                        <div class="control_block">
                            <label class="control_label">Name</label>
                            <div class="controls">
                                <span><?php echo $name;?></span>
                            </div>
                        </div>
                        <div class="control_block">
                            <label class="control_label">Mail address</label>
                            <div class="controls">
                                <span><?php echo $mail;?></span>
                            </div>
                        </div>
                        <div class="control_block">
                            <label class="control_label">Password</label>
                            <div class="controls">
                                <span>We don`t show your password here because of your safty.</span>
                            </div>
                        </div>                                                                            	
                        <div class="control_block">
                            <label class="control_label">Skype id<span class="required">*</span></label>
                            <div class="controls">
                                <span><?php echo $skype;?></span>
                            </div>
                        </div>
                        <ul class="check_btns">
                            <li><a href="javascript:history.back();" class="back_to_btn">back</a></li>
                            <li><a href="./db_regist.php" class="submit_btn">submit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php include($path.'_footer.php'); ?>
<?php include($path.'_foot_script.php'); ?>
</body>
</html>

