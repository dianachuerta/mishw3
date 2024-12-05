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

function insertDoctor($dName, $dSpecialization) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `doctor` ( `doctor_name`, `specialization`) VALUES (?, ?)");
        $stmt->bind_param("ss", $dName, $dSpecialization);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateDoctor($dName, $dSpecialization, $did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `doctor` set `doctor_name` = ? , `specialization` = ? where doctor_id = ?");
        $stmt->bind_param("ssi", $dName, $dSpecialization, $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteDoctor($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from doctor where doctor_id = ?");
        $stmt->bind_param("i", $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
