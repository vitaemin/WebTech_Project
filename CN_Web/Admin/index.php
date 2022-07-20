<?php
include('./Model/Database/DBConnect.php');
include('./Controller/LoginController.php');
include('./Model/Login/LoginDb.php');
include('./Controller/TableController.php');
include('./Model/Table/TableDb.php');

use Controller\LoginController;
use Controller\TableController;

$tableController = new TableController();
$loginController = new LoginController();
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        $loginController->renderLogin();

        break;

    case "POST":
        $loginController->checkStaff();
        break;
    default:
        //404;
        break;
}