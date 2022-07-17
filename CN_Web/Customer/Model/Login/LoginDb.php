<?php

namespace  Model\Login;

class LoginDb
{
    protected $connect;

    public function  __construct($connect)
    {
        $this->connect = $connect;
    }

    public function checkStaff($phone, $password)
    {
        $sql = "SELECT * FROM staff WHERE phone='$phone' AND password='$password'";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

}