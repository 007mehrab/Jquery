<?php

$id = $_GET['dis'];

$conn = new mysqli("localhost", "root", "", "mysqljquery");
$sql = "SELECT * FROM towns WHERE dis_id = '$id' ";
$data = $conn->query($sql);
?>
<option>Select</option>
<?php while($row = $data->fetch_assoc()){ ?>

	<option value="<?php echo $row['id']; ?>"><?php echo $row['town_name']; ?></option>
	<?php } ?>