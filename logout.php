<?php
session_start();
session_destroy();
unset($_SESSION['login']);
header("Location: index.html");

?>