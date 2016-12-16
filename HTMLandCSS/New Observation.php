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
    <h1>Create New Observation</h1>
</header>

<label class="left-btn">Select Group:</label>
<select class="left-btn">
    <?php

    ?>
</select>

<form class="table" action="newPHP.php" method="post">

    <label><strong><i>Observation</i></strong></label>
    <br>
    <hr>
    <p class="textbox-text">Date of Observation:</p>
    <input type="text" name="ObservDate"/>
    <i>(YYYY/MM/DD)</i>

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
    <input type="hidden" name="error" value="oops.php"/>
</form>
<a href="Home.php">
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
