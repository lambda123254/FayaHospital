<?php

require_once("connection.php");
require_once("Model/patient.php");
require_once("../Common/app_context.php");

$data_patient = new Patient();
$data_patient->set_data(
    $_POST['NamaPasientoDB'], 
    null, 
    null, 
    $_POST['AlamattoDB'], 
    $_POST['NoTelptoDB'], 
    null, 
    $_POST['KeluhantoDB'], 
    null, 
    $_POST['EmailtoDB']
);

$context;
if(isset($_GET["context"])) {
    $context = $_GET["context"];
} else {
    $context = "";
}

if($context == AppContext::PATIENT) {
    $sql = "INSERT INTO patients(name, complaint, email, phone_number, address) VALUES('$data_patient->name', '$data_patient->complaint', '$data_patient->email', '$data_patient->phone_number', '$data_patient->address')";
    $result = $con->query($sql);
}

header("location: ../Pages/home?context=$context");

?>