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
    ];
}

?>