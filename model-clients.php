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

function updateClient($cName, $cAddress, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `client` set `client_name` = ? , `client_address` = ? where client_id = ?");
        $stmt->bind_param("ssi", $cName, $cAddress, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteClient($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from client where client_id = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
