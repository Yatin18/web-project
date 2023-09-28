<?php
//  create connection

error_reporting(0);
$hostname = "localhost";
$username = "root";
$password = "";
$database = "dd";
 $con = mysqli_connect($hostname,
$username,$password,
$database);
 // if($con){
 // 	echo "connection successful";
 // }
 // else{
 // 	echo "connection failed";
 // }



// insert data into database
 if (isset($_GET['Name'])) {
 $Name = $_GET['Name'];
 $Phone = $_GET['Phone'];
 $Gmail = $_GET['Gmail'];
 $Pincode = $_GET['Pincode'];
 $Address = $_GET['Address'];
 $sql = "INSERT INTO `dt` (`Name`, `Phone`, `Gmail`, `Pincode`, `Address`) VALUES ('$Name', '$Phone', '$Gmail', '$Pincode', '$Address');";
 // echo $sql;

 if ($con->query($sql)==true) {
 	echo "successful inserted";
 }
 else
 {
 	echo "Error : $sql <br> $con->error";
 }
 $con->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style type="text/css">
		form{
			background-color: lightgray;
			height: 500px;
			width: 400px;
		}
		.Inputfeild{
			width: 300px;
			height:30px;
			border: 1px solid black;
			margin-top: 0px;
			margin-left:20px;
			border-radius: 5px; 
		}
		.InputfeildAddress{
			width: 300px;
			height:60px;
			border: 1px solid black;
			margin-top: 20px;
			margin-left:20px;
			border-radius: 5px; 
		}
		.submitButton{
		width: 300px;
			height:30px;
			border: 1px solid blue;
			margin-top: 20px;
			margin-left:30px;
			background-color: blue;
			color:white;
			font-weight: bold;
			border-radius: 5px; }		}
	</style>
</head>
<body>
	<center><h1>Fill your details for Order</h1></center>
	<center><form>
		Name:<br>
		<input  class="Inputfeild" type="text" name="Name" placeholder="Name"><br><br>
		Phone:<br>
		<input  class="Inputfeild" type="text" name="Phone" placeholder="Phone"><br><br>
		Gmail:<br>
		<input  class="Inputfeild" type="gmail" name="Gmail" placeholder="G-mail"><br><br>
		Pincode:<br>
		<input  class="Inputfeild" type="text" name="Pincode" placeholder="Pincode"><br><br>
			<!-- <input  class="Inputfeild" type="text" name="Address" placeholder="Address"> -->

Address:<br>
<textarea class="InputfeildAddress" id="w3review" name="Address" rows="4" cols="50" value="Address">

</textarea><br><br>
			<input  class="Inputfeild submitButton" type="submit" name="submit" value="Order Now">
	</form></center>
</body>
</html>