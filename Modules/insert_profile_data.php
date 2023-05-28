<?php

require_once("connection.php");
require_once("Model/patient.php");
$uname = $_SESSION['logged_in'];
$data = new Patient();
if(isset($_POST['inputName']) && isset($_POST['inputDOB']) && isset($_POST['inputGender']) && isset($_POST['inputAddress']) && isset($_POST['inputPhone']) && isset($_POST['inputInsurance']) && isset($_POST["inputContext"])) {
    $context = $_POST["inputContext"];
    $randomNumbers = rand(1,100);
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
    if($context == "Rawat Jalan") {
        $sql = "INSERT INTO rawat_jalan(name, dokter, checkinout, phone_number) VALUES('$data->name', 'Dr Agung Mp.L', 'In 25-05-23 / Out 02-06-23', '$data->phone_number')";
        $result = $con->query($sql);
        header('Location: ../Pages/home?context=rawatJalan');
    } else {
        $sql = "INSERT INTO rawat_inap(name, dokter, checkinout, room_no, phone_number) VALUES('$data->name', 'Dr Agung Mp.L', 'In 25-05-23 / Out 02-06-23', '$randomNumbers', '$data->phone_number')";
        $result = $con->query($sql);
        header('Location: ../Pages/home?context=rawatInap');
    }
}


?>