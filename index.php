<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>VSMS</title>
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">

  <!-- Start Swiper JS Library -->

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




  <!-- End Swiper JS Library -->



</head>
<style>
 
/* Marquee CSS start here */

 .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            width: 100%;
            background:rgb(50, 91, 86);
            padding: 10px 0;
        }

        .marquee-content {
            display: inline-block;
            white-space: nowrap;
            animation: scroll 20s linear infinite;
        }

        .marquee-content img {
            width: 150px;
            margin: 0 10px;
            border-radius: 50px 20px;
            border : 2px solid yellow;
        }

        @keyframes scroll {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }

/* Marquee CSS ends here */


.carousel-item {
  text-align: center;
  transition:1s;
}

.card-title {
  color: #000 !important; /* Ensure title is visible */
  font-weight: bold;
}

.card-text {
  color: #333 !important; /* Ensure text is visible */
  font-size: 16px;
}
</style>
<body>
 <!-- Start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
  <a href="index.php" class="navbar-brand">
    <img src="images/logo.png" alt="VSMS Logo" width="300" height="100" class="d-inline-block align-top">
  </a>
  <span class="navbar-text">Customer's Happiness is our Moto</span>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
      <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
      <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
      <!-- <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li> -->
    </ul>
  </div>
</nav> 
<!-- End Navigation -->

 <!-- Start Header Jumbotron-->
 <header class="jumbotron back-image" style="background-image: url(images/Banner3.webp); background-size: cover; background-position: center;">
  <div class="container">
    <div class="content-box text-center p-4">
      <h1 class="text-uppercase text-standard font-weight-bold">Welcome to VSMS</h1>
      <p class="font-italic">Customer's Happiness is our Moto</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-success mr-4">Sign Up</a>
      
    </div>
  </div>
</header> 
<!-- End Header Jumbotron -->
</body>
</html>
    
   <!-- Marquee Tag start here -->


    <div class="marquee-container">
        <div class="marquee-content">
            <img src="images/Car1.jpeg" alt="Car 1"> 
            <img src="images/Car2.jpeg" alt="Car 2">
            <img src="images/Car3.jpeg" alt="Car 3">
            <img src="images/Car4.jpeg" alt="Car 4">
            <img src="images/Car5.jpeg" alt="Car 5">
            <img src="images/Car6.jpeg" alt="Car 6">
        </div>
    </div>
    <br>


<!-- Marquee Ends Here -->


  
<!-- Start Happy Customer  -->
<div class="jumbotron bg-danger" id="Customer">
  <div class="container">
    <h2 class="text-center text-white"> <i class="fas fa-smile"></i> Happy Customers <i class="fas fa-smile"></i></h2>

    <div id="customerCarousel" class="carousel slide mt-5" data-ride="carousel">
      <div class="carousel-inner">
        
        <!-- Customer 1 -->
        <div class="carousel-item active">
          <div class="card shadow-lg mb-2 text-center">
            <div class="card-body">
              <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px; width: 100px; height: 100px;">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">I used the VSMS platform for my car's routine maintenance, and I was impressed by how easy it was to book a service. The real-time updates kept me informed, and the team did a fantastic job. Highly recommended!</p>
            </div>
          </div>
        </div>

        <!-- Customer 2 -->
        <div class="carousel-item">
          <div class="card shadow-lg mb-2 text-center">
            <div class="card-body">
              <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px; width: 100px; height: 100px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">I had an urgent repair request, and VSMS handled it perfectly. The platform allowed me to schedule a same-day service, and the work was done quickly without compromising quality. Great service and support!</p>
            </div>
          </div>
        </div>

        <!-- Customer 3 -->
        <div class="carousel-item">
          <div class="card shadow-lg mb-2 text-center">
            <div class="card-body">
              <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px; width: 100px; height: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">VSMS made my car servicing experience stress-free. The staff was professional, the prices were clearly stated, and I loved how I could track the entire process online. No hidden charges, just excellent service!</p>
            </div>
          </div>
        </div>

        <!-- Customer 4 -->
        <div class="carousel-item">
          <div class="card shadow-lg mb-2 text-center">
            <div class="card-body">
              <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px; width: 100px; height: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">I recently used VSMS for my car’s brake repair, and I am beyond satisfied with the service. The booking process was smooth, and I received timely updates throughout. Highly recommend VSMS!</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Carousel Controls -->
      <a class="carousel-control-prev" href="#customerCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customerCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</div> 
<!-- End Happy Customer -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->
  <!-- Start Registration  -->
  <?php include('about.php') ?>
  <!-- End Registration  -->

  

<!-- Start Footer-->
<footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <img src="images/logo.png" alt="VSMS Logo" width="300" height="100" class="d-inline-block align-top">

          <h6>VehicleCare is your one-stop solution for car service, repair,
             insurance claims, and business solutions. With state-of-the-art technology and a PAN India workshop network,
             we deliver customer-focused, reliable care for all vehicles.</h6>

          <h6><span class="pr-2">Follow Us: </span></h6>
         
         <h3> <a href="https://www.whatsapp.com" target="_blank" class="pr-2 fi-color"><i class="fab fa-whatsapp"></i></a>
          <a href="https://www.instagram.com" target="_blank" class="pr-2 fi-color"><i class="fab fa-instagram"></i></a></h3>
          
        </div> <!-- End Footer 1st Column -->
    
        <div class="col-md-6 text-middhe">
          <!-- Start Footer 2nd Column -->
          Email:
          <a href="mailto:vsmssupp25@gmail.com">vsmssupp25@gmail.com</a><br>
          Phone no.
<a href="javascript:void(0);" onclick="openCallAlert()" class="pr-2 fi-color">
  +91 7021206357 <i class="fas fa-phone"></i><br>
</a>

<script>
  function openCallAlert() {
    let userConfirm = confirm("Do you want to open the calling app?");
    if (userConfirm) {
      window.location.href = "tel:+917021206357";
    }
  }
</script><br><br><br>

VSMS Auto Care Center
Plot No. 45, Sector 12,
Automobile Hub, Near XYZ Mall,
Pune, Maharashtra - 411001, India
📞 Phone: +91 7021206357<br>
📧 Email: vsmssupp25@gmail.com
           <!-- End Footer 2nd Column -->

          <div class="col-md-6 text-right">
             <!-- Start Footer 3rd Column -->
          <br><small class="ml-2" ><a href="Admin/login.php" ><h6>Admin Login</h6></a></small>

        </div> <!-- End Footer 3rd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->


  
  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>