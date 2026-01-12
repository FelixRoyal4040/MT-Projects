<?php
session_start();

$_SESSION = [];

session_destroy();

header("Location: ../../../Login-Registration/login.php"); 

exit;