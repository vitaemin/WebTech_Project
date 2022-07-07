<?php

namespace Controller;

use Model\Database\DBConnect;
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

}