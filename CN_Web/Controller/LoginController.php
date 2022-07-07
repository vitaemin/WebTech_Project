<?php

namespace Controller;

use Model\Database\DBConnect;
use Model\Login\LoginDb;

class LoginController
{
    protected $loginDb;

    public function __construct()
    {
        $db = new DBConnect();
        $this->loginDb = new LoginDb($db->connect());
    }

    public function renderLogin()
    {
        include_once ROOT_PATH . '/View/Login.phtml';
    }

    public function checkStaff(){
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $stmt = $this->loginDb->checkStaff($phone, $password);
        $count = $stmt->rowCount();

        if($count > 0){
            session_start();
            $_SESSION['staff'] = $stmt->fetchAll();
            header('Location: Table.php');exit;
        }else{
            $err = "Số điện thoại hoặc mật khẩu không chính xác";
            session_start();
            $_SESSION["err"]= $err;
//                var_dump($_SESSION["err"]);exit;
            header('Location: Login.php');exit;
        }
    }
}