<?php
    require_once 'SportTeams.php';

    $sportTeamsObject = new SportTeams();

    $sportTeamsObject->addTeam("Ajax", "Amsterdam");
    $sportTeamsObject->addTeam("FC Twente", "Enschede");
    $sportTeamsObject->addTeam("Borussia Dortmund", "Dortmund");

    $sportTeamsObject->removeTeam("Ajax");

    $teamsStatus = $sportTeamsObject->getAllTeams();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sport Teams:</h2>
    <?php    
        echo "<ul>";
        foreach ($teamsStatus as $team) 
        {
            echo "<li><strong>{$team['name']}</strong> - {$team['place']}</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>