<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buckthorn Project</title>
</head>
<body style="border: 2px solid black; padding: 5px;">

<?php
$form = $_GET['form'];
?>

<div>
    <h1><strong>Buckthorn Database: SMM</strong></h1>
    <h5><Created By: Kyle Larsen, Jon Jarl, Nathan Li</h5>
    <div>
        <form>
            INPUT:<br>
            <input type="text" name="form"></input>
        </form>
        <br>
        OUTPUT:<br>
        <input type="text" value="<?php echo $form; ?>"></input>
    </div>
</div>
</body>
</html>