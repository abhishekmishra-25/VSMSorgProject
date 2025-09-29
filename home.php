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
  
</head>

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
      <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
      <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
      <li class="nav-item"><a href="#Contact" class="nav-link">Contact Us</a></li>
    </ul>
  </div>
</nav> 
<!-- End Navigation -->
 


  <!-- Start Header Jumbotron-->
<header class="jumbotron back-image" style="background-image: url(images/Homebg.webp); background-size: cover; background-position: center;">
  <div class="container ">
    <div class="content-box text-center p-4">
      
      <p>
        <h1>Welcome to Vehicle Service Management System!</h1><br>  
        Thank you for visiting our platform! We are dedicated to providing seamless and hassle-free vehicle service management.
        Book appointments, track your service history, make secure payments, and much more—all in one place.<br>
        Experience convenience like never before! If you need any assistance, feel free to reach out to us.<br>
        Drive with confidence. We’ve got your service needs covered!<br> 
     </p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">DashBoard</a>
    </div>
  </div>
</header> 
<!-- End Header Jumbotron -->

<!-- Start Header Jumbotron CSS -->
<style>
  .content-box {
    background: white; 
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    max-width: 500px; 
    margin: auto;
  }
</style>
<!-- End Header Jumbotron CSS-->
</body>
</html>

  
  <!--Introduction Section End-->
 <!-- Start Services -->
<div class="container text-center border-bottom" id="Services">
  <h2><i class="fas fa-car"></i> Our Services <i class="fas fa-car"></i></h2>

  <div class="row mt-4">
    
    <!-- Oil Change -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-lg p-3">
        <a href="oilchange.php">
          <img src="images/oil.png" class="img-fluid mx-auto d-block" width="100" height="100">
        </a>
        <h4 class="mt-3">Oil Change</h4>
      </div>
    </div>

    <!-- Full Car Service -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-lg p-3">
        <a href="ACservice.php">
          <img src="images/ac.png" class="img-fluid mx-auto d-block" width="100" height="100">
        </a>
        <h4 class="mt-3">AC Service</h4>
      </div>
    </div>

    <!-- Car Wash -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-lg p-3">
        <a href="CarWash.php">
          <img src="images/CarWash.svg" class="img-fluid mx-auto d-block" width="100" height="100">
        </a>
        <h4 class="mt-3">Car Wash</h4>
      </div>
    </div>

    <!-- Wheel Alignment -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-lg p-3">
        <a href="wheelcare.php">
          <img src="images/wheel.png" class="img-fluid mx-auto d-block" width="100" height="100">
        </a>
        <h4 class="mt-3">Wheel Care</h4>
      </div>
    </div>

    <!-- Battery Replacement -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-lg p-3">
        <a href="batteryReplace.php">
          <img src="images/battery.png" class="img-fluid mx-auto d-block" width="100" height="100">
        </a>
        <h4 class="mt-3">Battery Replacement</h4>
      </div>
    </div>

    <!-- Denting Painting -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-lg p-3">
        <a href="dentingpainting.php">
          <img src="images/dent.png" class="img-fluid mx-auto d-block" width="100" height="100">
        </a>
        <h4 class="mt-3">Denting Painting</h4>
      </div>
    </div>

  </div>
</div> 
<!-- End Services -->




  
  <!-- Start Contact Us -->
  <div class="container" id="Contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form action="submitContact.php" method="POST" class="shadow-lg p-4">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" placeholder="How can we help you?" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-danger" name="submitContact">Send Message</button>
        </form>
      </div>
    </div>
  </div>
  <!-- End Contact Us -->

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