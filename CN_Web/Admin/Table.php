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
        if(isset($_POST['reserve_table'])){
            $tableController->reserveTable();
        } elseif (isset($_POST['update-reserve'])){
            $tableController->updateReserve();
        } elseif (isset($_POST['cancel-reserve-all'])){
            $tableController->cancelReserveAll();
        } elseif (isset($_POST['add_table'])){
            $tableController->addTable();
        } elseif (isset($_POST['delete_table'])){
            $tableController->deleteTable();
        } elseif (isset($_POST['delete_table_customer_reserve'])){
            $tableController->deleteTableCustomerReserve();
        }
        break;
    default:
        //404;
        break;
}