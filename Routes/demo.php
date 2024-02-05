<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-sm-3" >
                <div>
                    
                    
                </div>
                <div style="float:right ; width:15%; padding: 20px; background-color: white;">
                    <?php
                        if(isset($_SESSION['groupdata']))
                        {
                            for($j = 0; $j < count($groupdata); $j++)
                            {
                                ?>
                                <table>
                                        <thead>
                                            <tr>
                                                <td style="padding:15px;"><h3>Group Name</h3></td>
                                                <td style="padding:15px;"><h3>Total Votes</h3></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $groupdata[$j]['Name']?><br><br></td>
                                                <td><?php echo $groupdata[$j]['Vote']?><br><br></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                <?php
                            }
                        }
                        else
                        {

                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>