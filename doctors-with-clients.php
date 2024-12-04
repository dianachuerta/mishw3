<?php
require_once("util-db.php");
require_once("model-doctors-with-clients.php");

$pageTitle = "Doctors with Clients";
include "view-header.php";
$doctors=selectDoctors();
?>
<style>
    body {
        background-color: #ffebf2; 
    }
</style>

<?php

include "view-doctors-with-clients.php";
include "view-footer.php";
?>
