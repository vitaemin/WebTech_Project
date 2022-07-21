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
        include_once './View/Event.phtml';
    }

    public function getAllEvent() {
        return $this->eventDb->getAllEvent();
    }

    public function addEvent() {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $imgLink = $_POST['imgLink'];
        if ((strlen($title) > 0) && (strlen($description) > 0) && (strlen($imgLink) > 0)) {
            $this->eventDb->addEvent($title, $description, $imgLink);
        }
    }

    public function updateEvent($eventId, $title, $description, $imgLink) {
        if (strlen($title) > 0) {
            $this->eventDb->updateTitleEvent($eventId, $title);
        }
        if (strlen($description) > 0) {
            $this->eventDb->updateDescriptionEvent($eventId, $description);
        }
        if (strlen($imgLink) > 0) {
            $this->eventDb->updateImgLinkEvent($eventId, $imgLink);
        }
    }

    public function deleteEvent($eventId) {
        $this->eventDb->deleteEvent($eventId);
    }
}