<?php 
session_start();
include ("connect.php");

$vote = $_POST['gvotes'];
$total_votes = $vote + 1;
$gid = $_POST['gid'];
$userId = $_SESSION['userdata']['Id'];

$updateVote = mysqli_query($connect,"UPDATE user SET Vote = '$total_votes' WHERE Id='$gid'");
$updateStatus = mysqli_query($connect,"UPDATE user SET Status = 1 WHERE Id = '$userId'");

if($updateVote and $updateStatus)
{
    $groups = mysqli_query($connect,"SELECT * FROM user WHERE role='Group'");
    $groupData = mysqli_fetch_all($groups, MYSQLI_ASSOC);

    $_SESSION["userdata"]['Status'] = 1;
    $_SESSION["groupdata"] = $groupData;

    echo "
        <script>
            alert('Voting Successfully');
            window.location = '../routes/dashboard.php';
        </script>
    ";
}
else 
{
    echo "
        <script>
            alert('Some error occured');
            window.location = '../routes/dashboard.php';
        </script>
    ";
}
?>