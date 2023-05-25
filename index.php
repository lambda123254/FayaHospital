<? 
require_once("Modules/login_system.php");

if(isset($_SESSION["logged_in"])){
    header("location: pages/home");
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/color-variable.css">
    <link rel="stylesheet" href="Style/border.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">    <title>Document</title>
</head>
<body class="color-background-gray">
    <div class="container color-gray">
        <div class="row pt-5 mt-5 pb-3">
            <div class="col-sm text-center">
                <img src="Assets/placeholder.jpeg" width="100vw">
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-sm text-center">
            <i class="bi bi-1-circle"></i>

                <h3>Aplikasi Database <br> Faya Hospital</h3>
            </div>
        </div>
        <div class="row">
            <div class="col pl-25vw pr-25vw justify-content-center">
                <div class="card">
                    <div class="card-body text-center">
                        <p class="login-title pt-2 pb-2">Login Akun</p>
                        <form method="POST">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="usernameInput" name="usernameInput" placeholder="Username">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" id="passwordInput" name="passwordInput" placeholder="Password">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-white color-background-lightblue login-button p-3">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>