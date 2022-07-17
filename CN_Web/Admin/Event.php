<?php

include('./Model/Database/DBConnect.php');
include('./Controller/EventController.php');
include('./Model/Event/Event.php');
include('./Model/Event/EventDb.php');

use Controller\EventController;
$eventController = new EventController();

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        $eventController->renderEvent();
        break;
    case "POST":       
        if (isset($_POST['add'])) {
            $eventController->addEvent();         
        }
        if (isset($_POST['update'])) {
            $eventController->updateEvent($_POST['eventId'], $_POST['title'], $_POST['description'], $_POST['imgLink']);
        }
        if (isset($_POST['delete'])) {
            $eventController->deleteEvent($_POST['eventId2']);
        }
        
        $eventController->renderEvent();
        break;
    default:
        //404;
        break;
}