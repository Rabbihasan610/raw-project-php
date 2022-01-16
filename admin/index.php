<?php

    session_start();

    if (isset($_SESSION['id'])){
        header('location: dashboard.php');
    }

    require_once "../vendor/autoload.php";
    $loginForm = new \app\Classes\Login_form();

    $message = ' ';
    if (isset($_POST['btn'])){
        $message = $loginForm->check_login($_POST);
    }


?>






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control Panel</title>
    <link rel="stylesheet" href="../asset/css/styles.css">
</head>
<body>

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="text-center">Admin Panel</h3>
                    </div>
                    <div class="card-body">

                        <h5 class="text-warning"><?php echo $message; ?></h5>


                        <form action="" method="post">
                            <div class="form-group row mb-2">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="user_email" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="user_password" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="../asset/js/scripts.js"></script>
</body>
</html>