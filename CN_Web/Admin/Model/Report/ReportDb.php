<?php

namespace  Model\Report;

class ReportDb
{
    protected $connect;

    public function  __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getAllBill (){
        $sql = "SELECT * FROM `bill` WHERE status = 1";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }


}