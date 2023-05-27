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
}

echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);


?>