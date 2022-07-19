<?php

namespace Controller;

use Model\Database\DBConnect;
use Model\Event\Event;
use Model\Event\EventDb;

class EventController{
    protected $eventDb;

    public function __construct() {
        $db = new DBConnect();
        $this->eventDb = new EventDb($db->connect());
    }

    public function renderEvent() {
        include_once './View/news.phtml';
    }

    public function getAllEvent() {
        return $this->eventDb->getAllEvent();
    }    
}