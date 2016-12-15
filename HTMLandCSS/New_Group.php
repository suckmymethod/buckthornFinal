<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create Group</title>
    <link rel="stylesheet" href="Stylesheet.css" type="text/css">
</head>
<body>

<header>
    <img class="logo" alt="Bethel University" src="https://www.bethel.edu/cdn/images/logo.png">
    <h1>Add New Group</h1>
</header>


<form action="newGroupPHP.php" method="post">
    <label class="textbox-text">Please enter the name of the new group:</label>
    <input type="text" name="newGroup"/>
    <br>
    <input type="submit" class="btn" value="Submit"/>
    <input type="hidden" name="redirect" value="Sub_Confirm.php"/>
</form>

<footer>
    <div class="foot-text">
        <a href="Home.php"><p>Home</p></a>
        <p class="foot-CR">© SMM 2016</p>
    </div>
</footer>

</body>
</html>
