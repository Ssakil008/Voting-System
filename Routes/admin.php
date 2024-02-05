<?php
    session_start(); 
    if(!isset($_SESSION["userdata"]))
    {
        header("location: ../");
    }
    $admindata = $_SESSION["admindata"];
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
    <a href="../routes/logout.php"><button style="float:right;">Logout</button></a>
    <a href="admin.php"><button>Refresh</button></a>
    <div id="headerSection">
        <h1>Online Voting System</h1> 
    </div>
    <hr>
        
    <div>
        <div style="width:50%;">
        <?php
                        if(isset($_SESSION['admindata']))
                        {
                            ?>
                                
                                <div>
                                    
                                    <div style="padding:20px;float:left; text-align:start;">
                                        <table class="table">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">User No</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Mobile</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                            <tbody style="padding:20px; margin-top: 10px;">
                                                <?php
                                                for($i = 0; $i < count($admindata); $i++)
                                                { 
                                                ?>
                                                <tr>
                                                <th scope="row"><?php echo $i + 1?></th>
                                                    <td style="padding:20px;"><?php echo $admindata[$i]['Name']?></td>
                                                    <td style="padding:20px;"><?php echo $admindata[$i]['Mobile']?></td>
                                                    <td style="padding:20px;"><?php echo $admindata[$i]['Address']?></td>
                                                    <td style="padding:20px;"><?php echo $admindata[$i]['Role']?></td>
                                                    <td style="padding:20px;"><?php
                                                            if (isset($admindata[$i]['Status'])) {
                                                                if ($admindata[$i]['Status'] == 0) {
                                                                    echo '<b style="color:red;">Not Voted</b>';
                                                                } else {
                                                                    echo '<b style="color:green;">Voted</b>';
                                                                }
                                                            } else {
                                                                echo '<b style="color:gray;">Status not available</b>';
                                                            }
                                                        ?>
                                                    </td>
                                                    <td><img src="../uploads/<?php echo $admindata[$i]['Photo']?>" height="100" width="100"></td>
                                                </tr>
                                                <?php
                                                } 
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                                
                                <?php
                            }
                        else
                        {

                        }
                    ?>
        </div>
        <div style="float:right ; width:30%;">
            <?php
                if(isset($_SESSION['groupdata']))
                {
                        ?>
                        <table>
                                <thead>
                                    <tr>
                                        <th scope="col" style="padding:15px;">Group Name</th>
                                        <th scope="col" style="padding:15px;">Total Votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($j = 0; $j < count($groupdata); $j++)
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $groupdata[$j]['Name']?><br><br></td>
                                        <td><?php echo $groupdata[$j]['Vote']?><br><br></td>
                                    </tr>
                                        <?php
                                        }
                                        ?>
                                </tbody>
                            </table>
                        <?php
                }
            
                else
                {

                }
            ?>
        </div>
    </div>
</body>
</html>