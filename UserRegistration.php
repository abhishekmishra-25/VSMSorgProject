<?php
include('dbConnection.php');
// session_start();

$regmsg = $loginmsg = "";

// ===== SIGNUP CODE =====
if (isset($_POST['rSignup'])) {
    if (empty($_POST['rName']) || empty($_POST['rEmail']) || empty($_POST['rPassword'])) {
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
        $rName = $_POST['rName'];
        $rEmail = $_POST['rEmail'];
        $rPassword = password_hash($_POST['rPassword'], PASSWORD_DEFAULT);

        $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='$rEmail'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
        } else {
            $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES ('$rName','$rEmail','$rPassword')";
            if ($conn->query($sql) === TRUE) {
                $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Successfully Created </div>';
            } else {
                $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
            }
        }
    }
}

// ===== LOGIN CODE =====
if (isset($_POST['rLogin'])) {
    $rEmail = $_POST['loginEmail'];
    $rPassword = $_POST['loginPassword'];

    $sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$rEmail'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($rPassword, $row['r_password'])) {
            $_SESSION['is_login'] = true;
            $_SESSION['rEmail'] = $rEmail;
            header("Location: requesterDashboard.php");
            exit();
        } else {
            $loginmsg = '<div class="alert alert-danger mt-2">Invalid Password</div>';
        }
    } else {
        $loginmsg = '<div class="alert alert-danger mt-2">Email Not Registered</div>';
    }
}
?>

<!-- ===== SIGNUP FORM ===== -->
<div class="container pt-5">
  <h2 class="text-center">Create an Account</h2>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <form class="shadow-lg p-4" method="POST">
        <div class="form-group">
          <label class="font-weight-bold">Name</label>
          <input type="text" class="form-control" placeholder="Name" name="rName">
        </div>
        <div class="form-group">
          <label class="font-weight-bold">Email</label>
          <input type="email" class="form-control" placeholder="Email" name="rEmail">
        </div>
        <div class="form-group">
          <label class="font-weight-bold">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-danger" name="rSignup">Sign Up</button>
        <?php echo $regmsg; ?>
      </form>
    </div>
  </div>
</div>


