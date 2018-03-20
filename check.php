



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
    <div class="jumbotron text-center">
      <div class="container">
        <h2>Enter OTP to Proceed...</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <form action="otp_rec.php" method="post">
              <div class="form-row">
                <div class="form-group">
                  <span class="adhaar_label text-center">Enter OTP</span><br><br>
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
