<?php
// app/controllers/LoginController.php

require_once __DIR__ . '/../config/Database.php';

class LoginController
{
   public function login($username, $password)
   {
      $database = new Database();
      $pdo = $database->getConnection();

      if ($pdo === null) {
         echo 'Error en la conexión a la base de datos';
         return;
      }

      try {
         $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE username = :username');
         $stmt->bindParam(':username', $username);
         $stmt->execute();

         $user = $stmt->fetch(PDO::FETCH_ASSOC);

         if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['rol'] = $user['rol'];

            switch ($user['rol']) {
               case 1:
                  header('Location: /src/views/admin/dashboard-admin.php');
                  break;
               case 2:
                  header('Location: /src/views/student/dashboard-student.php');
                  break;
               case 3:
                  header('Location: /src/views/teacher/dashboard-teacher.php');
                  break;
               default:
                  header('Location: /src/views/general/dashboard-general.php');
            }
            exit();
         } else {
            echo 'Credenciales Incorrectas. Intenta de Nuevo';
         }
      } catch (Exception $e) {
         echo 'Error: ' . $e->getMessage();
      }
   }
}
