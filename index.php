<?php
session_start();

if(!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios'] = array();
    }
if(!$_SESSION['isLogged']){
    header("Location: loginForm.php");
}
if(isset($_GET['item'])){
    $_SESSION['carrito'][] = $_GET['item'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-COMMERCE</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
    <?php include_once("navbar.php"); ?>
    <?php include_once("listarProductos.php");?>
</body>
</html>