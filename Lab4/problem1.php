<?php
$name="";
$err_name="";
$username="";
$err_username="";
$password="";
$err_password="";
$email="";
$err_email="";
$phone="";
$err_phone="";
$address="";
$err_address="";
$gender="";
$err_gender="";
$bio="";
$err_bio="";
$hasError=false;
	if(isset($_POST["submit"])){
if (empty($_POST["name"])){
		$hasError=true;
		$err_name="Name Required";
	}
	else if (strlen($_POST["name"]) <=6){
		$hasError = true;
		$err_name="Name must be contain character";
	}
		else{
			$name = $_POST["name"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
	}
	if(!$hasError){
echo "<h1>submit</h1>";
echo $_POST["name"]."<br>";
echo $_POST["username"]."<br>";
echo $_POST["password"]."<br>";
echo $_POST["email"]."<br>";
echo $_POST["phone"]."<br>";
echo $_POST["address"]."<br>";
echo $_POST["gender"]."<br>";
echo $_POST["bio"]."<br>";
	
	}


?>
<html>
<body>
<form action="" method="post">
<fieldset>
<table >
<p>
<font color="black">
<b>Club Member Registration</b>
</font>
</p>
<tr>
<td>Name</td>
<td><input type="text" name="name"> </td>
<td><span><?php echo $err_name;?></span></td>
</tr>
<td>Username</td>
<td><input type="text" name="username"> </td>
<td><span><?php echo $err_username;?></span></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"> </td>
<td><span><?php echo $err_password;?></span></td>
</tr>
<tr>
<td>Confirm password</td>
<td><input type="password"> </td>
</tr>
</tr>
<td>Email</td>
<td><input type="text" name="email"> </td>
<td><span><?php echo $err_email;?></span></td>
</tr>
<tr>
<td>Phone</td>
<td> <input type-"text" name="phone"> - <input type-"text" name="phone"></td>
<td><span><?php echo $err_phone;?></span></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="address"> </td>
<td><span><?php echo $err_address;?></span></td>
<td> <input type-"text"> </td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender"> male <input type="radio" name="gender">female </td>
<td><span><?php echo $err_gender;?></span></td>
</tr>
<tr>
<td><b>Where did you hear about us?</b></td>
<td> <input type="checkbox"> <i>A friend or Colleague</i> </td>
<td> <input type="checkbox"> <i>Google</i> </td>
<td> <input type="checkbox"> <i>Blog post</i> </td> 
<td> <input type="checkbox"> <i>News Article</i> </td>
</tr>
<tr>
<td>Bio</td>
<td><textarea name="bio"></textarea> </td>
<td><span><?php echo $err_bio;?></span></td>

</tr>
<tr>
<td><input type="submit" value="register"></td>
</tr>
</table>

</fieldset>
</form>
</body>
</html>