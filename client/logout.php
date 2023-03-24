<?php

session_start();

unset($_SESSION['ngo_name']);
session_destroy();

header("Location:../client/login/login.php");
exit;

?>	