<!-- USE OF COOKIE
 -->
<?php
  setcookie('language', 'english');
?>

<?php
  echo $_COOKIE['language'];
  // english
?>

<!-- USE OF SESSION -->
<?php
  session_start();
  $_SESSION['user_id'] = 42;
  echo $_SESSION['user_id'];
  // 42
?>

<?php
  // use both unset and destroy for compatibility
  // with all browsers and all versions of PHP
  session_unset();
  session_destroy();
?>
