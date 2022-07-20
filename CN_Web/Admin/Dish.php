<?php

include('./Model/Database/DBConnect.php');
include('./Controller/DishController.php');
// include('./Model/Dish/DishModel.php');
include('./Model/Dish/DishDb.php');

use Controller\DishController;
$dishController = new DishController();

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (isset($_GET['button_view'])) {
            require_once('./View/Dish/DishDetail.phtml');
        } else if (isset($_GET['button_return'])) {
            require_once('./View/Dish/DishManagement.phtml');
        } else if (isset($_GET['button_edit'])) {
            require_once('./View/Dish/DishEdit.phtml');
        } 
        else {
            $dishController->renderDish();
            require_once('./View/Dish/DishEdit.phtml');
        }
        break;
    case "POST":
        if (isset($_POST['button_add'])) {
            
            require_once('./View/Dish/DishAdd.phtml');
        } else if (isset($_POST['button_add_confirm'])) {
            // var_dump($_POST['dish-category']);
            // var_dump($_POST['dish-name']);
            // var_dump($_POST['dish-price']);
            // var_dump($_POST['dish-description']);
            // var_dump($_POST['dish-image']);
            if (($_POST['dish-category']) && ($_POST['dish-name']) && ($_POST['dish-price']) && ($_POST['dish-description']) && ($_POST['dish-image'])) {
                // var_dump("done");
                $category = $_POST['dish-category'];
                $name = $_POST['dish-name'];
                $description = $_POST['dish-description'];
                $price = $_POST['dish-price'];
                $image_url = $_POST['dish-image'];
                $dishController->insertDish($category, $name, $description, $price, $image_url);
            }
            require_once('./View/Dish/DishAdd.phtml');
        } else if (isset($_POST['button_edit_confirm'])) {
            var_dump($_POST['dish-category']);
            var_dump($_POST['dish-name']);
            var_dump($_POST['dish-price']);
            var_dump($_POST['dish-description']);
            var_dump($_POST['dish-image']);
            if (($_POST['dish_id']) && ($_POST['dish-name']) && ($_POST['dish-price']) && ($_POST['dish-description']) && ($_POST['dish-image'])) {
                // var_dump("done");
                $dish_id = $_POST['dish_id'];
                $name = $_POST['dish-name'];
                $description = $_POST['dish-description'];
                $price = $_POST['dish-price'];
                $image_url = $_POST['dish-image'];
                // $dishController->insertDish($dish_id, $name, $description, $price, $image_url);
            }
            $dishController->updateDish($dish_id, $name, $description, $price, $image_url);
            require_once('./View/Dish/DishEdit.phtml');
        } else if (isset($_POST['button_delete'])) {
            // var_dump($_POST['dish_delete_id']);
            $dishController->deleteDishById($_POST['dish_delete_id']);
            require_once('./View/Dish/DishManagement.phtml');
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