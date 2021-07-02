<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
Name: <input type="text" value="<?php echo $_GET['nm'];?>" name="name">
<br>
Email Id: <input type="text" value="<?php echo $_GET['mail'];?>" name="email">
<br>
Contact:<input type="text"value="<?php echo $_GET['cntct'];?>" name="contact">
<br>
Age:<input type="text"value="<?php echo $_GET['age'];?>" name="age">
<br>
City:<input type="text"value="<?php echo $_GET['cty'];?>" name="city">
<br>
Gender:<input type="text"value="<?php echo $_GET['gndr'];?>" name="gender">
<br>
Pin:<input type="text"value="<?php echo $_GET['pin'];?>" name="pin">
<br>
Username:<input type="text"value="<?php echo $_GET['usrnm'];?>" name="Username">
<br>
Password:<input type="text"value="<?php echo $_GET['psw'];?>" name="password">
<br>

<input type="submit" value="submit" name="Submit">
<input type="reset" name="Reset">
</form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost", "root", "", "admin") or mysqli_connect_error();
error_reporting(0);
	$id=$_GET['Id'];
	$_GET['nm'];
	$_GET['mail'];
	$_GET['cntct'];
	$_GET['age'];
	$_GET['City'];
	$_GET['gndr'];
	$_GET['pin'];
	$_GET['usrnm'];
	$_GET['psw'];
	if(isset($_REQUEST['Submit'])) 
	{
		$id=$_REQUEST['id'];
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$contact=$_REQUEST['contact'];
		$age=$_REQUEST['age'];
		$city=$_REQUEST['City'];
		$gender=$_REQUEST['gender'];
		$pin=$_REQUEST['Pin'];
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$query="update user set Name='$name',Email Id`='$email',Contact='$contact',Age='$age' city=$city gender=$gender 
		Pin=$pin Username=$username Password=$password where ID='$id'";
		 
		 $data=mysqli_query($conn,$query);
		  if($data)
		{
		echo'<script> alert("recorde Updated sucessfully")</script>';
		echo'<script>window.location.href="/project/admin.php"</script>';
		}
	}
?>
	