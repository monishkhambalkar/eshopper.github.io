<?php
session_start();
unset($_SESSION['email']);
session_destroy($_SESSION['email']);
unset($_SESSION["shopping_cart"]);
session_destroy($_SESSION["shopping_cart"]);
header('location:index.php');
die();
