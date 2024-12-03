<?php
require_once("util-db.php");
require_once("model-clients.php");

$pageTitle = "Clients";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add": 
      insertClient($_POST['cName'],$_POST['cAddress']);
      break;
  }
}

$clients=selectClients();
include "view-clients.php";
include "view-footer.php";
?>
