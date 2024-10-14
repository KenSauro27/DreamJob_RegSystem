<?php 
require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewRegistrationBtn'])) {
    $full_name = trim($_POST['full_name']);
    $email_address = trim($_POST['email_address']);
    $phone_number = trim($_POST['phone_number']);
    $certifications = trim($_POST['certifications']);
    $networking_skills = trim($_POST['networking_skills']);
    $years_in_industry = trim($_POST['years_in_industry']);

    if (!empty($full_name) && !empty($email_address)) {
        $query = insertIntoNetworkEngineerRegistration($pdo, $full_name, $email_address, $phone_number, $certifications, $networking_skills, $years_in_industry);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Insertion failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editRegistrationBtn'])) {
    $id = $_GET['id'];
    $full_name = trim($_POST['full_name']);
    $email_address = trim($_POST['email_address']);
    $phone_number = trim($_POST['phone_number']);
    $certifications = trim($_POST['certifications']);
    $networking_skills = trim($_POST['networking_skills']);
    $years_in_industry = trim($_POST['years_in_industry']);

    if (!empty($id) && !empty($full_name) && !empty($email_address)) {
        $query = updateNetworkEngineerRegistration($pdo, $id, $full_name, $email_address, $phone_number, $certifications, $networking_skills, $years_in_industry);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteRegistrationBtn'])) {
    $query = deleteNetworkEngineerRegistration($pdo, $_GET['id']);
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Deletion failed";
    }
}
?>