<?php

namespace Model\Table;

class TableDb
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }
    public function addTable($number){
        $sql = "INSERT INTO `table`(`table_id`,`number`) VALUES ($number, $number) ";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }
    public function deleteTable($table_id){
        $sql = "DELETE FROM `table` WHERE table_id = '$table_id'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }
    public function getAllTable(){
        $sql = "SELECT * FROM `table` ";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    public function getTableById($table_id){
        $sql = "SELECT * FROM `table` WHERE table_id = '$table_id'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    public function reserveTable($table_id, $customer_name, $phone, $number_people, $time_reserve){
        $sql = "UPDATE `table` SET status=1, customer_name='$customer_name', phone='$phone', number_people='$number_people', time_reserve = '$time_reserve' WHERE table_id = '$table_id'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function getTableByCustomer($customer_name){
        $sql = "SELECT * FROM `table` WHERE customer_name = '$customer_name'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    public function cancelReserve($table_id){
        $sql = "UPDATE `table` SET status=0, customer_name='NULL', phone='NULL', number_people='NULL', time_reserve = 'NULL' WHERE table_id = '$table_id'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function updateReserve($table_id, $status, $customer_name, $phone, $number_people, $time_reserve){
        $sql = "UPDATE `table` SET status='$status', customer_name='$customer_name', phone='$phone', number_people='$number_people', time_reserve = '$time_reserve' WHERE table_id = '$table_id'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

    public function updateReserveStatus($table_id, $status){
        $sql = "UPDATE `table` SET status='$status' WHERE table_id = '$table_id'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }
}