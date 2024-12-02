<?php
require_once("util-db.php");
require_once("model-clients.php");

$pageTitle = "Clients";
include "view-header.php";
$clients=selectClients();
include "view-clients.php";
include "view-footer.php";
?>
