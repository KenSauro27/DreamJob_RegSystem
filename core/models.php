<?php 
require_once 'dbConfig.php';

function insertIntoNetworkEngineerRegistration($pdo, $full_name, $email_address, $phone_number, $certifications, $networking_skills, $years_in_industry) {
    $sql = "INSERT INTO NetworkEngineerRegistration (full_name, email_address, phone_number, certifications, networking_skills, years_in_industry) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$full_name, $email_address, $phone_number, $certifications, $networking_skills, $years_in_industry]);
    if ($executeQuery) {
        return true;    
    }
}

function seeAllNetworkEngineerRegistrations($pdo) {
    $sql = "SELECT * FROM NetworkEngineerRegistration";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

function getNetworkEngineerRegistrationByID($pdo, $id) {
    $sql = "SELECT * FROM NetworkEngineerRegistration WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$id])) {
        return $stmt->fetch();
    }
}

function updateNetworkEngineerRegistration($pdo, $id, $full_name, $email_address, $phone_number, $certifications, $networking_skills, $years_in_industry) {
    $sql = "UPDATE NetworkEngineerRegistration SET full_name = ?, email_address = ?, phone_number = ?, certifications = ?, networking_skills = ?, years_in_industry = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$full_name, $email_address, $phone_number, $certifications, $networking_skills, $years_in_industry, $id]);
    if ($executeQuery) {
        return true;
    }
}

function deleteNetworkEngineerRegistration($pdo, $id) {
    $sql = "DELETE FROM NetworkEngineerRegistration WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$id]);
    if ($executeQuery) {
        return true;
    }
}
?>
