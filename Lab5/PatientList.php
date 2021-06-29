<?php
	$pname="";
	$err_pname="";
	$hour="";
	$err_hour="";
    $ampm="";
	$err_ampm="";
    $minute="";
	$err_minute="";
	$phone="";
	$err_phone="";
	$department=[];
    $err_department="";

	$hasError=false;

	$array= array("AM","PM");
    
	function Dep($de){
	global $department;
	foreach($department as $d){
		if($d==$de){
			return true;
		}
	}
	return false;
    }
	if(isset($_POST["submit"])){
		if(empty($_POST["pname"])){
			$hasError = true;
			$err_pname="Patient Name Required";
		}
		else{
		$pname = $_POST["pname"];
		}
		
		/*if(!isset($_POST["department"])){
		$hasError=true;
		$err_department="Required Department";  
	  }
	  else{
		  $department= $_POST["department"];
	  }*/
		
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
		 if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone="Phone Required";
		}
		else{
		$phone = $_POST["phone"];
		}
       
		if(!$hasError){

			echo "<h1>Form submitted</h1>";
			echo $_POST["pname"]."<br>";
			echo $_POST["hour"]."<br>";
			echo $_POST["minute"]."<br>";
			echo $_POST["ampm"]."<br>";
            echo $_POST["phone"]."<br>";
		  }

	}
	

?>
<html>
	<body>
	<h1 align="middle">Patient List</h1>
		<form action="" method="post">
		<fieldset>
		<p align="middle">
			<table>
			<tr>
					<td>Patient Name</td>
					<td>: <input type="text" name="pname" value="<?php echo $pname;?>" > </td>
					<td><span> <?php echo $err_pname;?></span></td>
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
					<td>Phone</td>
					<td>: <input type="text" name="phone" value="<?php echo $phone;?>" > </td>
					<td><span> <?php echo $err_phone;?></span></td>
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
				