<?php

class User {
    public $userId;
    public $username;
    public $email;
    public $department;

    function set_data($userId, $username, $email, $department) {
        $this->userId = $userId;
        $this->username = $username;
        $this->email = $email;
        $this->department = $department;
    }
}

?>