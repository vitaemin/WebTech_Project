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

    public function addBill($event_id, $time_create, $total, $guest_name, $guest_phone) {
        $sql  ="insert into `bill`(event_id,date,total,status,guest_name, guest_phone) 
        values('$event_id','$time_create','$total','1','$guest_name','$guest_phone');";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

}