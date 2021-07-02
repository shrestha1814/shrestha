
   <!DOCTYPE html>
<html>
<head>
	<title>image detalis</title>
</head>
<body>
<form method="post">
	<input type="submit" name="submit" value="DETAILS">
</form>
</body>
</html>
 <?php


include "connection.php";
error_reporting(0);

   $conn=mysqli_connect("localhost","root","","admin") or mysqli_connect_error();
   if(isset($_POST['submit'])){
   	$sql="select * from user where id ='$id' ";
   	$res=mysqli_query($conn,$sql);
   	if(mysqli_num_rows($res)>0){
   		echo"<table>";
   		echo"<tr>";
   		echo"<th>ID</th>";
   		echo"<th>NAME</th>";
   		echo"<th>Email Id</th>";
		echo"<th>Contactth>";
		echo"<th>Age</th>";
		echo"<th>City</th>";
		echo"<th>Gender</th>";
		echo"<th>Pin</th>";
		echo"<th>Username</th>";
		echo"<th>Password</th>";
		echo"<th>Confirm Password:</th>";
		echo"<th>IMAGE</th>";
   		while($row=mysqli_fetch_assoc($res))
   		{
   			echo"<tr>";
   			echo"<td>".$row['id']."</td>";
   			echo"<td>".$row['name']."</td>";
			echo"<td>".$row['email']."</td>";
			echo"<td>".$row['contact">']."</td>";
			echo"<td>".$row['City']."</td>";
			echo"<td>".$row['Gender']."</td>";
			echo"<td>".$row['Pin']."</td>";
			echo"<td>".$row['username']."</td>";
			echo"<td>".$row['password']."</td>";
			echo"<td>".$row['conpassword']."</td>";
			echo"<td>".$row['Image']."</td>";
			
   			 echo "<td><img style='width:100px ;'src=".$row['img']."></td>";
   		     echo"</tr>";
	   	 }
	   }
      echo"</table>";
   }
   ?>