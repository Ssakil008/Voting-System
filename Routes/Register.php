<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Voting System</title>
        <link rel="stylesheet" href="../CSS/stylesheet.css">
    </head>
    <body>
    <div id="headerSection">
            <h1>Online Voting System</h1> 
        </div>
        <hr>
       
        <div id="bodySection">
            <h3>Registration</h3>
            <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Enter Name">
                <input type="number" name="mobile" placeholder="Enter Mobile"><br><br>
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirm_password" placeholder="Confirm Password"><br><br>
                <input type="text" name="address" placeholder="Address"><br><br>
                <label for="">Upload Image:</label>
                <input type="file" name="photo"><br><br>
                <label for="">Select role:</label>
                <select name="role">
                    <option value="Voter">Voter</option>
                    <option value="Group">Group</option>
                </select><br><br>
                <button>Register</button><br><br>
                Already user? <a href="../">Login here</a>
            </form>
        </div>
    </body>
</html>