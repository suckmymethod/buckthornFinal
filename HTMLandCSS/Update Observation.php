<?php
include('SelectPHP.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Observation</title>
    <link rel="stylesheet" href="Stylesheet.css" type="text/css">
</head>
<body>

<header>
    <img class="logo" alt="Bethel University" src="https://www.bethel.edu/cdn/images/logo.png">
    <h1>Update an Observation</h1>
</header>


<form action="" method="post">
    <p>Choose an Observation to Update:</p>
    <select name="PickedObs">
        <option disabled>Obs Group Date</option>
        <?php
        // fills the select box for choosing the observation
        while ($observations = mysqli_fetch_array($_SESSION['result'])) {
            $obs_ID = $observations['obs_ID'];
            echo "<option value='$obs_ID'>" . $observations['obs_ID'] . "&nbsp&nbsp" .
                $observations['g_ID'] . "&nbsp&nbsp" . $observations['date'] . "</option>";
        }
        ?>

    </select>
    <input class="btn left-btn" type="submit" value="Select"/>
</form>

<form class="table" action="UpdatePHP.php" method="post">


    <label><strong><i>Observation</i></strong></label>
    <br>
    <hr>
    <p class="textbox-text">Date of Observation:</p>
    <input type="text" name="ObservDate"/>
    <i>(YYYY-MM-DD)</i>

    <br>
    <br>

    <p class="textbox-text">Quadrant location:</p>
    <input type="text" name="quad-N" class="textbox-text"/><i>N</i>
    <input style="margin-left: 5px;" type="text" name="quad-W" class="textbox-text"/><i>W</i>

    <br>
    <br>

    <p class="textbox-text">Quadrant size:</p><input type="text" name="QuadSize"/>
    <i>m^2</i>

    <br>
    <br>

    <p class="textbox-text">Buckthorn Stem Count:</p>
    <input type="text" name="stem-count"/>

    <br>
    <br>

    <p class="textbox-text">Density:</p>
    <input type="text" name="density"/>

    <br>
    <br>

    <p class="textbox-text">Foliar Coverage:</p>
    <input type="text" name="foliar-cov"/>
    <i>%</i>

    <br>
    <br>

    <p class="textbox-text">Stem Circumference:</p>
    <input type="text" name="stem-circum"/>
    <i>cm</i>

    <br>
    <br>

    <p class="textbox-text">Habitat Description:</p>
    <br>
    <textarea name="Habitat" ROWS="3" cols="30"></textarea>

    <br>
    <br>

    <p class="textbox-text">Notes:</p>
    <br>
    <textarea name="obs-notes" ROWS="3" cols="30"></textarea>
    <br>
    <br>
    <label><strong><i>BioDiversity</i></strong></label>
    <br>
    <hr>

    <p class="textbox-text">Enter the Number of Species:</p>
    <input type="text" name="NumSpecies"/>

    <br>
    <br>

    <p class="textbox-text">Shanon Weiner Index:</p>
    <input type="text" name="SWI"/>

    <br>
    <br>

    <p class="textbox-text">Notes:</p>
    <br>
    <textarea name="BD-notes" ROWS="3" cols="30"></textarea>
    <br>
    <br>

    <label><strong><i>Competition</i></strong></label>
    <br>
    <hr>

    <p class="textbox-text">Diameter-Breast Height(DBH):</p>
    <input type="text" name="DBH"/>
    <i>m</i>

    <br>
    <br>

    <p class="textbox-text">Distance-Closest Neighbor:</p>
    <input type="text" name="D-Buck"/>
    <i>m</i>

    <br>
    <br>

    <p class="textbox-text">DBH-Closest-Neighbor:</p>
    <input type="text" name="DBH-neighbor"/>
    <i>m</i>

    <br>
    <br>

    <p class="textbox-text">Distance-Closest Non-Buckthorn:</p>
    <input type="text" name="D-NonBuck"/>
    <i>m</i>

    <br>
    <br>

    <p class="textbox-text">DBH-Closest Non-Buckthorn:</p>
    <input type="text" name="DBH-nonBuck"/>
    <i>m</i>

    <br>
    <br>

    <p class="textbox-text">Notes:</p>
    <br>
    <textarea name="Comp-notes" ROWS="3" cols="30"></textarea>


    <input style="float: right" class="btn" type="submit" value="Submit"/>
    <input type="hidden" name="submit-new" value="Sub_Confirm.php"/>
</form>

<a href="ProfessorHome.php">
    <div class="btn left-btn">Cancel</div>
</a>


<footer>
    <div class="foot-text">
        <a href="Home.php"><p>Home</p></a>
        <p class="foot-CR">© SMM 2016</p>
    </div>
</footer>
</body>
</html>
