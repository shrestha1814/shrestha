<html>
<body>
<form method="post" enctype="multipart/form-data" action="project/details.php"">
SELECT FILE:
<input type="file" name="filetoupload">
<input type="submit" value="Upload Image" name="submit">
</form>
</body>

</html>

<?php
include "connection.php";
error_reporting(0);
$target_path="images/";
$target_path = $target_path.basename($_FILES['filetoupload']['name']);
	if(isset($_POST['submit']))
	{
		if(move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_path ))
		{
			$sql="insert into  user(image) values('$target_path') where id='$id'";
			$res=mysqli_query($conn,$sql);
			echo "File uploaded successfully";
	
		}
	else{
		echo"Sorry";
		}

	}
?>