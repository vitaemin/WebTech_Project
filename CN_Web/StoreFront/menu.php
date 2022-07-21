<?php

include('./Model/Database/DBConnect.php');
include('./Controller/DishController.php');
//include('./Model//Event.php');
include('./Model/Dish/DishDb.php');

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        include_once 'View/menu.phtml';
        break;
    default:
        //404;
        break;
}