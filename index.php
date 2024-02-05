<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Voting System</title>
        <link rel="stylesheet" href="CSS/stylesheet.css">
    </head>
    <body>
        <div id="headerSection">
            <h1>Online Voting System</h1> 
        </div>
        <hr>
       
       <div id="bodySection">
            <form action="api/login.php" method="post">
                    <h3>Login</h3>
                    <input type="number" name="mobile" placeholder="Enter Mobile"><br><br>
                    <input type="password" name="password" placeholder="Enter Password"><br><br>
                    <select name="role">
                        <option value="Admin">Admin</option>
                        <option value="Voter">Voter</option>
                        <option value="Group">Group</option>
                    </select><br><br>
                    <button>Login</button><br><br>
                    New User? <a href="Routes/Register.php">Register here</a>
            </form>
       </div>
    </body>
</html>