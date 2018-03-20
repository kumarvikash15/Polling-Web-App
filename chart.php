<?php

require 'db_connect.php';
header ('Content-Type: application/json');



//echo "Connected successfully";
$query= sprintf("SELECT result FROM poll1");
$result=mysqli_query($conn,$query);

$data =array();
foreach ($result as $row)
{
  $data[]=$row;
}

//$result->close();

print json_encode($data);
//$poll1 = "SELECT COUNT(POLL1) FROM uid where POLL1='YES'";
//$poll1_count = mysqli_query($conn,$poll1) or die("error");
//$count1 = mysqli_fetch_array($poll1_count);


//  echo $count1[0];

?>
