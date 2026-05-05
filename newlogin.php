<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-4 mx-auto">

        <div class="card p-4">
            <h4 class="text-center">Login</h4>

            <form method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button class="btn btn-primary btn-block">Login</button>
            </form>

            <div class="mt-3 text-center">
                <?php

                // ONLY IF STATEMENTS LOGIN LOGIC

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    if (isset($_POST['username']) && isset($_POST['password'])) {

                        if ($_POST['username'] == "admin") {

                            if ($_POST['password'] == "1234") {
                                echo "<span class='text-success'>Login Successful ✅</span>";
                            } else {
                                echo "<span class='text-danger'>Wrong Password ❌</span>";
                            }

                        } else {
                            echo "<span class='text-danger'>User Not Found ❌</span>";
                        }

                    }

                }

                ?>
            </div>

        </div>

    </div>
</div>

</body>
</html>