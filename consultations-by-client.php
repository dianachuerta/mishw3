<?php
require_once("util-db.php");
require_once("model-consultations-by-client.php");

$pageTitle = "Consultations by client";
include "view-header.php";
$consultations=selectConsultationsByClient($_POST['cid']);

?>
<style>
    body {
        background-color: #ADD8E6; 
    }
</style>

<?php


include "view-consultations-by-client.php";
include "view-footer.php";
?>
