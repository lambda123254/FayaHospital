<?php

class Record {
    public $patient_id;
    public $doctor_id;
    public $complaint;
    public $diagnose;
    public $proceeding;
    public $drug;

    function set_data($patient_id, $doctor_id, $complaint, $diagnose, $proceeding, $drug) {
        $this->patient_id = $patient_id;
        $this->doctor_id = $doctor_id;
        $this->complaint = $complaint;
        $this->diagnose = $diagnose;
        $this->proceeding = $proceeding;
        $this->drug = $drug;
    }
}

?>