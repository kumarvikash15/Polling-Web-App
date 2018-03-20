<?php
require 'db_connect.php';

$no_of_poll = "SELECT COUNT(id) FROM createpoll ";
$no_of_poll_result = mysqli_query($conn,$no_of_poll);
list($no_poll) =mysqli_fetch_array($no_of_poll_result);
echo "$no_poll";

$no_yes_poll1 = "SELECT COUNT(result)FROM poll1 WHERE result='yes'";
$poll1_result_yes =mysqli_query($conn,$no_yes_poll1) or die("unable to connect");
list($yes)=mysqli_fetch_array($poll1_result_yes);
echo "$yes";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>data-show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
  </head>
  <body>
    <div class="jumbotron text-center">
      <div class="container">
        <h3>Data</h3>
      </div>
    </div>
    <div class="container">
      <table>

      </table>
    </div>
  </body>
</html>
