<?php
session_start();
include('includes/config.php');

if(isset($_POST['submit']))
  {
$contactno=$_POST['contactno'];
$username=$_POST['username'];
$password=md5($_POST['newpassword']);
$query=mysqli_query($con,"select ID from tbladmin where  AdminuserName='$username' and MobileNumber='$contactno' ");
        
    $ret=mysqli_num_rows($query);
    if($ret>0){
      $query1=mysqli_query($con,"update tbladmin set Password='$password'  where  AdminuserName='$username' && MobileNumber='$contactno' ");
       if($query1)
   {
echo "<script>alert('Password successfully changed');</script>";
echo "<script>window.location.href='login.php'</script>";

   }
     
    }
    else{
    
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
  ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid 19 Testing Management System | Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>
<style>
      img{
        height: 55vh;
        width: 100%;
      }
    </style>
<body>

 <br><br><br><br>
          <div class="col-md-8 offset-2 shadow-lg p-3 mb-5 rounded">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-7">
                    <div class="imagebox">
                      <img src="img/fan.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-5 mt-3">
                    <form name="login" method="post" name="changepassword">
                      <h2 align="center">Password Recovery</h2>
                      <input type="text" class="form-control mt-5" name="username" id="username" placeholder="Enter username" required="true">
                      <input type="text" name="contactno" placeholder="Contact Number" autocomplete="off" class="form-control mt-2">
                      <input type="password" name="newpassword" placeholder="New Password" autocomplete="off" class="form-control mt-2">
                      <input type="password" name="confirmpassword" placeholder="Confirm Password" autocomplete="off" class="form-control mt-2">

                        <button type="submit" class="mt-4 btn btn-block btn-info" value="submit">Submit</button>

                    </form>

                    <hr>
                        <div class="text-center">
                            <a class="" href="login.php">Signin</a>
                        </div>
                        <div class="text-center">
                            <a class="" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home Page</a>
                        </div>

                  </div>
                </div>
              </div>
            </div>
          </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    </body>

</html>