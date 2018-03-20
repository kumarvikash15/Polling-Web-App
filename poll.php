<?php

session_start();
require 'db_connect.php';
$UID = $_SESSION['UID'];


$query="SELECT name,gender FROM adhaar_db WHERE UID=$UID";

$result_main=mysqli_query($conn,$query)or die("Error in conn with DB");
list($name,$gender)=mysqli_fetch_array($result_main);

//Create Poll
$createPoll_id_length ="SELECT COUNT(id) FROM createPoll";
$total_id = mysqli_query($conn,$createPoll_id_length)or die("Error in createPoll");
list($no_id)=mysqli_fetch_array($total_id);

$db_table="SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'vote';";
$total_no = mysqli_query($conn,$db_table)or die("Error in Table COunt");
list($no_table)=mysqli_fetch_array($total_no);
// echo "$no_table";
// echo "$no_id";

$tab = $no_table - $no_id;
// echo "$tab";

// for ($i=1; $i <$tab+1 ; $i++) {
//   $tab_to = $no_id + $i;
//   $tab_create = "CREATE TABLE `vote`.`poll$tab_to` ( `UID` BIGINT(12) PRIMARY KEY , `result` VARCHAR(100)  , `comment` VARCHAR(250));";
//   $tab_create_result = mysqli_query($conn,$tab_create) or die("Unable to create");
//   if ($tab_create_result) {
//     echo "Success";
//   }
// }


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>POLL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <style media="screen">

      .expand{
        width: 500px;
      }
      .col{color:red;}
    </style>
  </head>
  <body>
    <div class="jumbotron">
      <div class="container">
      <div class="row">
        <div class="col-md-9">

            <h3>
            <?php
            echo "Welcome ".$name;
            echo "<br>";
            echo "Gender: ".$gender;
             ?>

        </div>
        <div class="col-md-3">
          <a href="logout.php" class="btn btn-primary">LOGOUT</a>
          <a href="admin.php" class="btn btn-danger">Create</a>

        </div>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h3>IMP Links</h3><hr>
          <a href="#">Govt-Secure</a><hr>
          <a href="#">Secure-Environment</a><hr>
          <a href="#">Secure-Environment2</a><hr>
          <a href="#">Secure-Environment3</a><hr>
          <a href="#">Highly-Poisonous</a><hr>
          <a href="#">Imp-Links</a><hr>

        </div>
        <div class="col-md-9" style="border-left:1px solid black;">
          <h3>Select Polls to vote</h3>


<?php
$createPoll_id = "SELECT id,name,issue,option1,option2 FROM createPoll";
$createPoll_id_result = mysqli_query($conn, $createPoll_id);
if (mysqli_num_rows($createPoll_id_result) > 0) {

    while($row = mysqli_fetch_assoc($createPoll_id_result)) {

        $poll_id =$row["id"];
        $poll_name =$row["name"];
        $poll_issue =$row["issue"];
        $poll_option1 =$row["option1"];
        $poll_option2 =$row["option2"];

        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading">Poll-'.$poll_id;
        echo '</div>';
        echo '<div class="panel-body">';
        echo '<p>'.$poll_issue;
        echo '</p><hr>';


          echo "<form id='$poll_id'";
          echo " method='post'>";
          echo "<input type='radio' value='yes' name='poll_radio'";
          echo "required>".$poll_option1;
          echo '<br>';
          echo "<input type='radio' value='no' name='poll_radio'";
          echo "required>".$poll_option2;
          echo '<br><br>';
          echo "<textarea  id='feedback$poll_id'";
          echo ' class="form-control" rows=3 col=80 placeholder="comments" equired></textarea><br>' ;
          echo "<div class='progress'><div class='progress-bar progress-bar-success myprogress$poll_id' role='progressbar' style='width:0%'>0%</div></div>";
          echo "<div class='msg$poll_id'></div><br>";
          //echo '<input type="button" name="submitForm" id="#btn"'.$poll_id;

          echo "<input type='button' class='btn btn-danger' value='Vote' id='btn$poll_id'";
          echo ">";


          // echo ' class="btn btn-danger" >';
          echo "</form>";

          echo "</div>";
          echo "</div>";



      }}
          ?>


     <script>
     $(document).ready(function(){
       $.each([ 1, 2,3,4,5,6,7,8,9,10,11,12 ], function( index, i ) {
       $('#btn'+i).click(function () {
         $('.myprogress'+i).css('width', '0');
         $('.msg'+i).text('');
        var radioValue = $("input[name='poll_radio']:checked").val();
         var feedback = $('#feedback'+i).val();
          var id =i;
          if ( feedback=='' || radioValue==null) {
                             alert("Empty Field");
                             return;
            }
            var formData = new FormData();
             formData.append('radioValue', radioValue);
             formData.append('feedback',feedback);
             formData.append('id',id);
             $('#btn'+i).attr('disabled', 'disabled');
             $('.msg'+i).text('Uploading in progress...');
             $.ajax({
                                  url: 'uploadscript.php',
                                  data: formData,
                                  processData: false,
                                  contentType: false,

                                  type: 'POST',
                                  // this part is progress bar
                                  xhr: function () {
                                      var xhr = new window.XMLHttpRequest();
                                      xhr.upload.addEventListener("progress", function (evt) {
                                          if (evt.lengthComputable) {
                                              var percentComplete = evt.loaded / evt.total;
                                              percentComplete = parseInt(percentComplete * 100);
                                              $('.myprogress'+i).text(percentComplete + '%');
                                              $('.myprogress'+i).css('width', percentComplete + '%');
                                          }
                                      }, false);
                                      return xhr;
                                  },
                                  success: function (data) {
                                      $('.msg'+i).text(data);
                                      $('#btn'+i).removeAttr('disabled');
                                  }
                              });


    });
  });

     });


     </script>


        </div>
      </div>


  <footer style="padding:30px;">
      <h4>Copyright 2017 </h4>
  </footer>

  <script type="text/javascript">
      // $(document).ready(function(){
      //   $("#btn1").click(function(){
      //     alert("hello");
      //      $("#btn2").addClass('expand');
      //     $("input#btn2").attr("value", "New text");
      //     $("#btn2").attr("disabled", true);
      //     $(this).attr("disabled", true);
      //      $(this).css('width', '500');
      //   });
      // });
    </script>
  </body>
</html>
