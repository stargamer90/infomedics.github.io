<?php

session_start();

unset($_SESSION['ngo_name']);
session_destroy();

header("Location:login.php");
exit;

?>	