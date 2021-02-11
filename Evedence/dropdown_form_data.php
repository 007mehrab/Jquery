
<?php
$db = new mysqli('localhost','root','','mycompany');
$key = $_GET['what'];

$sql = "SELECT * FROM students WHERE round= '$key'";
$data= $db->query($sql);
?>


<br>



<div class="row">
	<div class="col-md-6">

<table>

	Select Student :
	<select class="form-control">
		<option value="0" hidden="">Select</option>
		<?php while ($row = $data->fetch_assoc()){?>
			<option value="<?php echo $row['name'] ?>"><?php echo $row['name']. " ( " . $row['course'] . " )" ?></option>
		<?php } ?>
	</select>
</table>
</div>
</div>