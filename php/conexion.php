<?php

function conexion()
{
  // Define las variables de conexión a la base de datos.
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "chatbot_v2";

  // Crea un nuevo objeto PDO.
  $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $pdo;
}

?>