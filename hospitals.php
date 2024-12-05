<?php
require_once("util-db.php");
require_once("model-hospitals.php");

$pageTitle = "Hospitals";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add": 
      if (insertHospital($_POST['hName'],$_POST['hLocation'])) {
      echo '<div class="alert alert-success" role="alert"> A hospital has been added!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;

     case "Edit": 
      if (updateHospital($_POST['hName'],$_POST['hLocation'],$_POST['hid'])) {
      echo '<div class="alert alert-success" role="alert"> A hospital has been edited!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;
    
      case "Delete": 
      if (deleteHospital($_POST['hid'])) {
      echo '<div class="alert alert-success" role="alert"> A hospital has been deleted!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;
   
  }
}

$hospitals=selectHospital();
include "view-hospitals.php";
include "view-footer.php";
?>
