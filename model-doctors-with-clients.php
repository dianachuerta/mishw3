<?php

function selectDoctors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT doctor_id, doctor_name, specialization FROM `doctor`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectClientsByDoctor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.client_id, client_name, client_address, room, day_time FROM `client` c JOIN consultation p on p.consultation_id = c.client_id WHERE p.doctor_id=?");
      $stmt->bind_param("i", $iid );
      $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}




?>


