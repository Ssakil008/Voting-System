<?php
    session_start(); 
    if(!isset($_SESSION["userdata"]))
    {
        header("location: ../");
    }
    $userdata = $_SESSION["userdata"];
    $groupdata = $_SESSION["groupdata"];
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Voting System</title>
        <link rel="stylesheet" href="../CSS/stylesheet.css">

    </head>
    <body>
        <a href="../index.php"><button style="float:left;">Back</button></a>
        <a href="../index.php"><button style="float:right;">Logout</button></a>
        <div id="headerSection">
            <h1>Online Voting System</h1> 
        </div>
        <hr>

    </body>
</html>