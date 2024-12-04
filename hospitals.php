<?php
require_once("util-db.php");
require_once("model-hospitals.php");

$pageTitle = "Hospitals";
include "view-header.php";
$doctors=selectHospitals();
include "view-hospitals.php";
include "view-footer.php";
?>
