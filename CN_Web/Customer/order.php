<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        include_once 'View/order.phtml';
        break;
    default:
        //404;
        break;
}