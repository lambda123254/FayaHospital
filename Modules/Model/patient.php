<?php

class Patient {
    public $patientId;
    public $name;
    public $dob;
    public $gender;
    public $address;
    public $phone_number;
    public $insurance;
    public $complaint;
    public $type;
    public $email;

    function set_data($name, $dob, $gender, $address, $phone_number, $insurance, $complaint, $type, $email) {
        $this->name = $name;
        $this->dob = $dob;
        $this->gender = $gender;
        $this->address = $address;
        $this->phone_number = $phone_number;
        $this->insurance = $insurance;
        $this->complaint = $complaint;
        $this->type = $type;
        $this->email = $email;
    }
}

?>