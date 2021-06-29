<?php
	$doctorid="";
	$err_doctorid="";
	$hour="";
	$err_hour="";
    $ampm="";
	$err_ampm="";
    $minute="";
	$err_minute="";
	$hospital="";
	$err_hospital="";
	

	$hasError=false;

	$array= array("AM","PM");
    
	
	if(isset($_POST["submit"])){
		if(empty($_POST["doctorid"])){
			$hasError = true;
			$err_doctorid="Doctor ID Required";
		}
		else{
		$doctorid = $_POST["doctorid"];
		}
		
		if (!isset($_POST["hour"])){
			$hasError = true;
			$err_hour="Hour Required";
		}
		else{
			$hour = $_POST["hour"];
		}
       /*if (!isset($_POST["ampn"])){
         $hasError = true;
         $err_ampm="AM/PM Required";
        }
        else{
         $ampm= $_POST["ampm"];
        }*/
       if (!isset($_POST["minute"])){
        $hasError = true;
        $err_minute="Minute Required";
       }
        else{
        $minute = $_POST["minute"];
         }
		 if(empty($_POST["hospital"])){
			$hasError = true;
			$err_hospital="Hospital Required";
		}
		else{
		$hospital = $_POST["hospital"];
		}
       
		if(!$hasError){

			echo "<h1>Form submitted</h1>";
			echo $_POST["doctorid"]."<br>";
			echo $_POST["hour"]."<br>";
			echo $_POST["minute"]."<br>";
			echo $_POST["ampm"]."<br>";
            echo $_POST["hospital"]."<br>";
		  }

	}
	

?>

<html>
	<body>
	<h1 align="middle">Appointment</h1>
		<form action="" method="post">
		<fieldset>
		<p align="middle">
			<table>
				<tr>
					<td>Doctor ID</td>
					<td>: <input type="text" name="doctorid" value="<?php echo $doctorid;?>" > </td>
					<td><span> <?php echo $err_doctorid;?></span></td>
				</tr>
				<tr>
					<td>Time</td>
					<td>: <select name="hour"><option disabled selected>Hour</option>
                   <?php
                for($i=1; $i<=12; $i++)
                {
					if($i==$hour)
                echo "<option selected> $i </option>";
			    else
				echo "<option> $i </option>";
                  }
                ?>
             </select>
             <select name="minute">
              <option disabled selected>Minute</option>
              <?php
               for($j=1; $j<=60; $j++)
           {
			   if($j==$minute)
             echo "<option selected> $j </option>";
		      else
			 echo "<option> $j </option>";
              }
              ?>

			</select>
			<select name="ampm"> 
			 <option disabled selected>AM/PM</option>
              <?php
  							foreach($array as $p){
								if($p==$ampm)
  									echo "<option selected> $p </option>";
								else
									echo "<option> $p </option>";

  							}
  						?>
             </select>
					</td>
					<td><span> <?php echo $err_hour;?></span>
                    <span><?php echo $err_minute;?> </span>
			        <span><?php echo $err_ampm;?></span></td>
				</tr>
				<tr>
					<td>Hospital</td>
					<td>: <input type="text" name="hospital" value="<?php echo $hospital;?>" > </td>
					<td><span> <?php echo $err_hospital;?></span></td>
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