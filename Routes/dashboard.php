<?php
    session_start(); 
    if(!isset($_SESSION["userdata"]))
    {
        header("location: ../");
    }
    $userdata = $_SESSION["userdata"];
    $groupdata = $_SESSION["groupdata"];

    if($_SESSION['userdata']['Status']==0)
    {
        $status = '<b style="color:red;">Not Voted</b>';
    }
    else
    {
        $status = '<b style="color:Green;">Voted</b>';
    }
    
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
    <a href="../routes/logout.php"><button style="float:right;">Logout</button></a>
    <a href="dashboard.php"><button>Refresh</button></a>
    <div id="headerSection">
        <h1>Online Voting System</h1> 
    </div>
    <hr>
        
    <div>
        <div style="float:left; width:35%; padding: 20px; background-color: white;">
            <center><img src="../uploads/<?php echo $userdata['Photo']?>" height="100" width="100"><br><br></center>
            <div style="float:left; text-align:start;">
                <b>Name : </b> <?php echo $userdata['Name']?><br><br>
                <b>Mobile : </b> <?php echo $userdata['Mobile']?><br><br>
                <b>Address : </b> <?php echo $userdata['Address']?><br><br>
                <b>Status : </b> <?php echo $status?>
            </div>
        </div>
        <div style="float:right ; width:50%; padding: 20px; background-color: white;">
            <?php
                if(isset($_SESSION['groupdata']))
                {
                    for($i = 0; $i < count($groupdata); $i++)
                    {
                        ?>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <td style="padding:15px;"><h3>Group Name</h3></td>
                                        <td style="padding:15px;"><h3>Total Votes</h3></td>
                                        <td style="padding:15px;"><h3>Image</h3></td>
                                        <td style="padding:15px;"><h3>Vote Type</h3></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $groupdata[$i]['Name']?><br><br></td>
                                        <td><?php echo $groupdata[$i]['Vote']?><br><br></td>
                                        <td><img style="float:right;" src="../uploads/<?php echo $groupdata[$i]['Photo']?>" height="100" width="100"></td>
                                        <td style="padding:15px;"><form action="../api/vote.php" method="post">
                                <input type="hidden" name="gvotes" value="<?php echo $groupdata[$i]['Vote']?>">
                                <input type="hidden" name="gid" value="<?php echo $groupdata[$i]['Id']?>">
                                <?php 
                                if($_SESSION['userdata']['Status'] == 0)
                                {
                                ?>
                                <input type="submit" name="votebtn" value="vote" style="padding: 5px; border-radius: 5px; background-color: #3498db; color: wheat; font-size: 15px; float:left;"><br><br>
                                <?php
                                }
                                else
                                {
                                    ?>
                                    <button disabled type="button" name="votebtn" value="vote" style="padding: 5px; border-radius: 5px; background-color: green; color: wheat; font-size: 15px; float:left;">Voted</button>
                                    <?php
                                }
                                ?>
                            </form></td>
                                    </tr>
                                </tbody>
                            </table>
    
                            
                        </div>
                        <?php
                    }
                }
                else
                {

                }
            ?>
        </div>
    </div>
</body>
</html>