<?php

include('./Model/Database/DBConnect.php');
include('./Controller/TableCustomerController.php');
include('./Model/Table/TableCustomerDb.php');

use Controller\TableCustomerController;
$tableController = new TableCustomerController();
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        include_once 'View/index.phtml';
        break;
    case "POST":
        if(isset($_POST['reserve_table'])){
            $tableController->addTableReserve();
        }
        break;
    default:
        //404;
        break;
}