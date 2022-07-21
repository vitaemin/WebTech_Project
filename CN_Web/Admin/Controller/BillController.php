<?php

namespace Controller;

use Model\Database\DBConnect;
use Model\Bill\BillDb;
use Model\Event\EventDb;


class BillController{
    protected $billDb;
    protected $eventDb;

    public function __construct() {
        $db = new DBConnect();
        $this->billDb = new BillDb($db->connect());
        $this->eventDb = new EventDb($db->connect());
    }

    public function renderBill() {
        include_once './View/Bill.phtml';
    }

    public function getAllBill() {
        return $this->billDb->getAllBill();
    }

    public function addBill() {
        $bill = $_POST;
        $discount_rate = $bill['discount_rate'];
        $time_create = date('Y-m-d H:i:s');
        // var_dump($time_create);
        $total = $_POST['total'];
        $guest_name = $bill['guest_name'];
        $guest_phone = $bill['guest_phone'];
        $this->billDb->addBill($discount_rate, $time_create, $total, $guest_name, $guest_phone);
    }

    public function getEventDiscount($eventId) {
        return $this->eventDb->getEventDiscount($eventId);
        
    }

}