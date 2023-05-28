<?php

require( 'ssp.php' );
require( '../../Common/app_context.php');

$table;
$primaryKey;
$columns;
$context;
if(isset($_GET["context"])) {
    $context = $_GET["context"];
}
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'fayaDB',
    'host' => 'localhost'
    // ,'charset' => 'utf8' // Depending on your PHP and MySQL config, you may need this
);
if ($context == AppContext::PROFILE) {
    $table = 'users';
    $primaryKey = 'id';
    $columns = array(
        array( 'db' => 'username', 'dt' => 0 ),
        array( 'db' => 'email',  'dt' => 1 ),
        array( 'db' => 'password',   'dt' => 2 ),
        array( 'db' => 'department',     'dt' => 3 ),
    );
} else if($context == AppContext::PATIENT) {
    $table = 'patients';
    $primaryKey = 'patient_id';
    $columns = array(
        array( 'db' => 'name', 'dt' => 0 ),
        array( 'db' => 'complaint',   'dt' => 1 ),
        array( 'db' => 'email',     'dt' => 2 ),
        array( 'db' => 'phone_number',     'dt' => 3 ),
        array( 'db' => 'address',     'dt' => 4 ),

    );
} else if($context == AppContext::DOCTOR) {
    $table = 'doctors';
    $primaryKey = 'doctor_id';
    $columns = array(
        array( 'db' => 'name', 'dt' => 0 ),
        array( 'db' => 'spesialis',   'dt' => 1 ),
        array( 'db' => 'email',     'dt' => 2 ),
        array( 'db' => 'phone_number',     'dt' => 3 ),
        array( 'db' => 'address',     'dt' => 4 ),
    );
} else if($context == AppContext::SERVICE) {
    $table = 'services';
    $primaryKey = 'service_id';
    $columns = array(
        array( 'db' => 'service_id', 'dt' => 0 ),
        array( 'db' => 'type',   'dt' => 1 ),
        array( 'db' => 'time_schedule',     'dt' => 2 ),
        array( 'db' => 'price',     'dt' => 3 ),
    );
} else if($context == AppContext::RECORD) {
    $table = 'records';
    $primaryKey = 'record_id';
    $columns = array(
        array( 'db' => 'patient_id', 'dt' => 0 ),
        array( 'db' => 'doctor_id', 'dt' => 1 ),
        array( 'db' => 'complaint', 'dt' => 2 ),
        array( 'db' => 'diagnostic',   'dt' => 3 ),
        array( 'db' => 'proceeding',     'dt' => 4 ),
        array( 'db' => 'drug',     'dt' => 5 ),
    );
}

else if($context == AppContext::INOUT) {
    $table = 'services_inout';
    $primaryKey = 'services_inout_id';
    $columns = array(
        array( 'db' => 'time_date', 'dt' => 0 ),
        array( 'db' => 'patient_id', 'dt' => 1 ),
        array( 'db' => 'services_id', 'dt' => 2 ),
        array( 'db' => 'facility_id',   'dt' => 3 ),
        array( 'db' => 'type',     'dt' => 4 ),
    );
} else if($context == AppContext::RAWATINAP) {
    $table = 'rawat_inap';
    $primaryKey = 'rawat_inap_id';
    $columns = array(
        array( 'db' => 'name', 'dt' => 0 ),
        array( 'db' => 'dokter', 'dt' => 1 ),
        array( 'db' => 'checkinout', 'dt' => 2 ),
        array( 'db' => 'room_no',   'dt' => 3 ),
        array( 'db' => 'phone_number',     'dt' => 4 ),
    );
} else if($context == AppContext::RAWATJALAN) {
    $table = 'rawat_jalan';
    $primaryKey = 'rawat_jalan_id';
    $columns = array(
        array( 'db' => 'name', 'dt' => 0 ),
        array( 'db' => 'dokter', 'dt' => 1 ),
        array( 'db' => 'checkinout', 'dt' => 2 ),
        array( 'db' => 'phone_number',   'dt' => 3 ),
    );
}


echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);


?>