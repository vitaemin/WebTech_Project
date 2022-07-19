<?php

namespace Model\Staff;

class StaffDb
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getStaff($staff_id){
        $sql = "SELECT * FROM staff WHERE staff_id = '$staff_id' ";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

}