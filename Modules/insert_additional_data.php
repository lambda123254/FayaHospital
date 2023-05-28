<?php

require_once("connection.php");
require_once("Model/patient.php");
require_once("Model/doctor.php");
require_once("Model/service.php");
require_once("Model/record.php");
require_once("Model/inout.php");
require_once("../Common/app_context.php");

$data_patient = new Patient();
$data_doctor = new Doctor();
$data_service = new Service();
$data_record = new Record();
$data_inout = new InOut();

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

$data_doctor->set_data($_POST['NamaDoktertoDB'], $_POST['SpesialistoDB'], $_POST['EmailtoDB'], $_POST['NoTelptoDB'], $_POST['AlamattoDB']);
$data_service->set_data($_POST['JenistoDB'], $_POST['JadwaltoDB'], $_POST['BiayatoDB']);
$data_record->set_data($_POST['IDPasientoDB'], $_POST['IDDoktertoDB'], $_POST['KeluhantoDB'], $_POST['DiagnosatoDB'], $_POST['TindakantoDB'], $_POST['ObattoDB']);
$data_inout->set_data($_POST['TanggaltoDB'], $_POST['IDPasientoDB'], $_POST['IDLayanantoDB'], $_POST['IDFasilitastoDB'], $_POST['Masul/KeluartoDB']);
$context;
if(isset($_GET["context"])) {
    $context = $_GET["context"];
} else {
    $context = "";
}

if($context == AppContext::PATIENT) {
    $sql = "INSERT INTO patients(name, complaint, email, phone_number, address) VALUES('$data_patient->name', '$data_patient->complaint', '$data_patient->email', '$data_patient->phone_number', '$data_patient->address')";
    $result = $con->query($sql);
} else if ($context == AppContext::DOCTOR) {
    $sql = "INSERT INTO doctors(name, spesialis, email, phone_number, address) VALUES('$data_doctor->name', '$data_doctor->spesialis', '$data_doctor->email', '$data_doctor->phone_number', '$data_doctor->address')";
    $result = $con->query($sql);
} else if ($context == AppContext::SERVICE) {
    $sql = "INSERT INTO services(type, time_schedule, price) VALUES('$data_service->type', '$data_service->schedule', '$data_service->price')";
    $result = $con->query($sql);
} else if ($context == AppContext::RECORD) {
    $sql = "INSERT INTO records(patient_id, doctor_id, complaint, diagnostic, proceeding, drug) VALUES('$data_record->patient_id', '$data_record->doctor_id', '$data_record->complaint', '$data_record->diagnose', '$data_record->proceeding', '$data_record->drug')";
    $result = $con->query($sql);
} else if ($context == AppContext::INOUT) {
    $sql = "INSERT INTO services_inout(time_date, patient_id, services_id, facility_id, type) VALUES('$data_inout->date', '$data_inout->patient_id', '$data_inout->service_id', '$data_inout->facility_id', '$data_inout->type')";
    $result = $con->query($sql);
}
header("location: ../Pages/home?context=$context");

?>