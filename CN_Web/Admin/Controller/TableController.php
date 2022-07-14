<?php

namespace Controller;

use Model\Database\DBConnect;
use Model\Table\Table;
use Model\Table\TableDb;

class TableController{
    protected $tableDb;

    public function __construct()
    {
        $db = new DBConnect();
        $this->tableDb = new TableDb($db->connect());
    }

    public function renderTable()
    {
        include_once './View/Table.phtml';
    }
    public function getAllTable(){
        return $this->tableDb->getAllTable();
    }

    public function getTableById($table_id){
        return $this->tableDb->getTableById($table_id);
    }
    public function reserveTable(){
        $customer_name = $_POST['customer_name'];
        $phone = $_POST['phone'];
        $number_people = $_POST['number_people'];
        $time_reserve = $_POST['time_reserve'];
        $tables = $this->getAllTable();
        foreach ($tables as $table){
            if(isset($_POST[$table['table_id']])){
                $this->tableDb->reserveTable($table['table_id'], $customer_name, $phone, $number_people, $time_reserve);
            }
        }
        header('Location: Table.php');exit;
    }

    public function getTableByOtherTable($table_id){
        $table = $this->getTableById($table_id);
        return $this->tableDb->getTableByCustomer($table[0]['customer_name']);
    }

}