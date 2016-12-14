<?php
include('SelectPHP.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Observation</title>
    <link rel="stylesheet" href="Stylesheet.css" type="text/css">
</head>
<body>

<header>
    <img class="logo" alt="Bethel University" src="https://www.bethel.edu/cdn/images/logo.png">
    <h1>Delete an Observation</h1>
</header>

<form action="DeletePHP.php" method="post">
    <select>
        <option>firstTest</option>
        <?php
            while($observations = mysqli_fetch_array($_Session['result'])){
               echo "<option> test </option>";
            }
        ?>
    </select>
<a href="ProfessorHome.php">
    <div class="btn left-btn">Submit</div>
</a>
<a href="ProfessorHome.php">
    <div class="btn">Cancel</div>
</a>
</form>


<footer>
    <div class="foot-text">
        <a href="Home.php"><p>Home</p></a>
        <p class="foot-CR">© SMM 2016</p>
    </div>
</footer>

</body>
</html>
