<?php
session_start();
include_once("productos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
<?php include_once("navbar.php"); 
if(count($_SESSION['carrito']) < 1){
    echo "<h1 class='text-center mt-5'> No hay elementos</h1>";
}else{?>
<div class="card m-2">
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fotos</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>   
<?php
$total=0;
foreach ($_SESSION['carrito'] as $posicion => $itemKey) {
    foreach($productos as $key => $item){
        if($key == $itemKey){
            echo "<tr>
            <th scope='row'>";
            echo $key;
            echo "</th>
            <td>";
            echo "<img src='";
            echo $item['url'];
            echo "' style='width:70px;border-radius:100%'></td><td>";
            echo $item['name'];
            echo "</td>
            <td>";
            echo $item['price'];
            echo "</td>
            <td>";
            echo "<a class='btn btn-outline-danger' href='eliminarDelCarrito.php?item=" . $posicion . "'> X </a>";
            echo "</td>
            </tr>";
            $total += $item['price'];
        }
    }    
}
            echo "<tr>
            <td>Total:</td>
            <td></td>
            <td></td>
            <td>";
            echo "$" . $total;
            echo "</td>
            <td></td>
            </tr>";
}
?>
  </tbody>
</table>
</div>
</body>
</html>

    