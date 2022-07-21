<?php

namespace Model\Bill_Dish;

class Bill_DishDb
{
    protected $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    public function getAllBill_Dish() {
        $sql = "SELECT * FROM `bill_dish`;";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    public function addBill_Dish($bill) {
        
    }
}