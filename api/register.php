<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $c_password = $_POST['confirm_password'];
    $address = $_POST['address'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];

    if($password==$c_password)
    {
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO user (Name, Mobile, Address, Password, Photo, Role, Status, Vote) VALUES ('$name', '$mobile', '$address', '$password', '$image', '$role', '0', '0')");
   if($insert)
        {
            echo '
            <script>
                alert("Registration Successfull!");
                window.location = "../";
            </script>
        ';
        }
        else
        {
            echo "
            <script>
                alert('Some error occured!');
                window.location = '../routes/register.php';
            </script>
        ";
        }
    }
    else
    {
        echo '
            <script>
                alert("Password and Confirm password does not match!");
                window.location = "../routes/register.php";
            </script>
        ';
    }
?>