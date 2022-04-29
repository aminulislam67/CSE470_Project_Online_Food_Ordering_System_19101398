<?php include("../../configuration/config.php")?>
<?php
$_SESSION = [];
session_unset();
session_destroy();
header("Location: loginuser.php");
?>
