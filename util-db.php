<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'dianachu_hw3user', 'Pizza101!', 'dianachu_HW3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
