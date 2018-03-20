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
      .col-md-8{
        background: #f1f1f1;
        padding: 60px;
        border-radius: 15px;
        box-shadow: 2px 5px #8b8f93;
      }
      h3{
        text-align: center;
        color: #1ab188;
        font-weight: 1000;
        margin: 0;
      }

    </style>
  </head>
  <body>
    <div class="jumbotron text-center">
      <div class="container">
        <h3>Voting Pannel</h3>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <form action="adhaar_otp.php" method="post">
              <div class="form-row">

                <div class="form-group">
                  <span class="adhaar_label text-center">Enter Adhaar Number</span><br><br>
                </div>
                <div class="form-group col-md-12">
                    <input type="number" class="form-control" name="adhaar_no" id="adhaar_no_id" class="adhaar" required><br>
                </div>
                <div class="form-group col-md-6">
                  <input type="submit" class="btn btn-danger form-control" name="submit" id="btn_submit" value="Generate-OTP"><br>
                </div>
                <div class="form-group col-md-6">

                    <button type="button" class="form-control btn btn-primary " data-toggle="modal" data-target="#myModal">Help-Notice </button><br><br>


                            <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">


                           <div class="modal-content">
                               <div class="modal-header bg-primary">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title">Important Notice</h4>
                          </div>
                           <div class="modal-body bg-danger">

                            <h4>Enter Adhaar No.</h4>
                            <h4>You can vote to different poll based on different Issues.</h4>

                            </div>
                         <div class="modal-footer bg-primary">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </form>

        </div>
        <div class="col-md-2"></div>
      </div>
    </div>


  </body>
</html>

</script>
