<?php

include('./Model/Database/DBConnect.php');
include('./Controller/StaffController.php');
include('./Controller/LoginController.php');
include('./Model/Login/LoginDb.php');
include('./Model/Staff/Staff.php');
include('./Model/Staff/StaffDb.php');

use Controller\StaffController;
use Controller\LoginController;
$staffController = new StaffController();
$loginController = new LoginController();

switch ($_SERVER['REQUEST_METHOD']) {
  case "GET":
      $staffController->renderChangePassword();
      break;
  case "POST":
      $staffController->changePassword();
      LoginController->renderLogin();
      break;
  default:
      //404;
      break;  
}