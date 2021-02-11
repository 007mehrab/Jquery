<?php
$db = new mysqli('localhost','root','','mycompany');

$sql = "SELECT * FROM batches";
$data= $db->query($sql);
?>

<html>
<head>
	<title>Student Form</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		option{
			color: red;
		}
		select{
			color: green;
		}
	</style>
</head>
<body>

	<script type="text/javascript" src="../jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function ()
		{
			$('#batch').change(function()
			{
				if($(this).val() != '')
				{
					$.get(
						'dropdown_form_data.php',
						{ what: $(this).val() },
						function(data)
						{
							$('#result').html(data);
						});
				}
			});
			$("#new").click(function(){
				$("#formshow").load("entry_form.php");
			});
		});
	</script><br><br>


	<div class="row">
		<div class="col-md-6">


			<center >
				<form>
					Select Round :
					<select name="" id="batch" class="form-control">

						<?php while ($row = $data->fetch_assoc()){?>
							<option value="0" hidden="">Select</option>
							<option value="<?php echo $row['round'] ?>"><?php echo $row['round'] ?></option>
						<?php } ?>

					</select>
					<div id="result"></div>
				</form>
			</center>

		</div>
	</div>


</body>
</html>