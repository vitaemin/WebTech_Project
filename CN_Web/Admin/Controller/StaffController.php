<?php

namespace Controller;


use Model\Database\DBConnect;
use Model\Staff\TableDb;

class StaffController{
    protected $staffDb;

    public function __construct()
    {
        $db = new DBConnect();
        $this->staffDb = new TableDb($db->connect());
    }

    public function getStaff($staff_id){
        return $this->staffDb->getStaff($staff_id);
    }
}