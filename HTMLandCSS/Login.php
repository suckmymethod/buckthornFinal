<?php
include('Pre_load.php');
?>
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

<!--  Buttons to Link to Student/Professor Home pages-->
<div>
    <form action="HomePHP.php" method="post">
        <p class="login">Username:</p><input type="text" name="username"/>
        <br>
        <br>
        <p class="login">Password:</p><input type="text" name="password"/>
        <input class="btn" type="submit" value="Submit"/>
        <input type="hidden" name="redirect" value="Home.php"/>
    </form>

</div>


<footer>
    <div class="foot-text">
        <a href="Login.php"><p>Home</p></a>
        <p class="foot-CR">© SMM 2016</p>
    </div>
</footer>
</body>
</html>
