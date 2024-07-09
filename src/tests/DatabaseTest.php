<?php

try {
   // Incluir el archivo de configuración para obtener las credenciales de la base de datos
   $config = include(__DIR__ . '../../../.env.php');

   // Crear una nueva instancia de PDO utilizando las credenciales del archivo de configuración
   $pdo = new PDO('mysql:host=' . $config['DB_HOST'] . ';dbname=' . $config['DB_NAME'] . ';charset=utf8', $config['DB_USER'], $config['DB_PASS']);

   // Establecer el modo de errores de PDO para que lance excepciones
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   //echo 'Conexion Exitosa';
   return $pdo;
} catch (Exception $e) {
   echo 'Error: ' . $e->getMessage();
   return null;
}
