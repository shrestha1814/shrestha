 <?php
$conn=mysqli_connect("localhost", "root", "", "admin") or mysqli_connect_error();
error_reporting(0);
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
$conpassword=$_REQUEST['conpassword'];

if(isset($_REQUEST['Submit']))
{
	
$sql = " INSERT INTO `user`
(`Id`, `Name`, `Email Id`, `Contact`, `Age`, `City`, `Gender`, `Pin`, `Username`, `Password`, `Confirm Password`) 
VALUES ('','$name','$email','$contact','$age','$city','$gender','$pin','$username','$password','$conpassword')";

$res=mysqli_query($conn,$sql);
	if($res)
	{
	echo'<script>alert("NEW RECORD CREATED SUCCESSFULLY")</script>';
	echo'<script>window.location.href="/project/signin.php"</script>';
	
	}
	else{
		echo'<script>alert("SOMETHING WENT WRONG")</script>';
		}

}

?>