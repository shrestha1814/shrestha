<?php
error_reporting(0);
session_start();
if(!$_SESSION["login_user"]){
    echo $_SESSION["unsucesfull"];
}
if(!$_SESSION["unsucessfull"]){
    unset($_SESSION["unsucesfull"]);
}
?>

<html>
<title> SIGNIN </title>
<h1>Please Signin </h1>
<p>Please fill this form to access your account.</p>
<body>  
<form action="/project/signin_action.php" method="post" style="border:1px solid #ccc">
<div class="container">
<label for ="email"><b>Username</b></label>
<input type="text"  name="username" required>
<br>
<br>
<label for ="Password "><b>Password</b></label>
<input type="password" name="pass" required>
<br>
<br>
<input type ="submit" name="submit" value="Signin">
<br>
<a style type="margin-left:20px;" href="/project/forgetpass.php">Forget password??</a>

</div>
</body>
</html>
