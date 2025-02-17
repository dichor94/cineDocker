<?php

/*Básico para añadir peliculas*/
require("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $name = $conn->real_escape_string($_POST["nameMov"]);
  $nameDir = $conn->real_escape_string($_POST["nameDir"]);
  $note = $conn->real_escape_string($_POST["noteMov"]);
  $year = $conn->real_escape_string($_POST["yearMov"]);
  $pres = $conn->real_escape_string($_POST["presMov"]);
  $photo = $conn->real_escape_string($_POST["photoMov"]);
  $link = $conn->real_escape_string($_POST["linkMov"]);

  $sql = "INSERT INTO peliculas (titulo, director, nota, anyo, presupuesto, img_base64, url_trailer) VALUE ('$name', '$nameDir', '$note', '$year', '$pres', '$photo', '$link')";

  if($conn->query($sql) === TRUE){

    echo "Usuario añadido correctamente";
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
  <title>AÑADIR EN BBDD</title>
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