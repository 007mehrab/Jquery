<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <title>Log In</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">

        <h2 class="mt-5">Log In</h2><br>

        <form method="post">
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" id="email"placeholder="Enter email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <input type="button" id="btns" class="btn btn-success" value="Submit"><br><br>
        </form>
      </div>
    </div>
    <div class="row" id="result">
      
    </div>
  </div>

   <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
  <script>
    $(document).ready(function(){
      $("#btns").click(function(){
        var email = $("#email").val();
        var password = $("#password").val();
        $.post('login_check.php',{email:email, password:password}, function(data){
          $("#result").html(data);
        });
      });
    });
  </script>

</body>
</html>