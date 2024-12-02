<?php
require_once("util-db.php");
require_once("model-clients-by-doctor.php");

$pageTitle = "Clients by Doctor";
include "view-header.php";
$clients=selectClientsByDoctor($_GET['id']);
include "view-clients-by-doctor.php";
include "view-footer.php";
?>
