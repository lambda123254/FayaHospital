<?php
include("../Modules/get_profile_data.php");
include("../Common/app_context.php");
include("../Common/constant.php");

$context;
$isContextExist = false;
if(!isset($_SESSION["logged_in"])){
    header("location: ../");
} 

if(isset($_GET["context"])){
    $context = $_GET["context"];
    $isContextExist = true;
} else {
    $isContextExist = false;
    $context = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/flatly/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/color-variable.css">
    <link rel="stylesheet" href="../Style/border.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
</head>
<body class="color-background-gray">
    <nav class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="true" data-bs-scroll="true" aria-modal="true" role="dialog" style="visibility: visible;">
      <div class="offcanvas-header border-bottom" id="sidebar">
        <a href="../" class="d-flex align-items-center text-decoration-none offcanvas-title d-sm-block">
          <h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
            </svg>    
            Faya Hospital
          </h3>
        </a>
      </div>
      <div class="offcanvas-body px-0">
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
              Home
            </button>
            <div class="collapse" id="home-collapse" style="">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small pl-1">
                <li><a href="#" class="rounded" id="rawatInapButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                        <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                        <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                    </svg>
                    &nbsp; Rawat Inap
                </a></li>
                <li><a href="#" class="rounded" id="rawatJalanButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                        <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                        <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                    </svg>
                    &nbsp; Rawat Jalan
                </a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              Menu Tambahan
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="?context=patient" class="rounded" id="additionalButton">
                    <img src="../Assets/Icon/patient.png" alt="" width="16" height="16">
                    &nbsp; Pasien
                </a></li>
                <li><a href="?context=doctor" class="rounded" id="additionalButton">
                    <img src="../Assets/Icon/doctor.png" alt="" width="16" height="16">
                    &nbsp; Dokter
                </a></li>
                <li><a href="?context=service" class="rounded" id="additionalButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                        <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                        <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                    </svg>
                    &nbsp; Layanan Medis
                </a></li>
                <li><a href="?context=record" class="rounded" id="additionalButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    &nbsp; Rekam Medis
                </a></li>
                <li><a href="?context=inout" class="rounded" id="additionalButton">
                    <img src="../Assets/Icon/masuk:keluar.png" alt="" width="16" height="16">
                    &nbsp;  Masuk/Keluar
                </a></li>
              </ul>
            </div>
          </li>
          <li class="border-top my-3"></li>
          <li class="mb-1 fixed-bottom">
              <form action="../Modules/logout_system.php">
                <button class="btn  align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                    Logout
                </button>      
              </form>
          </li>
        </ul>
      </div>
    </nav>

    <div class="color-gray mr-0">
        <div class="row navbar-custom" id="navbarCustom">
            <div class="col d-flex flex-row-reverse text-center mt-3 mb-3 mr-5">
                <a href="#" id="profileButton">
                    <svg class="svg-color-white" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 10" preserveAspectRatio="xMidYMin">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </a>
                
            </div>
        </div>
        <div class="container row pt-25vh pl-5" id="homeButtonArea">
            <div class="col d-flex flex-row-reverse text-center mt-3 mb-3 mr-5">
                <a href="#" id="rawatInapButton">
                    <div class="card button-custom">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-1 pt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                                        <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                                        <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                                    </svg>       
                                </div>
                                <div class="col">
                                <h3>Rawat Inap</h3>     
                                </div>
                            </div>             
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="col d-flex  text-center mt-3 mb-3 mr-5">
                <a href="#" id="rawatJalanButton">
                    <div class="card button-custom">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-1 pt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                                        <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                                        <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                                    </svg>       
                                </div>
                                <div class="col">
                                <h3>Rawat Jalan</h3>     
                                </div>
                            </div>             
                        </div>
                    </div>
                </a>
                
            </div>
        </div>
        <div class="pt-3 d-none" id="homeFormArea">
            <div class="container row pl-5">
                <h5 id="formTitle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                        <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                        <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                    </svg>   
                    <div id="formTitleText"></div> 
                </h5>
            </div>
            <div class="row pl-5 text-center justify-content-center" style="padding-left: 400px; padding-right: 150px;" >
                <div class="card pl-5">
                    <div class="card-body">
                        <h5>
                            <img src="../Assets/Icon/patient.png" alt="" width="36" height="36">
                            Pasien
                        </h5>
                    </div>
                    <div class="card-body" style="padding-left: 100px; padding-right: 100px;">
                        <form action="../Modules/insert_profile_data.php?" method="POST">
                            <input class="hidden" type="text" id="inputContext" name="inputContext">
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label mb-3">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col col-form-label mb-3">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputDOB" name="inputDOB" placeholder="input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label mb-3">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mb-3" id="inputGender" name="inputGender" placeholder="input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label mb-3">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label mb-3">No Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Informasi Asuransi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputInsurance" name="inputInsurance" placeholder="input">
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-sm-2">
                                    <button class="btn login-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="pt-3 d-none" id="homeProfileArea">
            
            <div class="row pl-5 text-center justify-content-center" style="padding-left: 400px; padding-right: 150px;" >
                <div class="card pl-5">
                    <div class="card-body" style="padding-left: 100px; padding-right: 100px;">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label mb-3">User ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control mb-3" id="useridData" value="<? echo $user_data->userId; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label mb-3">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="usernameData" value="<? echo $user_data->username; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label mb-3">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="emailData" value="<? echo $user_data->email; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="departmentData" value="<? echo $user_data->department; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="pt-3 d-none" id="homeDataTableArea">
            <div class="row pl-5 text-center justify-content-center" style="padding-left: 300px; padding-right: 50px;" >
                <div class="card pl-5">
                    <div class="card-body" style="padding-left: 100px; padding-right: 100px;">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex flex-row">
                                    <h5 id="formTitle">   
                                        <?
                                            if ($context == AppContext::PATIENT) {
                                                echo Constant::PATIENT_HTML_ICON;
                                                echo ucwords(Constant::PATIENT_TITLE);
                                            } else if($context == AppContext::DOCTOR) {
                                                echo Constant::DOCTOR_HTML_ICON;
                                                echo ucwords(Constant::DOCTOR_TITLE);
                                            } else if($context == AppContext::SERVICE) {
                                                echo Constant::SERVICE_HTML_ICON;
                                                echo ucwords(Constant::SERVICE_TITLE);
                                            } else if($context == AppContext::RECORD) {
                                                echo Constant::RECORD_HTML_ICON;
                                                echo ucwords(Constant::RECORD_TITLE);
                                            } else if($context == AppContext::INOUT) {
                                                echo Constant::INOUT_HTML_ICON;
                                                echo ucwords(Constant::INOUT_TITLE);
                                            }
                                            
                                        ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-row-reverse">
                                    <button class="btn btn-primary <? if($context == AppContext::RAWATJALAN || $context == AppContext::RAWATINAP) { echo "hidden"; } ?>" id="inputDataButton">
                                        Input Data
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <table class="table dt-center" id="datatable">
                            <thead>
                                <tr style="background-color: var(--lightBlueSlightDarker); color: white;">
                                    <?php
                                        $patientColumn = Constant::PATIENT_COLUMN;
                                        $doctorColumn = Constant::DOCTOR_COLUMN;
                                        $serviceColumn = Constant::SERVICE_COLUMN;
                                        $recordColumn = Constant::RECORD_COLUMN;
                                        $inoutColumn = Constant::INOUT_COLUMN;
                                        $rawatInapColumn = Constant::RAWATINAP_COLUMN;
                                        $rawatJalanColumn = Constant::RAWATJALAN_COLUMN;
                                        if ($context == AppContext::PATIENT) {
                                            for($i = 0; $i < count($patientColumn); $i++) {
                                                echo "<th>$patientColumn[$i]</th>";
                                            }
                                        } else if($context == AppContext::DOCTOR) {
                                            for($i = 0; $i < count($patientColumn); $i++) {
                                                echo "<th>$doctorColumn[$i]</th>";
                                            }
                                        } else if($context == AppContext::SERVICE) {
                                            for($i = 0; $i < count($serviceColumn); $i++) {
                                                echo "<th>$serviceColumn[$i]</th>";
                                            }
                                        } else if($context == AppContext::RECORD) {
                                            for($i = 0; $i < count($recordColumn); $i++) {
                                                echo "<th>$recordColumn[$i]</th>";
                                            }
                                        } else if($context == AppContext::INOUT) {
                                            for($i = 0; $i < count($inoutColumn); $i++) {
                                                echo "<th>$inoutColumn[$i]</th>";
                                            }
                                        } else if($context == AppContext::RAWATINAP) {
                                            for($i = 0; $i < count($rawatInapColumn); $i++) {
                                                echo "<th>$rawatInapColumn[$i]</th>";
                                            }
                                        } else if($context == AppContext::RAWATJALAN) {
                                            for($i = 0; $i < count($rawatJalanColumn); $i++) {
                                                echo "<th>$rawatJalanColumn[$i]</th>";
                                            }
                                        }
                                    ?>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="pt-3 d-none" id="homeDataInputArea">
            <div class="row pl-5 text-center justify-content-center" style="padding-left: 400px; padding-right: 150px;" >
                <div class="card pl-5">
                    <div class="card-body">
                        <?
                            if ($context == AppContext::PATIENT) {
                                echo Constant::PATIENT_HTML_ICON;
                                echo ucwords(Constant::PATIENT_TITLE);
                            } else if($context == AppContext::DOCTOR) {
                                echo Constant::DOCTOR_HTML_ICON;
                                echo ucwords(Constant::DOCTOR_TITLE);
                            } else if($context == AppContext::SERVICE) {
                                echo Constant::SERVICE_HTML_ICON;
                                echo ucwords(Constant::SERVICE_TITLE);
                            } else if($context == AppContext::RECORD) {
                                echo Constant::RECORD_HTML_ICON;
                                echo ucwords(Constant::RECORD_TITLE);
                            } else if($context == AppContext::INOUT) {
                                echo Constant::INOUT_HTML_ICON;
                                echo ucwords(Constant::INOUT_TITLE);
                            }
                                            
                        ?>
                    </div>
                    <div class="card-body" style="padding-left: 100px; padding-right: 100px;">
                        <form action="../Modules/insert_additional_data.php?context=<?echo $context;?>" method="POST">
                            <?php
                                $patientColumn = Constant::PATIENT_COLUMN;
                                $doctorColumn = Constant::DOCTOR_COLUMN;
                                $serviceColumn = Constant::SERVICE_COLUMN;
                                $recordColumn = Constant::RECORD_COLUMN;
                                $inoutColumn = constant::INOUT_COLUMN;
                                if ($context == AppContext::PATIENT) {
                                    for($i = 0; $i < count($patientColumn); $i++) {
                                        $namePOST = str_replace(' ', '', $patientColumn[$i]) . "toDB";
                                        echo "
                                        <div class='form-group row'>
                                            <label for='' class='col-sm-2 col-form-label mb-3'>$patientColumn[$i]</label>
                                            <div class='col-sm-10'>
                                                <input type='text' class='form-control' id='' name='$namePOST' placeholder='input'>
                                            </div>
                                        </div>
                                        ";
                                    }
                                } else if($context == AppContext::DOCTOR) {
                                    for($i = 0; $i < count($doctorColumn); $i++) {
                                        $namePOST = str_replace(' ', '', $doctorColumn[$i]) . "toDB";
                                        echo "
                                        <div class='form-group row'>
                                            <label for='' class='col-sm-2 col-form-label mb-3'>$doctorColumn[$i]</label>
                                            <div class='col-sm-10'>
                                                <input type='text' class='form-control' id='' name='$namePOST' placeholder='input'>
                                            </div>
                                        </div>
                                        ";
                                    }
                                } else if($context == AppContext::SERVICE) {
                                    for($i = 0; $i < count($serviceColumn); $i++) {
                                        $inputType;
                                        if($serviceColumn[$i] == "Jadwal") {
                                            $inputType = "date";
                                        } else {
                                            $inputType = "text";
                                        }
                                        $namePOST = str_replace(' ', '', $serviceColumn[$i]) . "toDB";
                                        echo "
                                        <div class='form-group row'>
                                            <label for='' class='col-sm-2 col-form-label mb-3'>$serviceColumn[$i]</label>
                                            <div class='col-sm-10'>
                                                <input type='$inputType' class='form-control' id='' name='$namePOST' placeholder='input'>
                                            </div>
                                        </div>
                                        ";
                                    }
                                } else if($context == AppContext::RECORD) {
                                    for($i = 0; $i < count($recordColumn); $i++) {
                                        $namePOST = str_replace(' ', '', $recordColumn[$i]) . "toDB";
                                        echo "
                                        <div class='form-group row'>
                                            <label for='' class='col-sm-2 col-form-label mb-3'>$recordColumn[$i]</label>
                                            <div class='col-sm-10'>
                                                <input type='text' class='form-control' id='' name='$namePOST' placeholder='input'>
                                            </div>
                                        </div>
                                        ";
                                    }
                                } else if($context == AppContext::INOUT) {
                                    for($i = 0; $i < count($inoutColumn); $i++) {
                                        $inputType;
                                        if($inoutColumn[$i] == "Tanggal") {
                                            $inputType = "date";
                                        } else {
                                            $inputType = "text";
                                        }
                                        $namePOST = str_replace(' ', '', $inoutColumn[$i]) . "toDB";
                                        echo "
                                        <div class='form-group row'>
                                            <label for='' class='col-sm-2 col-form-label mb-3'>$inoutColumn[$i]</label>
                                            <div class='col-sm-10'>
                                                <input type='$inputType' class='form-control' id='' name='$namePOST' placeholder='input'>
                                            </div>
                                        </div>
                                        ";
                                    }
                                }
                            ?>
                            <div class="form-group row justify-content-center">
                                <div class="col-sm-2">
                                    <button class="btn login-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        var offsetHeight = document.getElementById("navbarCustom").offsetHeight;
        document.getElementById('sidebar').style.height = offsetHeight + "px";
    </script>
    <script src="../Scripts/home_handle.js"></script>
    <script src="../Scripts/datatable.js"></script>
    <script>
        setDatatable("<?echo $context;?>")
        if("<?echo $isContextExist;?>" == "1") {
            var home = $('#homeButtonArea')
            var form = $('#homeFormArea')
            var profile = $('#homeProfileArea')
            var formTitle = $('#formTitle')
            var datatable = $('#homeDataTableArea')

            home.addClass("d-none")
            profile.addClass("d-none")
            form.addClass("d-none")
            datatable.removeClass("d-none")

        } else {
            datatable.addClass("d-none")
        }
    </script>
</body>