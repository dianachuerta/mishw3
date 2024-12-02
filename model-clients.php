<?php

function selectClients() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT client_id, client_name, client_address FROM `client`");
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
