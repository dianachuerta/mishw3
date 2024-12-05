<?php

function selectHospital() {
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

function insertHospital ($hName, $hLocation) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hospital` ( `hospital_name`, `hospital_location`) VALUES (?, ?)");
        $stmt->bind_param("ss", $hName, $hLocation);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateHospital($hName, $hLocation, $hid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `hospital` set `hospital_name` = ? , `hospital_location` = ? where hospital_id = ?");
        $stmt->bind_param("ssi", $hName, $hLocation, $hid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteHospital($hid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from hospital where hospital_id = ?");
        $stmt->bind_param("i", $hid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
