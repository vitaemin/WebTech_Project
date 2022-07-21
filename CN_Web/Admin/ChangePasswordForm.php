<?php
switch ($_SERVER['REQUEST_METHOD']) {
  case "GET":
      include_once("./View/ChangePasswordForm.phtml");
      break;
  default:
      //404;
      break;
}