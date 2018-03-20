<?php
session_start();
$otp = $_SESSION['otp'];
if (isset($_POST['submit'])) {
  $otp_rec =$_POST['otp_rec'];
  if ($otp_rec == $otp) {
    header('Location:poll.php');
  }else {

echo "ERRROOROROROORO";

  }}


?>
