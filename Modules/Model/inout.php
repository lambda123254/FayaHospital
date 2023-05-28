<?php

class InOut {
    public $date;
    public $patient_id;
    public $service_id;
    public $facility_id;
    public $type;

    function set_data($date, $patient_id, $service_id, $facility_id, $type) {
        $this->date = $date;
        $this->patient_id = $patient_id;
        $this->service_id = $service_id;
        $this->facility_id = $facility_id;
        $this->type = $type;
    }
}

?>