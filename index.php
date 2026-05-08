<?php
include("connection.php");

if(isset($_POST['submit'])){

  $student_name=$_POST['student_name'];
  $student_email=$_POST['student_email'];
  $student_phone_number=$_POST['student_phone_number'];
  $student_education=$_POST['student_education'];
  $student_city=$_POST['student_city'];

  $sql=$conn->prepare("INSERT INTO student_registration (student_name,student_email,student_phone_number,student_education,student_city)VALUES('$student_name','$student_email','$student_phone_number','$student_education','$student_city')");
  $sql->execute();
  echo "Student Registration Successfully";


}


if(isset($_POST['name_search'])){

    $search_name = $_POST['search_name'];

    $sql = $conn->prepare("SELECT * FROM student_registration WHERE student_name='$search_name'");

    $sql->execute();

    $result_name = $sql->fetchAll();

    if(count($result_name) > 0){

        echo "Student exists inside database.";

    }
    else{

        echo "Student not found.";

    }

}

if(isset($_POST['email_search'])) {

  $Search_email = $_POST['search_email'];

  $sql = $conn->prepare("SELECT * FROM student_registration WHERE student_email = '$Search_email'");

  $sql-> execute();
  
  $result_email = $sql->fetchALL();

    if(count($result_email) > 0){

        echo "Email exists inside database.";

    }
    else{

        echo "email not found.";

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Information Form</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow p-4">

            <h2 class="text-center mb-4">
                User Information Form
            </h2>

            <form method="POST">

                <!-- User Name -->
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="student_name" class="form-control" placeholder="Enter your name">
                </div>

                <!-- Age -->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="student_email" class="form-control" placeholder="Enter your Email">
                </div>


                <!-- Dream -->
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="student_phone_number" class="form-control"
                        placeholder="Enter your cell number">
                </div>

                <!-- Studies -->
                <div class="form-group">
                    <label>Education</label>
                    <input type="text" name="student_education" class="form-control" placeholder="Enter your Education">
                </div>

                <!-- Father Name -->
                <div class="form-group">
                    <label>City Name</label>
                    <input type="text" name="student_city" class="form-control" placeholder="Enter your City name">
                </div>

                <!-- Submit Button -->
                <button type="submit" name="submit" class="btn btn-primary btn-block">
                    Submit
                </button>

            </form>
            <form method="POST" class="pt-5">

                <div class="form-group">
                    <label>Search Student</label>
                    <input type="text" name="search_name" class="form-control" placeholder="Enter Student Name">
                </div>

                <button type="submit" name="name_search" class="btn btn-success">
                    Search Student
                </button>

            </form>
            <form method="POST" class="pt-5">

                <div class="form-group">
                    <label>Search Email</label>
                    <input type="email" name="search_email" class="form-control" placeholder="Enter Student Email">
                </div>

                <button type="submit" name="email_search" class="btn btn-success">
                    Search Student
                </button>

            </form>

        </div>



    </div>
    <div class="pt-5">
    </div>

</body>

</html>
