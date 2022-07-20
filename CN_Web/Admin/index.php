<?php

include('./Model/Database/DBConnect.php');
include('./Controller/DishController.php');
include('./Model/Dish/DishDb.php');
include('./View/Dish/DishManagement.phtml');
include('./Model/Dish/DishModel.php');

// include('./View/Dish/DishDetail.phtml');


use Controller\DishController;
$dishController = new DishController();
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        $dishController->renderDish();
        break;

    case "POST":
        $loginController->checkStaff();
        break;
    default:
        //404;
        break;
}