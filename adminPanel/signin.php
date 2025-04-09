<?php
include 'config.php';
$messege = false;
if(isset($_POST['adminLogin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "select * from `users` where `email`='$email' AND `password` = '$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($result);
  if($row == 1){
    session_start();
    $_SESSION['adminLogin'] = TRUE;
    header("location: index.php");
  } else {
    $messege = "Your username or password may not correct!";
  } 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 login-container">
      <h3 class="text-center mb-4">#Admin Login</h3>
      <?php 

        if($messege) {
            echo $messege;
        }
    ?>
      <form method="post" id="loginForm" action="signin.php">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <div class="input-group">
           <input type="password" class="form-control" name="password" id="password" required>
            <button class="btn btn-outline-secondary" type="button" id="togglePassword">Show</button>
        </div>
        </div>
        <button type="submit" name="adminLogin" class="btn btn-primary btn-block">Login</button>
      </form>
      
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
     document.getElementById('togglePassword').addEventListener('click', function() {
    var passwordInput = document.getElementById('password');
    var toggleButton = document.getElementById('togglePassword');
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleButton.textContent = 'Hide';
    } else {
      passwordInput.type = 'password';
      toggleButton.textContent = 'Show';
    }
  });
</script>


</body>
</html>
