<?php

include('./Model/Database/DBConnect.php');
include('./Controller/TableController.php');
include('./Model/Table/Table.php');
include('./Model/Table/TableDb.php');

use Controller\TableController;
$tableController = new TableController();

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        $tableController->renderTable();
        break;

    case "POST":
        break;
    default:
        //404;
        break;
}