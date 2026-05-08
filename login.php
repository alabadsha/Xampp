<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-4">

  
</body>
</html>
<?php
    
    $email = $_POST["email"];
    $pass = $_POST['password'];
    $R_pass = $_POST['repeat_password'];
    $a_pass = 1234;
    $a_email = "ali@gmail.com";
    
    if ($pass == $a_pass && $R_pass == $a_pass && $email == $a_email) {
        echo "<span class='text-success'>\tLogin Successful ✅</span>";
    }
    elseif ($pass <= 0 && $R_pass <= 0) {
        echo "\tType email and password.";
    } else {
        echo "<span class='text-danger'>\tIn-Valid User❌</span>";
    }
?>
