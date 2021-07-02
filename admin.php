<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<form method="post">
	<input type="submit" name="submit" value="FETCH">
</form>
</body>
</html>
<?php
   $conn=mysqli_connect("localhost","root","","admin") or mysqli_connect_error();
   error_reporting(0);
   if(isset($_POST['submit'])){
   	$sql="select * from user";
   	$res=mysqli_query($conn,$sql);
   	if(mysqli_num_rows($res)>0){
   		echo"<table>";
   		echo"<tr>";
   		echo"<th>Id</th>";
   		echo"<th>Name</th>";
   		echo"<th>Email Id</th>";
   		echo"<th>Contact</th>";
   		echo"<th>Age</th>";
		echo"<th>City</th>";
		echo"<th>Gender</th>";
		echo"<th>Pin</th>";
		echo"<th>Username</th>";
		echo"<th>Password</th>";
		echo"<th>image</th>";
		echo"</tr>";
   		while($row=mysqli_fetch_assoc($res))
   		{
   			echo"<tr>";
   			echo"<td>".$row['Id']."</td>";
   			echo"<td>".$row['Name']."</td>";
   			echo"<td>".$row['Email Id']."</td>";
   			echo"<td>".$row['Contact']."</td>";
   			echo"<td>".$row['Age']."</td>";
			echo"<td>".$row['City']."</td>";
			echo"<td>".$row['Gender']."</td>";
			echo"<td>".$row['Pin']."</td>";
			echo"<td>".$row['Username']."</td>";
			echo"<td>".$row['Password']."</td>";
		
			
			
			/*echo"<td><a href ='/project/editinfo.php/?id=$row[ID] & nm=$row[EName] & cty=$row[City] & slary=$row[Salary] 
			& dept=$row[Department]'>EDIT/UPDATE</a></td>";
			echo"<td><a href ='/php/erase.php/?id=$row[ID]'>DELETE</a></td>";*/
			
			echo"<td><a href ='/project/editinfo.php/?id=$row[Id] & nm=$row[Name] 
			& mail=$row[Email Id] & cntact=$row[Contact]& age=$row[Age]
			& cty=$row[City] & gndr=$row[Gender]& pin=$row[Pin]
			& usrnm=$row[Username]& psw=$row['Password']'>EDIT/UPDATE</a></td>";
			echo"<td><a href ='/project/erase.php/?id=$row[ID]'>DELETE</a></td>";
			
   			echo"</tr>";
   		
   		}
   	}
   	echo"</table>";
   }

?>