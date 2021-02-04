<?php

$db = new mysqli("localhost","root","","students");
$key = $_GET['what'];

$sql = "SELECT * FROM student WHERE status = '$key'";
$data = $db->query($sql);
?>
<br>

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact No</th>
	</tr>


<?

while($row = $data->fetch_assoc()){  ?>

<tr>
	<td><? echo $row['id']?> </td>
	<td><? echo $row['name']?> </td>
	<td><? echo $row['address']?> </td>
	<td><? echo $row['contact_no']?> </td>

</tr>

<?php } ?>

</table>