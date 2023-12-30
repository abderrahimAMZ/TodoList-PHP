<?php
    include('default.html');
    include('database.php');
    if(loggedin()) {
        header("location:todolist2.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
    <div class="headings2">
    <p style="white-space:pre">  Don't have an account <a href="newuser.php" style="color: red; text-decoration: none"> Create New Account </a> </p>
    </div>

    <?php error(); ?>

        <div class="container mt-5">
            <form action="valid.php" method="POST">
                <fieldset>
                    <legend class="text-primary">Login</legend>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Captcha</label>
                        <div class="col-sm-5">
                            <?php
                            $capcode = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
                            $capcode = substr(str_shuffle($capcode), 0, 6);
                            $_SESSION['captcha'] = $capcode;
                            echo '<div class="captcha">'  . "                 "      . $capcode . '</div>';
                            ?>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="captcha" placeholder="Enter captcha" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="reset" class="btn btn-secondary" value="Reset">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
</body>

