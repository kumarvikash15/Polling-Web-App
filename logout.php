<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
</head>

<body>
    <div class="jumbotron">
      <div class="container ">
        <div class="form">
              <h1>Thanks for stopping by</h1>

              <p><?= 'You have been logged out!'; ?></p>

              <a href="index.php"><button class="btn btn-lg btn-primary"/>Home</button></a>

        </div>
      </div>
    </div>
</body>
</html>
