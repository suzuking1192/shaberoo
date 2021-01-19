<?php header("Cache-Control: private");
session_cache_limiter('none');
	  session_start();
	  require_once('./assets/includes/_path.php');
      require_once($path.'_lang.php');
?>
