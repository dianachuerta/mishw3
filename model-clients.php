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

function insertClient($cName, $cAddress) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `client` ( `client_name`, `client_address`) VALUES (?, ?)");
        $stmt->bind_param("ss", $cName, $cAddress);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateClient($cName, $cAddress) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `client` ( `client_name`, `client_address`) VALUES (?, ?)");
        $stmt->bind_param("ss", $cName, $cAddress);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertClient($cName, $cAddress) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `client` ( `client_name`, `client_address`) VALUES (?, ?)");
        $stmt->bind_param("ss", $cName, $cAddress);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
