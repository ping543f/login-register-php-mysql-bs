<?php
session_start();
// $stat=$_GET['status'];
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Registration Successful ! You can login now.</strong>
    </div>';
    } else if ($_GET['status'] == 'failed') {
        echo '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Invalid user name or password</strong>.
    </div>';
    }
} else {
    echo '<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert">&times;</button>
If you are not registered, please register first.
</div>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--local source-->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Login Page example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->


     <!--local source-->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <a class="navbar-brand" href="index.php">Home</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="reg.php">Register / Signup </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login / Signin</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="col-md-8 mx-auto">
            <div class="signup-form">
                <form action="loginProcess.php" method="post" enctype="multipart/form-data">
                    <h2>Login</h2>
                    <p class="hint-text">Enter Login Details</p>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
                    </div>
                    <div class="text-center">Don't have an account? <a href="reg.php">Register Here</a></div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->
</body>

</html>