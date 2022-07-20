<?php

namespace Model\Table;

class TableCustomerDb
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }
    public function addTableReserve($customer_name, $phone, $number_people, $time_reserve){
        $sql = "INSERT INTO `table_reserve_customer`(`customer_name`,`phone`, `number_people`, `time_reserve`) VALUES ('$customer_name', '$phone', '$number_people', '$time_reserve') ";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }

}