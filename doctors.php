<?php
require_once("util-db.php");
require_once("model-doctors.php");

$pageTitle = "Doctors";
include "view-header.php"; 
$doctors = selectDoctors();

?>
<style>
    body {
        background-color: #ffebf2; 
    }
</style>

<?php
include "view-doctors.php";  
include "view-footer.php";  
?>
