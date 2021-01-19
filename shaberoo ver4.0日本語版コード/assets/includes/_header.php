<header class="page_header">
	<h1 class="logo">
        <a href="./"><img src="./assets/images/common/logo.png" alt="SHABEROO"></a>
    </h1>
     
    <form method="post" action="">
     
		<input type="hidden" value="" name="change">
		<input type="submit" class="language_change_text"  value="JP / EN">
	</form>
</header>
<?php

if(isset($_POST['change'])){
	if($_SESSION['language'] == 'ja'){
		$_SESSION['language'] = 'en';
	} else if($_SESSION['language'] == 'en'){
		$_SESSION['language'] = 'ja';
	}
}
?>
<?php
      $filename=basename($_SERVER["PHP_SELF"]);
      $include = './'.$_SESSION['language'].'/'.$filename;	
      include($include);
?>
