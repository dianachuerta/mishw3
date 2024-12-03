<?php

function selectConsultationsByClient($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.client_id, client_name, client_address, room, day_time FROM `client` c JOIN consultation p on p.consultation_id = c.client_id WHERE p.client_id=?");
      $stmt->bind_param("i", $cid );
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
