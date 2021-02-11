<?php

$id = $_GET['div'];

$conn = new mysqli("localhost", "root", "", "jquery");
$sql = "SELECT * FROM district WHERE div_id = '$id' ";
$data = $conn->query($sql);
?>
<option>Select</option>
<?php while($row = $data->fetch_assoc()){ ?>

	<option value="<?php echo $row['id']; ?>"><?php echo $row['dis_name']; ?></option>
	<?php } ?>