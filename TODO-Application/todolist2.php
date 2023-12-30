<?php 
    include('database.php');
    include('default.html');

    if(!loggedin()){
        header("location:login.php");
    }

	$username = $_SESSION['username'];
    echo '<div class="headings">';
 	echo '<br> <a href="logout.php" align="right" title="Logout" style="color: red; text-decoration: none">&nbsp; Logout </a>';

 	echo '<a href="changepassword.php" align="right" title="change password" style="color: blue; text-decoration: none">&nbsp; Change Password </a>';

 	echo '<a href="deleteaccount.php" align="right" title="delete account" style="color: blue; text-decoration: none">&nbsp; Delete Account </a> <br>';
echo '</div>';

 	error();
     echo '<div class="user">';
	echo "<br> <center>  Welcome ".ucwords($username)."</center> <br>";
    echo '</div>';
	if(isset($_POST['addtask']))
	{
	    if(!empty($_POST['description']))
	    {
	        addTodoItem($_SESSION['username'], $_POST['description']);
	        header("Refresh:0");   
	    }
	}
?>


<!DOCTYPE html>
<html>
<head>
    <title> TODO </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Web Page Title</title>
    <!-- Include your CSS file using the link element -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="my-form">

	<br>
	<form class="task-form" action="todolist2.php" method="POST">
        <div class="add-task">
            <input class ="task-input" type="text" size="50" placeholder=" Title" name="description" autocomplete="off"/>
            <input class="task-submit" type="submit" name="addtask" value="Add"/>
        </div>
    </form>
    <?php
    getTodoItems($username);
    ?>
</div>
</body>
<script src="script.js"></script>


</html>
