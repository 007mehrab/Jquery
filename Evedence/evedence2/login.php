<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <title>Log In</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="mt-5">Log In</h2>
        <form method="post">
          <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <input type="button" id="btns" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
    <div class="row" id="result">
      
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#btns").click(function(){
        var username = $("#username").val();
        var password = $("#password").val();
        $.get('login_action.php',{username:username, password:password}, function(data){
          $("#result").html(data);
        });
      });
    });
  </script>
</body>
</html>