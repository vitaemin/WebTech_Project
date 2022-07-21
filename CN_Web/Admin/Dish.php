<?php

include('./Model/Database/DBConnect.php');
include('./Controller/DishController.php');
include('./Model/Dish/DishModel.php');
include('./Model/Dish/DishDb.php');

use Controller\DishController;
$dishController = new DishController();

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_GET['button_view'])) {
            require_once('./View/Dish/DishDetail.phtml');
        } else if (isset($_GET['button_return'])) {
            require_once('./View/Dish/DishManagement.phtml');
        } 
        else {
            $dishController->renderDish();
        }
        break;
    case "POST":
        if (isset($_POST['add_button'])) {
            require_once('./View/Dish/DishAdd.phtml');
        } else if (isset($_POST['button_edit'])) {
            require_once('./View/Dish/DishEdit.phtml');
        }
        break;
    // case "POST":
    //     if(isset($_POST['reserve_Dish'])){
    //         $tableController->reserveTable();
    //     }
    //     break;
    default:
        //404;
        break;
}