<?php
// app/http/LoginHandler.php

require_once __DIR__ . '../controllers/LoginController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $loginController = new LoginController();
   $loginController->login($username, $password);
}
