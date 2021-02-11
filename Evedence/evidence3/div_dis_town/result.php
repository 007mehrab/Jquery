<?php  
	$conn = new mysqli("localhost", "root", "", "mysqljquery");
	$sql = "SELECT * FROM divisions";
	$data = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Division</title>
</head>
<body>
	<center>
	<form action="">
		<br>

		<label for="">Divisions: </label>
		<select name="" id="divisions">
			<option value="">Select</option>
			<?php while($row = $data->fetch_assoc()){ ?>
			<option value="<?php echo $row['id']; ?>"><?php echo $row['div_name']; ?></option>
			<?php } ?>
		</select>&nbsp;&nbsp;

		<label for="">District: </label>
		<select name="" id="district">
			<option value="">Select</option>
		</select>&nbsp;&nbsp;

	</form>
	</center>


	<script src="jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#divisions").change(function(){
				var divisions = $("#divisions").val();
				$.get('district.php', {div:divisions}, function(divi){
					$("#district").html(divi);
				});
			});
			
		});
	</script>
</body>
</html>