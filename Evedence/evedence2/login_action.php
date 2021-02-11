<?php
if(isset($_GET['username']) && isset($_GET['password'])){
  $username = $_GET['username'];
  $password = $_GET['password'];

}
$conn = new mysqli("localhost", "root", "", "mysqljquery");
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$conn->query($sql);
if($conn->affected_rows > 0){ ?>
  <div class="alert alert-success">
    <strong>Successfully!</strong> <?php echo $username ?> logeed in.
  </div>
<?php    }
else{ ?>
  <div class="alert alert-warning">
    <strong>Warning!</strong> user name and password wrong.
  </div>
  <?php } ?>