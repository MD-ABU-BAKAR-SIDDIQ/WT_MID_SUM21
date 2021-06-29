<?php
	$username="";
	$err_username="";
	$oname="";
	$err_oname="";
	
	$hasError=false;
	
	if(isset($_POST["submit"])){
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="Username Required";
		}
		else{
		$username = $_POST["username"];
		}
		
		 if(empty($_POST["oname"])){
			$hasError = true;
			$err_oname="Organ Name Required";
		}
		else{
		$oname = $_POST["oname"];
		}
       
		if(!$hasError){

			echo "<h1>Form submitted</h1>";
			echo $_POST["username"]."<br>";
            echo $_POST["oname"]."<br>";
		  }

	}
	

?>

<html>
	<body>
	<h1 align="middle">Organ Request</h1>
		<form action="" method="post">
		<fieldset>
		<p align="middle">
			<table>
			<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $username;?>" > </td>
					<td><span> <?php echo $err_username;?></span></td>
				</tr>
				<tr>
					<td>Organ Name</td>
					<td>: <input type="text" name="oname" value="<?php echo $oname;?>" > </td>
					<td><span> <?php echo $err_oname;?></span></td>
				</tr>
				<tr>
					<td colspan="2" align="middle"><input type="submit" name="submit" value="Confirm"></td>

				</tr>
			</table>
			</p>
		</fieldset>
		</form>
	</body>
</html>