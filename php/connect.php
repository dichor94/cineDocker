<?php


/*Código de conexión a la BBDD, se usará la función "required" en los phps que se hagan*/
$servername = "db";
$username = "usuario1";
$password = "contrasenya1";
$dbname = "cine";

//CREAMOS CONEXIÓN

$conn = new mysqli($servername, $username, $password, $dbname);

//VERIFICAMOS LA CONEXIÓN

if($conn->connect_error){
  die("Conexión fallida: " . $conn->connect_error);

}else{

  echo "conexión realizada <br><br>";

}

?>