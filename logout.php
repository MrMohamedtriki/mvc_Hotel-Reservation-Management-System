<?php
ob_start();
session_start();
header("Location: index_controlleur.php");
session_destroy();
?>