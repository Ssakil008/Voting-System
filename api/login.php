<?php
    session_start();
    include("connect.php");

    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $check = mysqli_query($connect,"SELECT * FROM user where Mobile='$mobile' AND Password='$password' AND Role='$role'");

    //echo "<pre>";
    //var_dump($check);
    //echo "</pre>";
    if(mysqli_num_rows($check)>0)
    {
        $userData = mysqli_fetch_assoc($check);
        //echo "<pre>";
        //print_r($userData);
        //echo "</pre>";
        $groups = mysqli_query($connect,"SELECT * FROM user WHERE role='Group'");
        //echo "<pre>";
        //print_r($groups);
        //echo "</pre>";
        $groupData = mysqli_fetch_all($groups, MYSQLI_ASSOC);
        //echo "<pre>";
        //print_r($groupData);
        //echo "</pre>";
        $admin = mysqli_query($connect,"SELECT * FROM user");
        
        $adminData = mysqli_fetch_all($admin, MYSQLI_ASSOC);
    
    
        $_SESSION["userdata"] = $userData;
        $_SESSION["groupdata"] = $groupData;
        $_SESSION["admindata"] = $adminData;

        if($userData['Role']==='Admin')
        {
            $_SESSION['Role'] = 'Admin';
            echo "
            <script>
                window.location = '../routes/admin.php';
            </script>
            ";
        }
        else
        {
            echo "
            <script>
                window.location = '../routes/dashboard.php';
            </script>
            ";
        }
        

       
    }   
    else
    {
        echo "
        <script>
            alert('invalid credintials or User not found');
            window.location = '../routes/register.php';
        </script>    
        ";
    }

?>
