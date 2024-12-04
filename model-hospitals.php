<?php

function selectClients() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT hospital_id, hospital_name, hospital_location FROM `hospital`");
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
