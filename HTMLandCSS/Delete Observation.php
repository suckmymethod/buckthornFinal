<?php
// loading the items for the select box
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
    <select name="deleteme">
        <option disabled>Obs Group Date</option disabled>
        <?php
        // creates the option tags for all the observations in the database
        while ($observations = mysqli_fetch_array($_SESSION['result'])) {
            echo "<option>" . $observations['obs_ID'] . ' ' .
                $observations['g_ID'] . ' ' . $observations['date'] . "</option>";
        }
        ?>
    </select>
    <input class="btn" type="submit" value="Submit"/>
    <input type="hidden" name="redirect" value="Del_Confirm.php"/>
    <input type="hidden" name="oops" value="oops.php"/>

    <a href="ProfessorHome.php">
        <div class="btn">Cancel</div>
    </a>
</form>


<footer>
    <div class="foot-text">
        <a href="Home.php"><p>Home</p></a>
        <p class="foot-CR">© smm 2016</p>
    </div>
</footer>

</body>
</html>
