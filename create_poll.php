<?php
session_start();
require 'db_connect.php';


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <style media="screen">
  h2{
    text-align: center;
    color: #ff7607;
    font-weight: 1000;
    margin: 0;
  }
    </style>
  </head>
  <body>
     <div class="jumbotron text-center">
       <div class="container" style="color:green;">
         <h2>Create Test</h2>
       </div>
     </div>
<div class="container" style="background:#1ab188; padding:40px; border-radius:15px; box-shadow: 5px 7px #f1f1f1;">

    <form  action="#" method="post">
      <div class="form-row" >
        <div class="form-group col-md-6">
          <input type="number" class="form-control" name="id" placeholder="ID" required><br>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="poll_name" placeholder="poll_name" required><br>
        </div>
           <div class="form-group col-md-12">
             <textarea name="issue" rows="4" cols="80" class="form-control" placeholder="Issue"></textarea><br>
           </div>
           <div class="form-group col-md-12">
             <input type="text" class="form-control" name="opt1" placeholder="1stOption" required><br>
           </div>
           <div class="form-group col-md-12">
             <input type="text" class="form-control" name="opt2" placeholder="2ndOption" required><br>
           </div>
           <div class="form-group col-md-12">
             <input type="submit" class="form-control btn btn-danger" name="submit" value="submit"><br>
           </div>
         </div>
      </form>

     </div>
  </body>
</html>





<?php

if (isset($_POST['submit'])) {
  $id =$_POST['id'];
  $name_poll = $_POST['poll_name'];
  $issue_poll= $_POST['issue'];
  $option1 = $_POST['opt1'];
  $option2=$_POST['opt2'];

  echo "$id.$name_poll.$issue_poll.$option1.$option2";

  $query ="INSERT INTO `createPoll`(`id`, `name`, `issue`, `option1`, `option2`) VALUES ($id,'$name_poll','$issue_poll','$option1','$option2')";

  $result =mysqli_query($conn,$query) or die("Error In Connection");


$query_insert = " CREATE TABLE `vote`.`poll$id` ( `UID` BIGINT(12) NOT NULL , `result` VARCHAR(100) NOT NULL , `comment` VARCHAR(250) NOT NULL ) ENGINE = InnoDB;";
$query_result =mysqli_query($conn,$query_insert)or die("Error in creation of table");



if ($query_result) {
  echo "successfull";
}


}

?>
