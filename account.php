<?php
session_start();
if(!$_SESSION["login_user"])
{
	header("location:/php/login.php/");
}
echo"welcome";
echo"<br>";
echo $_SESSION["login_user"];
echo"<br>";
echo"<br>";
echo"<a href='/project/dp.php/'>Upload a Picture</a>";
echo"<br>";
echo"<br>";
echo"<a href='/project/logout.php/'>LOG OUT</a>";

?>









