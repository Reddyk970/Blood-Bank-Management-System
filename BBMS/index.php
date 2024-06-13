<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="bootstrap/css//bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="index.php">Blood Bank Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/login.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donor/login.php">Donor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="patient/login.php">Patient</a>
            </li>
            </ul>
        </div>
    </nav>
<!-- Main content -->
<div class="container-fluid" style="margin:50px;">
    <div class="row container" style="text-align: justify;">
        <div class="col-md-8 mx-auto content-left">
            <h4>What is Blood Bank Management System?</h4>
            <p>
                The Blood Bank Management System (BBMS) is an application that stores, processes, retrieves, and analyses data about blood bank administration. It also supervises blood inventory management and other blood bank-related activities.
            </p>
           
        </div>
        <div class="col-md-3 content-right">
            <img class="img-fluid" src="../BBMS/images/image1.jpg" height="auto" width="100%">
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-bottom: 5%;">
    <div class="row">
        <div class="col-10  m-auto">
        <h4>Our centers?</h4>
        <div class="card container">
            <h4>Bangalore</h4>
            <hr>
            <p>New Horizan College of Engineering </p>
        </div>
        <div class="card">
            <h4>Delhi</h4>
            <hr>
            <p>New Horizan College of Engineering.</p>
        </div>
        <div class="card">
            <h4>Hyderabad</h4>
            <hr>
            <p>New Horizan College of Engineering.</p>
        </div>
        <div class="card">
            <h4>Chennai</h4>
            <hr>
            <p>New Horizan College of Engineering.</p>
        </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-danger footer">
            &copy Hari-9705383717 Suraj-9110457226
        </div>
    </div>
</div>
</body>
</html>