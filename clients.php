<?php
require_once("util-db.php");
require_once("model-clients.php");

$pageTitle = "Clients";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add": 
      if (insertClient($_POST['cName'],$_POST['cAddress'])) {
      echo '<div class="alert alert-success" role="alert"> A client has been added!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;
  }
}

$clients=selectClients();
include "view-clients.php";
include "view-footer.php";
?>
