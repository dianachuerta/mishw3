<?php
require_once("util-db.php");
require_once("model-doctors.php");

$pageTitle = "Patients";
include "view-header.php";
$patients=selectPatients();
include "view-patients.php";
include "view-footer.php";
?>
