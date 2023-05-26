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
        $_POST['inputInsurance']
    );
    $sql = "INSERT INTO patients(name, dob, gender, address, phone_number, insurance) VALUES('$data->name', '$data->dob', '$data->gender', '$data->address', '$data->phone_number', '$data->insurance')";
    $result = $con->query($sql);
}

?>