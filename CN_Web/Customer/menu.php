<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        include_once 'View/menu.phtml';
        break;
    default:
        //404;
        break;
}