<?php

include('./Model/Database/DBConnect.php');
include('./Controller/ReportController.php');
include('./Model/Report/ReportDb.php');

use Controller\ReportController;
$reportController = new ReportController();

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        $reportController->renderReport();
        break;
    case "POST":
        break;
    default:
        //404;
        break;
}