<?php

namespace Controller;

use Model\Database\DBConnect;
// use Model\Dish\DishModel;
use Model\Dish\DishDb;

class DishController{
    protected $dishDb;

    public function __construct()
    {
        $db = new DBConnect();
        $this->dishDb = new DishDb($db->connect());
    }

    public function renderDish()
    {
        include_once './View/Dish/DishManagement.phtml';
    }
    public function getAllDish(){
        return $this->dishDb->getAllDish();
    }

    public function getDishById($dish_id) {
        return $this->dishDb->getDishById($dish_id);
    }
    public function updateDish ($dish_id, $dish_name, $dish_description, $dish_price, $dish_image_url) {
        return $this->dishDb->updateDish($dish_id, $dish_name, $dish_description, $dish_price, $dish_image_url);
    }

    public function insertDish ($dish_category, $dish_name, $dish_description, $dish_price, $dish_image_url) {
        return $this->dishDb->insertDish ($dish_category, $dish_name, $dish_description, $dish_price, $dish_image_url);
    } 

    public function deleteDishById($dish_id) {
        return $this->dishDb->deleteDishById($dish_id);
    }



    // public function getTableById($table_id){
    //     return $this->tableDb->getTableById($table_id);
    // }
    // public function reserveDishes(){
    //     $customer_name = $_POST['customer_name'];
    //     $phone = $_POST['phone'];
    //     $number_people = $_POST['number_people'];
    //     $time_reserve = $_POST['time_reserve'];
    //     $tables = $this->getAllDishes();
    //     foreach ($tables as $table){
    //         if(isset($_POST[$table['table_id']])){
    //             $this->tableDb->reserveTable($table['table_id'], $customer_name, $phone, $number_people, $time_reserve);
    //         }
    //     }
    //     header('Location: Table.php');exit;
    // }

    // public function getTableByOtherTable($table_id){
    //     $table = $this->getTableById($table_id);
    //     return $this->tableDb->getTableByCustomer($table[0]['customer_name']);
    // }

}