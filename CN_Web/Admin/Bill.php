<?php

include('./Model/Database/DBConnect.php');
include('./Controller/BillController.php');
include('./Model/Bill/BillDb.php');
include('./Controller/DishController.php');
include('./Model/Dish/DishDb.php');
include('./Controller/EventController.php');
include('./Model/Event/EventDb.php');

use Controller\BillController;
$billController = new BillController();

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        $billController->renderBill();
        break;
    case "POST":       
        if (isset($_POST['add'])) {
            $billController->addBill();
        }
        if (isset($_POST['update'])) {
            $billController->updateBill($_POST['eventId'], $_POST['title'], $_POST['description'], $_POST['imgLink']);
        }
        
        $billController->renderBill();
        break;
    default:
        //404;
        break;
}