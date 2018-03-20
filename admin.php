<?php
session_start();
if (isset($_POST['submit'])) {
  $user =$_POST['user'];
  $pass =$_POST['pass'];
  $username ="admin";
  $password ="admin";
  if ($user == $username) {
    if ($pass ==$password) {
    header('Location:create_poll.php');
  }else {
    echo "<h4>Wrong-Password</h4>";
  }
  }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Log-In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <style media="screen">
      h3,p{
        text-shadow: 4px 4px 5px red;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron text-center">
      <div class="container">
        <h3>LOG-IN</h3>
        <p>You Can Create Poll here !</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
           <div class="col-md-6" style="background:#f1f1f1; padding:50px; border-radius:15px; box-shadow:5px 10px red;">
           <form class="form-group" action="#" method="post">
            <input type="text" name="user" class="form-control" placeholder="Username.." required><br><br>
            <input type="password" name="pass" placeholder="Password.." class="form-control" required><br><hr>
            <input type="submit" name="submit" value="SIGN-IN" class=" btn btn-danger form-control">


          </form>



        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </body>
</html>
