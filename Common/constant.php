<?php

abstract class Constant {
    public const PATIENT_COLUMN = [
        "Nama Pasien",
        "Keluhan",
        "Email",
        "No Telp",
        "Alamat"
    ];

    public const DOCTOR_COLUMN = [
        "Nama Dokter",
        "Spesialis",
        "Email",
        "No Telp",
        "Alamat"
    ];

    public const SERVICE_COLUMN = [
        "ID Layanan",
        "Jenis",
        "Jadwal",
        "Biaya",
    ];
    public const RECORD_COLUMN = [
        "ID Pasien",
        "ID Dokter",
        "Keluhan",
        "Diagnosa",
        "Tindakan",
        "Obat"
    ];
    public const INOUT_COLUMN = [
        "Tanggal",
        "ID Pasien",
        "ID Layanan",
        "ID Fasilitas",
        "Masuk/Keluar"
    ];

    public const RAWATINAP_COLUMN = [
        "Nama Pasien",
        "Dokter",
        "Tanggal masuk/keluar",
        "No Ruang Inap",
        "Kontak Pasien"
    ];

    public const RAWATJALAN_COLUMN = [
        "Tanggal",
        "Jadwal Dokter",
        "Rekam Medis",
        "Kontak Pasien",
    ];

    public const PATIENT_HTML_ICON = '
    <img src="../Assets/Icon/patient.png" alt="" width="36" height="36">
    ';

    public const DOCTOR_HTML_ICON = '
    <img src="../Assets/Icon/doctor.png" alt="" width="36" height="36">
    ';

    public const SERVICE_HTML_ICON = '
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
        <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
        <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
    </svg>
    ';

    public const RECORD_HTML_ICON = '
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
    </svg>
    ';

    public const INOUT_HTML_ICON = '
    <img src="../Assets/Icon/masuk:keluar.png" alt="" width="36" height="36">
    ';

    public const PATIENT_TITLE = "Pasien";

    public const DOCTOR_TITLE = "Dokter";

    public const SERVICE_TITLE = "Layanan Medis";

    public const RECORD_TITLE = "Rekam Medis";

    public const INOUT_TITLE = "Masuk Keluar";

}

?>