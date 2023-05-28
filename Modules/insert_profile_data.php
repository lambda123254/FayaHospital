<?php

require_once("connection.php");
require_once("Model/patient.php");
$uname = $_SESSION['logged_in'];
$data = new Patient();
if(isset($_POST['inputName']) && isset($_POST['inputDOB']) && isset($_POST['inputGender']) && isset($_POST['inputAddress']) && isset($_POST['inputPhone']) && isset($_POST['inputInsurance'])) {
    $data->set_data(
        $_POST['inputName'],
        $_POST['inputDOB'],
        $_POST['inputGender'],
        $_POST['inputAddress'],
        $_POST['inputPhone'],
        $_POST['inputInsurance'],
        "randomize complaint",
        null,
        "randomize@gmail.com",
    );
    $sql = "INSERT INTO patients(name, dob, gender, address, phone_number, insurance, complaint, email, type) VALUES('$data->name', '$data->dob', '$data->gender', '$data->address', '$data->phone_number', '$data->insurance', '$data->complaint', '$data->email', '$data->type')";
    $result = $con->query($sql);
}

?>