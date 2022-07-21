<?php

namespace Model\Dish;

class DishModel {
    protected $dish_id;
    protected $category;
    protected $description;
    protected $name;
    protected $price;
    protected $image;

    public function __construct($dish_id, $category, $name, $description,  $price, $image_url)
    {
        $this->dish_id = $dish_id;
        $this->category = $category;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image_url = $image_url;
    }

    public function getID() {
        return $this->dish_id;
    }
    public function getName() {
        return $this->name;
    }
    public function getCategory() {
        return $this->category;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getImageUrl() {
        return $this->image_url;
    }
}