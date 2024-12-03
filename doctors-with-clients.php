<?php
require_once("util-db.php");
require_once("model-doctors-with-clients.php");

$pageTitle = "Doctors with Clients";
include "view-header.php";
$doctors=selectDoctors();
include "view-doctors-with-clients.php";
include "view-footer.php";
?>
