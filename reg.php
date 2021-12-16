<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'eae') {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Email aready exists!</strong>
        </div>';
    } else if ($_GET['status'] == 'failed') {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Registration failed ! Please try again</strong>
        </div>';
    } else if ($_GET['status'] == 'mismatch') {
        echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Password mismatch ! Please try again</strong>
        </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--online source-->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Registration page example</title>
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


    <div class="contaner-fluid">
        <!-- <div class="container-fluid">  -->
        <div class="col-md-8 mx-auto">
            <div class="signup-form">
                <form action="register.php" method="post" enctype="multipart/form-data">
                    <h2>Register</h2>
                    <p class="hint-text">Create your account</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                            <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
                    </div>
                    <div class="form-group">
                        <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
                    </div>
                    <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
                </form>
            </div>
        </div>
        <div>
            <!-- Footer -->
            <?php include 'footer.php'; ?>
            <!-- Footer -->
</body>

</html>