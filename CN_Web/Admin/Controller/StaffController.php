<?php

namespace Controller;


use Model\Database\DBConnect;
use Model\Staff\StaffDb;

class StaffController{
    protected $staffDb;

    public function __construct()
    {
        $db = new DBConnect();
        $this->staffDb = new StaffDb($db->connect());
    }

    public function getStaff($staff_id){
        return $this->staffDb->getStaff($staff_id);
    }

    public function renderChangePassword() {
        include_once("./View/ChangePasswordForm.phtml");
    }

    public function changePassword() {
        $this->staffDb->changePassword($_POST['new_pass']);
    }
}