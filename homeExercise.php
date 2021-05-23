<!DOCTYPE html>
<html>
<body>
<?php 
$validatename="";
$validateemail="";
$validateusername="";
$validatepassword="";
$validatecpassword="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST["firstName"];
$email=$_POST["email"];
$username=$_POST["userName"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
if(empty($name))
{
    $validatename="You must enter your name";
}
else
{
    $validatename="your name is" .$name;
}
echo"<br>";
if(empty($email))
{
    $validatemail="You must enter your email";
}
else
{
    $validateemail="your email is" .$email;
}
echo"<br>";
if(empty($username))
{
    $validateusername="You must enter your username";
}
else
{
    $validateusername="your username is" .$username;
}
echo"<br>";
if(empty($password))
{
    $validatepassword="Your must enter your password ";
}
else
{
    $validatepassword="Your password is" .$password;
}
echo"<br>";
if(empty($cpassword))
{
    $validatecpassword=" Your must enter your cpassword";
}
else
{
    $validatecpassword="Your cpasswod is" .$cpassword;
}
}
echo"<br>";
?>
<h1> Registration form </h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<table>
 <tr>
<td>Name:</td>
<td><input type="text" name="firstName"> <?php echo $validatename;?>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email"> <?php echo $validateemail;?> 
 </tr>
 <tr>
<td>User Name:</td>
<td><input type="text" name="userName"><?php echo $validateusername;?>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="passsword"><?php echo $validatepassword;?>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" name="cpassword"><?php echo $validatecpassword;?>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" id="male" name="gender1" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender2" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender3" value="other">
<label for="other">Other</label>

 </td>
</tr>
<tr>
<td>Date of Birth <br></td>
<td><input type="date" name="birthday"></td>
</tr>
<tr>
<td><input type="submit" value="Submit">
 <input type="reset">
</td>
</tr>
</table>     
</form>

</body>
</html>