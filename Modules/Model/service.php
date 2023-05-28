<?php

class Service {
    public $type;
    public $schedule;
    public $price;

    function set_data($type, $schedule, $price) {
        $this->type = $type;
        $this->schedule = $schedule;
        $this->price = $price;
    }
}

?>