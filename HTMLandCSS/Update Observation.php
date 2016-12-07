<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Observation</title>
    <link rel="stylesheet" href="Stylesheet.css" type="text/css">
</head>
<body>

<header>
    <h1><strong>Update an Observation</strong></h1>

</header>

<div>
    <p>Choose an Observation to Update</p>
</div>

<form>
    <select>
        <--To be filled with php code-->
    </select>
</form>

<form class="table">

    <p class="textbox-text">Date of Observation:</p>
    <input type="text" name="ObservDate"/>
    <i>(MM/DD/YYYY)</i>

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
    <input type="text" name="folilar-cov"/>
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

</form>

<form class="table2">
    <p class="textbox-text">Enter the Number of Species:</p>
    <input type="text" name="NumSpecies"/>

    <br>
    <br>

    <p class="textbox-text">Shanon Weiner Index:</p>
    <input type="text" name="SWI"/>

    <br>
    <br>

    <p class="textbox-text">Notes</p>
    <br>
    <textarea name="BD-notes" ROWS="3" cols="30"></textarea>
</form>

<form class="table">
    <p class="textbox-text">DBH of Closest Neighbor:</p>
    <input type="text" name="DBH"/>

    <br>
    <br>

    <p class="textbox-text">Distance to Closest Neighbor:</p>
    <input type="text" name="D-Buck"/>

    <br>
    <br>

    <p class="textbox-text">DBH of Closest Neighbor:</p>
    <input type="text" name="DBH-neighbor"/>

    <br>
    <br>

    <p class="textbox-text">Distance to Closest Non-Buckthorn:</p>
    <input type="text" name="D-NonBuck"/>

    <br>
    <br>

    <p class="textbox-text">DBH of Closest Non-Buckthorn:</p>
    <input type="text" name="DBH-nonBuck"/>

    <br>
    <br>

    <p class="textbox-text">Notes:</p>
    <br>
    <textarea name="Comp-notes" ROWS="3" cols="30"></textarea>
</form>

<a href="ProfessorHome.php">
    <button>Cancel</button>
</a>
<a href="ProfessorHome.php">
    <button>Submit</button>
</a>

<footer>
    <div class="foot-text">
        <a href="Home.php"><p>Home</p></a>
        <p class="foot-CR">© SMM 2016</p>
    </div>
</footer>
</body>
</html>