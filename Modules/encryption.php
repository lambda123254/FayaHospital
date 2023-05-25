<?php

function encryptPass($pass) {
    return password_hash($pass, PASSWORD_DEFAULT);
}

function verifyHash($pass, $hash) {
    return password_verify($pass, $hash);
}

?>