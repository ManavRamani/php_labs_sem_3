<?php
// Expire cookies to logout
setcookie("loggedin", "", time() - 3600, "/");
setcookie("username", "", time() - 3600, "/");
header("Location: login.php");
exit;
?>
