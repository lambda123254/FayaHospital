<?php

require_once("Modules/connection.php");
require_once("Modules/encryption.php");

$hash = "";

if(isset($_POST['usernameInput']) && isset($_POST['usernameInput'])) {
    $uname = mysqli_real_escape_string($con, $_POST['usernameInput']);
    $password = mysqli_real_escape_string($con, $_POST['passwordInput']);
    $sql = "SELECT password FROM users Where username='$uname'";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $isPassValid = verifyHash($password, $row['password']);
        if ($isPassValid) {
            $_SESSION['logged_in'] = $uname;
            header("location: pages/home");
        } else {
            echo "<script>alert('Wrong password!');</script>";
        }
      }
    }
} else {
    
}




?>