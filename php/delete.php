<?php

  /*Básico para borrar los datos*/
  require("connect.php");


  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $idMov = $_POST["idMov"];

  $sql = "DELETE FROM peliculas WHERE id='$idMov'";

  if($conn->query($sql) === TRUE){

    echo "Elemento borrado correctamente";
  }else{
    echo "Error: ". $sql . "<br>" . $conn->error;
  }


}

$conn->close();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BORRADO BBDD</title>
</head>
<body>
  <a href="./index.html">
    <button>Formulario</button>
  </a>
  <a href="./listado.php">
    <button>Mostrar Películas</button>
  </a>
</body>
</html>