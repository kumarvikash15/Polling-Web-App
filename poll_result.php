<?php
session_start();
require 'db_connect.php';

$createPoll_id_length ="SELECT COUNT(id) FROM createPoll";
$total_id = mysqli_query($conn,$createPoll_id_length)or die("Error in createPoll");
list($no_id)=mysqli_fetch_array($total_id);
// echo "$no_id";


// branch on the basis of 'calculate' value
switch ($_POST['submitForm']) {
      // if calculate => add
      case 'type1':
            $radio_option =$_POST['poll_radio'];
            $comments =$_POST['feedback1'];
            echo "$radio_option.$comments";
            break;

      // if calculate => subtract
      case 'type2':
            $radio_option1 =$_POST['poll_radio'];
            $comments1 =$_POST['feedback1'];
            echo "$radio_option.$comments";
            break;

      // if calculate => multiply
      case 'type3':
            $radio_option =$_POST['poll_radio'];
            $comments =$_POST['feedback1'];
            echo "$radio_option.$comments";
            break;
}



// for ($i=1; $i <=$no_id ; $i++) {
//   echo "$i";
//   if (isset($_POST['submit'.$no_id])) {
//     if(isset($_POST['radio']))
// {
// echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
// }
//   }
// }



?>
