<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Covid-19 Testing Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" href="an.css">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-primary bg-light fixed-top" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><h4 style="color:cadetblue;"><i class="fa-solid fa-virus-covid"></i> Covid19 Test Management system</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="new-user-testing.php"  style="color:cadetblue;"><i class="fa-solid fa-user"></i> New User</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="patient-search-report.php"  style="color:cadetblue;"><i class="fa-solid fa-file"></i> Report</a>
          </li>
           <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="live-test-updates.php" style="color:cadetblue;"><i class="fa-regular fa-clipboard"></i> Testing Records</a>
          </li>
           <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="login.php" style="color:cadetblue;"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="detection.php" style="color:cadetblue;"><i class="fa-solid fa-circle-check"></i> Check Covid-19</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="detection.php" style="color:cadetblue;"><i class="fa-solid fa-user-doctor"></i> Doctors</a>
          </li>



        </ul>
      </div>
    </div>
  </nav>


  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/prevent.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/chobi.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/sample.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  


<!-- Button trigger modal -->
<!-- <span class="float-right">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop">→
</button></span> -->

<!-- Modal -->
<!-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
 <h5 class="modal-title" id="staticBackdropLabel">Information</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
</div>
<div class="modal-body">
  <div class="loginbox">
    <form action="login.php" method="post">

    <label for="">Full Name:</label>
    <input type="text" class="form-control" name="name">

    <label for="">Email:</label>
    <input type="email" class="form-control" name="email">

    <label for="">Phone Number:</label>
    <input type="number" class="form-control" name="pnumber">

    <label for="">Date Of Birth: </label>
    <input type="date" class="form-control" name="datebirth">

    <label class="mt-2 ml-1 pr-1" for="">Gender:</label>

            <input class="form-check-inline" type="radio" name="gender" value="male">Male
            <input class="form-check-inline" type="radio" name="gender" value="female">Female

    <br>
    <label for="">Address:</label>
    <textarea class="form-control" style="min-height:70px; max-height:70px;" name="address" placeholder="Enter Your Address"></textarea>

  </div>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="button" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</div> -->


<div class="container">
  <div class="row">
    <div class="text col-6">
      <h3>Coronavirus disease(COVID-19) is an infectious disease
      casused by a newly discoverd Coronavirus. Most People infected
      with the COVID-19, virus will experience mild to moderate, respiratory
      illness & recover without requiring special treatment. OLder
      people and those with underlying medical problem like cardiovascular
      disease.</h3>

    </div>
    <div class="imagebox col-6">
      <img src="img/sym.jpg" alt="">
    </div>

  </div>

</div>

<div class="container">
  <div class="row">
    <div class="image col-6">
      <img src="img/slider.jpg" alt="">
    </div>

    <div class="prevent col-6">
        <h3>Prevention:</h3>
        <p>1. Wash Your hands often</p>
        <p>2. Wear a Face mask</p>
        <p>3. Avoid contact with sick people</p>
        <p>4. Always cover your cough or sneeze</p>
    </div>

  </div>

  <div class="container">
    <div class="row">
      <div class="symp col-6">
        <h3>Covid-19 symptom:</h3>
        <p>i. Hight Fever 2-14 days</p>
        <p>ii. Dry Cough 2-14 days</p>
        <p>iii. Shortness of breath</p>

      </div>
      <div class="image col-6">
        <img src="img/symptom.jpg" alt="">
      </div>

    </div>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/f5c4dd0396.js" crossorigin="anonymous"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
