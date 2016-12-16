<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Observation</title>
    <link rel="stylesheet" href="Stylesheet.css" type="text/css">
</head>

<body>
<header>
    <img class="logo" alt="Bethel University" src="https://www.bethel.edu/cdn/images/logo.png">
    <h1>Create New Report</h1>

</header>

<form action="reportPHP.php" method="post">
    <label style="font-family: Georgia, serif">Please enter your report here:</label>
    <br>
    <textarea name="report" rows="3" cols="30"></textarea>
    <br>
    <input class="btn" type="submit" value="Submit"/>
    <input type="hidden" name="submit-report" value="Sub_Confirm.php"/>
</form>

<a href="StudentHome.php">
    <div class="btn left-btn">Cancel</div>
</a>

<footer>
    <div class="foot-text">
        <a href="Home.php"><p>Home</p></a>
        <p class="foot-CR">© smm 2016</p>
    </div>
</footer>
</body>
</html>
