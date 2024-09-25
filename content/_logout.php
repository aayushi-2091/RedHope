<?php
session_start();
session_unset();
session_destroy();

$redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header("Location: $redirect_url");
exit();
?>