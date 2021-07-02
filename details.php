<!DOCTYPE html>
<html>
<head>
	<title>fetch data</title>
</head>
<body>
<form method="post" >
	<input type="submit" name="submit" value="FETCH">
</form>
</body>
</html>
<?php
   $conn=mysqli_connect("localhost","root","","admin") or mysqli_connect_error();
   if(isset($_POST['submit'])){
   	$sql="select * from user where id= '$id'";
   	$res=mysqli_query($conn,$sql);
   	if(mysqli_num_rows($res)>0){
   		echo"<table>";
   		echo"<tr>";
   		echo"<th>ID</th>";
   		echo"<th>NAME</th>";
   		echo"<th>E-MAIL</th>";
   		echo"<th>CONTACT</th>";
   		echo"<th>AGE</th>";
		echo"<th>GENDER</th>";
		echo"<th>PIN</th>";
		echo"<th>USERNAME</th>";
		echo"<th>PASSWORD</th>";
   		while($row=mysqli_fetch_assoc($res))
   		{
   			{
   			echo"<tr>";
   			echo"<td>".$row['img']."</td>";
   			 echo "<td><img src=".$row['img']."></td>";
   		     echo"</tr>";
			}
			
			
		}
   	echo"</table>";
   }

?>