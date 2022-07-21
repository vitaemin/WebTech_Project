<?php

namespace Model\Bill;

class BillDb
{
    protected $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    public function getAllBill() {
        $sql = "SELECT * FROM `bill`;";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    public function addBill($discount_rate, $time_create, $total, $guest_name, $guest_phone) {
        if ($discount_rate=="") $discount_rate=null;
        $sql  ="insert into `bill`(discount_rate,time_create,total,status,guest_name, guest_phone) 
        values('$discount_rate','$time_create','$total','1','$guest_name','$guest_phone');";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

}