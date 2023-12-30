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
        <title> New User </title>
    </head>
    <body>
        <p style="white-space:pre">  Already have an account <a href="login.php" title="Login" style="color: red;text-decoration: none"> Login </a> </p>
    
        <?php error(); ?>

        <div class="container mt-5">
            <form action="adduser.php" method="POST">
                <center>
                    <fieldset>
                        <legend class="text-primary">New User</legend>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username" placeholder="enter username" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password1" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="*******" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="*******" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Captcha</label>
                            <div class="col-sm-5">
                                <?php
                                $capcode = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz";
                                $capcode = substr(str_shuffle($capcode), 0, 6);
                                $_SESSION['captcha'] = $capcode;
                                echo '<div class="captcha">' . $capcode . '</div>';
                                ?>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="captcha" placeholder="Enter captcha" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <input type="reset" class="btn btn-primary" value="Reset">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </fieldset>
                </center>
            </form>
        </div>
    </body>
</html>