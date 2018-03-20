

<?php
session_start();
require 'db_connect.php';
$_SESSION['logged_in']=true;


$adhaar_no =$_POST['adhaar_no'];
$_SESSION['UID']=$adhaar_no;
$query="SELECT UID,phone FROM adhaar_db WHERE UID='$adhaar_no';";
$result = mysqli_query($conn,$query) or die("Error in connection with db");
if (mysqli_num_rows($result)==0) {
  header('Location:index.php');
}else {
  list($UID,$phone)=mysqli_fetch_array($result);
  if ($UID==$adhaar_no) {
    $otp = rand(100000,999999);
    $_SESSION['otp']=$otp;
    $str='https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=SIXhcVaDPUiTd52jd7W1YQ&senderid=TESTIN&channel=2&DCS=0&flashsms=0&number=91'.$phone;
    $str1='&text=your%20otp%20is%20'.$otp;
    $str2='&route=Corporate%20+';
    $str3=$str.$str1.$str2;
    echo "$otp";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $str3);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($ch, CURLOPT_TIMEOUT_MS, 0);

    curl_exec($ch);
    curl_close($ch);

  }
  }

?>

 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LogIn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <style media="screen">
    .adhaar_label{
      font-size: 30px;
      font-family: sans-serif;
      color: #1ab188;
      padding-left: 170px;

    }
      body{background: black;}
    </style>
  </head>
  <body>
    <div class="jumbotron text-centre">
      <div class="container">
        <h1>Enter OTP TO PROCEED</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <form action="otp_rec.php" method="post">
              <div class="form-row">
                <div class="form-group">
                  <span class="adhaar_label text-center">Enter OTP TO PROCEED</span><br><br>
                </div>

                <div class="form-group col-md-12">
                  <input type="number" class="form-control" name="otp_rec" class="otp" required><br>
                </div>
                <div class="form-group col-md-12">
                  <input type="submit" class="btn btn-danger" name="submit" value="SIGN-IN"><br>
                </div>
              </div>
            </form>

        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </body>
</html>
