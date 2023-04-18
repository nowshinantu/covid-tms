<!DOCTYPE html>
<html>
  <head lang="en">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>COVID-19 Detection</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

  </head>
  <body id="page-top">
    <!-- page wrapper -->
    <div id="wrapper">

    <?php
    include 'navbar.php';
    ?>

      <!-- content wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

      <!-- main content -->
      <div id="content">

      <!-- begin page content -->
      <div class="container-fluid" style="margin-top: 80px;">

      <!-- page heading -->
      <h1 class="h3 mb-4 text-info-800 bg-light text-center">Check Covid-19 Symptoms</h1>

    <div class="container" style="font-size:18px;">
    <form id="covid-form">
      <label for="fever">1. Do you have a fever or chills?</label><br>
      <span class="text-info">Answer:</span>
      <input type="radio" name="fever" value="yes"> Yes
      <input type="radio" name="fever" value="no"> No
      <br>

      <label for="fever">2. Do you have a cough?</label><br>
      <span class="text-info">Answer:</span>
      <input type="radio" name="cough" value="yes"> Yes
      <input type="radio" name="cough" value="no"> No
      <br>
      
      <label for="cough">3. Do you have Muscle or body pain?</label><br>
      <span class="text-info">Answer:</span>
      <input type="radio" name="pain" value="yes"> Yes
      <input type="radio" name="pain" value="no"> No
      <br>

      <label for="cough">4. Do you have sore throat?</label><br>
      <span class="text-info">Answer:</span>
      <input type="radio" name="sore" value="yes"> Yes
      <input type="radio" name="sore" value="no"> No
      <br>

      <label for="cough">5. Do you have Diarrhea?</label><br>
      <span class="text-info">Answer:</span>
      <input type="radio" name="diarrhea" value="yes"> Yes
      <input type="radio" name="diarrhea" value="no"> No
      <br>

      
      <label for="breathing">6. Do you have problem with loss of taste or smell?</label><br>
      <span class="text-info">Answer:</span>
      <input type="radio" name="smell" value="yes"> Yes
      <input type="radio" name="smell" value="no"> No
      <br>
      
      <label for="breathing">7. Are you experiencing difficulty breathing?</label><br>
      <span class="text-info">Answer:</span>
      <input type="radio" name="breathing" value="yes"> Yes
      <input type="radio" name="breathing" value="no"> No
      <br>

      <label for="contact">8. Have you been in close contact with someone who has tested positive for COVID-19?</label><br>
      <span class="text-info">Answer:</span>
      <input type="radio" name="contact" value="yes"> Yes
      <input type="radio" name="contact" value="no"> No
      <br><br>
      
      <input type="submit" class="btn btn-block btn-info" value="Submit">
    </form>
    
    <div id="result" class="mt-3"></div>
    </div>

    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <?php include_once('includes/footer.php');?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
    <script src="app.js"></script>
  </body>
</html>
