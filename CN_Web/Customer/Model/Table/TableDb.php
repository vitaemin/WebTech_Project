<?php

namespace Model\Table;

class TableDb
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
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

    public function cancleReserve($table_id){
        $sql = "UPDATE `table` SET status=1, customer_name='NULL', phone='NULL', number_people='NULL', time_reserve = 'NULL' WHERE table_id = '$table_id'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

}