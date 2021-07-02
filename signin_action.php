<!DOCTYPE html>
<html>
<head>
    <title>sign in</title>
</head>
<body>

</body>
</html>
<?php
session_start();
include "connection.php";
$username=mysqli_real_escape_string($conn,$_REQUEST['username']);
$password= mysqli_real_escape_string($conn,$_REQUEST['pass']);
if(isset($_POST['submit'])){
	
	
	
	$sql="select * from `user` where username='$user' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $found_num_rows=mysqli_num_rows($result);
    if($found_num_rows)
    {
        $_SESSION["login_user"]=$user;
        echo $_SESSION["login_user"];
        header("location:/project/account.php/");
    }
    else
    {
        $_SESSION["unsucesfull"]="invalid user detalis";
        header("location:/project/signin.php/");
    }
}

?>