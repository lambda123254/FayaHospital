<?php

class Doctor {
    public $name;
    public $spesialis;
    public $email;
    public $phone_number;
    public $address;

    function set_data($name, $spesialis, $email, $phone_number, $address) {
        $this->name = $name;
        $this->spesialis = $spesialis;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->address = $address;
    }
}

?>