<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buckthorn|Home</title>
    <link rel="stylesheet" href="Stylesheet.css" type="text/css">
</head>
<body>

<header>
    <img class="logo" alt="Bethel University" src="https://www.bethel.edu/cdn/images/logo.png">
    <h1>The Buckthorn Database</h1>
    <h5>Created By: Kyle Larsen, Jon Jarl, Nathan Li</h5>
</header>
<!--    <div>-->
<!--        <form>-->
<!--            INPUT:<br>-->
<!--            <input type="text" name="form"></input>-->
<!--        </form>-->
<!--        <br>-->
<!--        OUTPUT:<br>-->
<!--        <input type="text" value="--><?php //echo $form; ?><!--"></input>-->
<!--    </div>-->

<!--Backend for login process-->
<?php
//$con = mysqli_connect("localhost") or die("Some error occurred");
//
//$query = "show tables";
//$result = mysqli_query($con, $query);
//echo $result;
//
//?>

<!--  Buttons to Link to Student/Professor Home pages  -->
<div>
    <form>
        <h5 class="login">Username:</h5><input type="text" name="username"/>
        <br>
        <br>
        <h5 class="login">Password:</h5><input type="text" name="password"/>
    </form>
</div>

<div>
    <a href="StudentHome.php"><div class="btn left-btn">Student</div></a>
    <a href="ProfessorHome.php"><div class="btn">Instructor</div></a>
</div>

<footer>
    <div class="foot-text">
        <a href="Home.php"><p>Home</p></a>
        <p class="foot-CR">© SMM 2016</p>
    </div>
</footer>
</body>
</html>
