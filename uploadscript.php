<?php
require 'db_connect.php';
session_start();
$UID = $_SESSION['UID'];
$id=$_POST['id'];
$_SESSION['uid']=$id;
//POLL TABLE
$query_result="SELECT * FROM poll$id WHERE UID=$UID";

$result_poll= mysqli_query($conn,$query_result) or die("Error in DB-poll");

list($uid,$result,$comment)=mysqli_fetch_array($result_poll);

if (mysqli_num_rows($result_poll)==0) {
  $query_insert = "INSERT INTO poll$id(UID) VALUES ($UID)";
  mysqli_query($conn,$query_insert ) or die("Error in Insertion");
}


if ($result==null) {
  $radio =$_POST['radioValue'];
  $comments=$_POST['feedback'];


  $query= "UPDATE poll$id SET result='$radio' , comment='$comments' WHERE UID='$UID'";
  $result = mysqli_query($conn,$query) or die("Error updating");
  if ($result) {
    echo "Voted successfully";

  }else {
    echo "Failed !!Try Agains";
  }
}else {
  echo "Vote Registered Already";
}
$query1= "SELECT COUNT(UID) FROM poll$id WHERE result='yes'";
$result1 =mysqli_query($conn,$query1) or die("unable");
list($yes)=mysqli_fetch_array($result1);


$query2= "SELECT COUNT(UID) FROM poll$id WHERE result='no'";
$result2 =mysqli_query($conn,$query2) or die("unable");
list($no)=mysqli_fetch_array($result2);
//
$sum =$yes+$no;
$yes_per =($yes/$sum)*100;
$no_per =($no/$sum)*100;
echo "-YES=$yes_per%";
echo "-NO=$no_per%";

?>
