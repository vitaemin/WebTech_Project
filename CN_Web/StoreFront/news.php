<?php

include('./Model/Database/DBConnect.php');
include('./Controller/EventController.php');
include('./Model/Event/Event.php');
include('./Model/Event/EventDb.php');

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        include_once 'View/news.phtml';
        break;
    default:
        //404;
        break;
}