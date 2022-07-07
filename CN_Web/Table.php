<?php
declare(strict_types=1);

require_once __DIR__ ."/bootstrap.php";

use Controller\TableController;

$tableController = new TableController();

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        $tableController->renderTable();
        break;

    case "POST":
        break;
    default:
        //404;
        break;
}