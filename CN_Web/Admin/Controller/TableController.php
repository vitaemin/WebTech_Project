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

    public function addTable(){
        $number = $_POST['number'];
        $tables = $this->getAllTable();
        $addtable = true;
        foreach ($tables as $table){
            if($number == $table['number']){
                $addtable = false;
                break;
            }
        }
        if($addtable){
            $this->tableDb->addTable($number);
            header('Location: Table.php?add_table');exit;
        }else{
            $err = "Số bàn đã tồn tại";
            session_start();
            $_SESSION["err"]= $err;
            header('Location: Table.php?add_table');exit;
        }
    }
    public function deleteTable(){
        $tables = $this->getAllTable();
        foreach ($tables as $table){
            if(isset($_POST[$table['table_id']])){
                if($table['status'] == 1 || $table['status'] == 2){
                    $err = "Không thể xóa bàn đang được đặt hoặc sử dụng";
                    session_start();
                    $_SESSION["err"]= $err;
                    header('Location: Table.php?delete_table');exit;
                } else{
                    $this->tableDb->deleteTable($table['table_id']);
                    header('Location: Table.php?delete_table');exit;
                }
            }
        }
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

    public function updateReserve(){
        $table_id = $_POST['table_id'];
        $status = $_POST['status'];
        $customer_name = $_POST['customer_name'];
        $phone = $_POST['phone'];
        $number_people = $_POST['number_people'];
        $time_reserve = $_POST['time_reserve'];
        $tables = $this->getAllTable();
        $grouptable = $this->getTableByOtherTable($table_id);
        foreach ($tables as $table){
            if(isset($_POST[$table['table_id']])){
                $this->tableDb->updateReserve($table['table_id'], $status, $customer_name, $phone, $number_people, $time_reserve);
            }
        }
        foreach ($grouptable as $tablereserve){
            if (!isset($_POST[$tablereserve['table_id']])){
                $this->tableDb->cancelReserve($tablereserve['table_id']);
            }
        }
        header('Location: Table.php');exit;
    }

    public function cancelReserveAll(){
        $table_id = $_POST['cancel-reserve-all'];
        $grouptable = $this->getTableByOtherTable($table_id);

        foreach ($grouptable as $table){
            $this->tableDb->cancelReserve($table['table_id']);
        }
        header('Location: Table.php');exit;
    }


}