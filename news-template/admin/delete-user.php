<?php
include('config.php');

//login diff role normal adimn
 
if($_SESSION['user_role'] == '0')
{
   header("Location:http://localhost/news-template/admin/post.php");
}
$userid=$_GET['id'];
$sql="DELETE FROM user WHERE user_id={$userid}";
if(mysqli_query($conn,$sql))
{
    header("Location:http://localhost/news-template/admin/users.php");
}
else{
    echo"<p style='color:red'>Can\'t delete user record</p>";
}
mysqli_close($conn);







?>