<?php

namespace Controller;

use Model\Database\DBConnect;
//use Model\Event\Event;
use Model\Dish\DishDb;

class DishController {
    protected $dishDb;

    public function __construct() {
        $db = new DBConnect();
        $this->dishDb = new DishDb($db->connect());
    }

    public function renderEvent() {
        include_once './View/menu.phtml';
    }

    public function getAllDish() {
        return $this->dishDb->getAllDish();
    }

    public function getAllDishByCategory($category) {
        return $this->dishDb->getAllDishByCategory($category);
    }
}