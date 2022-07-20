<?php

namespace Controller;

use Model\Database\DBConnect;
use Model\Table\TableCustomerDb;

class TableCustomerController{
    protected $tableCustomerDb;

    public function __construct() {
        $db = new DBConnect();
        $this->tableCustomerDb = new TableCustomerDb($db->connect());
    }

    public function renderTable() {
        include_once './View/table.phtml';
    }

    public function addTableReserve() {
        $customer_name = $_POST['customer_name'];
        $phone = $_POST['phone'];
        $number_people = $_POST['number_people'];
        $time_reserve = $_POST['time_reserve'];
        $this->tableCustomerDb->addTableReserve($customer_name, $phone, $number_people, $time_reserve);
        header('Location: table.php');exit;
    }
}