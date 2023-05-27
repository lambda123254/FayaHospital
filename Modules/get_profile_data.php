<?php

require_once("connection.php");
require_once("Model/user.php");
$uname = $_SESSION['logged_in'];
$user_data = new User();
$sql = "SELECT * FROM users Where username='$uname'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $user_data->set_data($row["id"], $row["username"], $row["email"], $row["department"]);
    }
}

?>