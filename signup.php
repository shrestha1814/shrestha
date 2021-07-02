<!DOCTYPE html>
<html>
<title> User Registration </title>
<body>  
<form action="/project/signup_action.php" method="post" >
Name:<input type = "text" name = "name">
<br>
<br>
Email Id:<input type ="email" name= "email">
<br>
<br>
Contact:<input type="text" name="contact">
<br>
<br>
Age:<input type="text" name="age">
<br>
<br>
<label for="City" <b>City</b></label>
<select name="City">
<option value ="Kolkata">Kolkata</option>
<option value ="Chennai">Chennai</option>
<option value ="Banglore">Banglore</option>
<option value ="Mumbai">Mumbai</option>
<option value ="Pune">Pune</option>
<option value ="Hyderabad">Hyderabad</option>
<option value ="Delhi">Delhi</option>
<option value ="Jaipur">Jaipur</option> 
</select>
<br>
<br>
<label for="Gender">Gender</label>
<br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
<br>
<br>
Pin:<input type="text" name="Pin">
<br>
<br>
Username:<input type="text" name="username">
<br>
<br>
Password:<input type="Password" name="password">
<br>
<br>
Confirm Password:<input type="Password" name="conpassword">
<br>
<br>
<input type="Submit" name="Submit">
</body>
</html>
