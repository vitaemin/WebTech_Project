<?php

include('./Model/Database/DBConnect.php');
include('./Controller/LoginController.php');
include('./Model/Login/LoginDb.php');
include('./View/Login.phtml');

use Controller\LoginController;
$loginController = new LoginController();
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_SESSION['staff'])) {
            unset($_SESSION['staff']);
            session_destroy();
        }
        $loginController->renderLogin();
        break;

    case "POST":
        $loginController->checkStaff();
        break;
    default:
        //404;
        break;
}