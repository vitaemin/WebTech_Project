<?php

namespace Model\Dish;

class DishDb
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getAllDish(){
        $sql = "SELECT * FROM `dish`";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getDishById($dish_id) {
        $sql = "SELECT * FROM `dish` WHERE dish_id = $dish_id";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function updateDish ($dish_id, $dish_name, $dish_description, $dish_price, $dish_image_url) {
        $sql = "UPDATE `dish` 
                SET `name` = '$dish_name', `description` = '$dish_description', `price` = $dish_price, `image_url` = '$dish_image_url' 
                WHERE `dish`.`dish_id` = $dish_id";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function insertDish ($dish_category, $dish_name, $dish_description, $dish_price, $dish_image_url) {
        $sql = "INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`) 
                VALUES (NULL, '$dish_category', '$dish_name', '$dish_description', $dish_price, '$dish_image_url')";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function deleteDishById($dish_id) {
        // $dish_id = intval($dish_id);
        $sql = "DELETE FROM dish WHERE `dish`.`dish_id` = $dish_id";
        // var_dump($dish_id);
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function getAllDishByCategory($category) {
        $sql = "SELECT * FROM `dish` WHERE `dish`.`category` = '$category'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    // public function getTableByCustomer($customer_name){
    //     $sql = "SELECT * FROM `table` WHERE customer_name = '$customer_name'";
    //     $stmt = $this->connect->prepare($sql);
    //     $stmt->execute();
    //     $result = $stmt->fetchAll();

    //     return $result;
    // }

    // public function cancleReserve($table_id){
    //     $sql = "UPDATE `table` SET status=1, customer_name='NULL', phone='NULL', number_people='NULL', time_reserve = 'NULL' WHERE table_id = '$table_id'";
    //     $stmt = $this->connect->prepare($sql);
    //     $stmt->execute();
    // }

}