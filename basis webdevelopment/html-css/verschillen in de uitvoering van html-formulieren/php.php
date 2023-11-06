<?php
if (!empty($_POST)) {
    if (empty($_POST['someValue-1'])) { $_POST['someValue-1'] = 0; }
    if (empty($_POST['someValue-2'])) { $_POST['someValue-2'] = 0; }
    $result = 'waarde '.$_POST['someValue-1'] .' plus ' . $_POST['someValue-2'] . ' = '.((int) $_POST['someValue-1'] + (int) $_POST['someValue-2']);
}
else {
    $result = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo JS-formulier</title>
    <style>
        /* hier staat opmaak die verwijzen naar: classes, tag's en id's    */
        .form input, .form button {
            margin: 3px;
        }
        label {
            display: inline-block;
            width: 90px;
        }
        #result {
            background-color: silver;
            width: 30%;
            height: 200px;
        }
    </style>
</head>
<body>
<h1>PHP-formulier</h1>
<form action="" method="post">
    <label>getal 1</label>
    <input type="number" name="someValue-1" class="" placeholder="getal invoeren"/>
    <br>
    <label>getal 2</label>
    <input type="number" name="someValue-2" class="" placeholder="getal invoeren"/>
    <br>
    <label>verzend knop</label>
    <input type="submit" value="Doe iets"><br>
</form>
<div id="result">
    <?php echo $result; ?>
