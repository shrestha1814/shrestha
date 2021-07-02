<?php
$conn=mysqli_connect("localhost","root","","admin") or mysqli_connect_error();
$id=$_REQUEST['id'];
$query="delete from user where ID='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
echo'<script> alert("record deleted sucessfully")</script>';
echo'<script>window.location.href="/project/admin.php"</script>';
}
?>