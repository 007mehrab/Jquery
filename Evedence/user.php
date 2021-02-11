<?php  

$db = new mysqli("localhost","root","","mycompany");

if(isset($_POST["submit"])){
	extract($_POST);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$data= $db->query($sql);
	if($data->num_rows>0){
		echo "SuccessFully Valid";
	}
	else{
		echo "Invalid User";
	}
}

?>


<form action="" method="post">
	
	UserNama : <br>
	<input type="text" name="username"><br>
	Password : <br>
	<input type="password" name="password"><br><br>

	<input type="submit" name="submit" value="Submit">
</form>