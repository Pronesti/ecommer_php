<?php
session_start();
include_once("productos.php");
    foreach ($productos as $key => $item) {
        echo "<div class='card m-2 float-left' style='width: 18rem;height: 28rem'>
        <div class='card-body'>
        <img src='";
        echo $item['url'];
        echo "' class='card-img-top' style='width=200px; height:200px;'>
          <h5 class='card-title text-center'>";
        echo $item['name'];
        echo "</h5>";
        echo "<ul class='list-group m-2'>";
        echo "<li class='list-group-item'>";
        echo "Cantidad: " .$item['quantity'];
        echo "</li>";
        echo "<li class='list-group-item'>";
        echo "Precio: $" .$item['price'];
        echo "</li>";
        echo "</ul>";
        echo "<a href='index.php?item=$key' class='btn btn-primary w-100'>Comprar</a>";
        echo "</div></div>";
    }
    ?>