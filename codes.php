<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codes example</title>
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
            <li class="nav-item">
                <a class="nav-link" href="codes.php">Code Examples</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="clearfixz"></div>
        <div class="col-md-12 mx-auto">
            <h6>Landing Page / Home page (index.php)</h6>
            <hr>
            <xmp>
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <title>PHP CRUD with Bootstrap Example Tutorial</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
                    <!-- online source-->
                    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
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
                </head>

                <body style="height:1500px">

                    <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
                        <a class="navbar-brand" href="index.php">Home</a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="reg.php">Register / Signup </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login / Signin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="codes.php">Code Examples</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <div class="col-md-8 mx-auto text-justify">
                                <h1 class="mx-auto">PHP CRUD Tutorial with Bootstrap 4.0</h1>
                                <p class="mx-auto"> <u>Php login signup form example with a user profile page.
                                        This tutorial contains the following tasks.</u></p>
                                <ol>
                                    <li>Create a basic index landing page for the tutorial home.</li>
                                    <li>Create a signup form and relevant php script to signup a user and store the data in the database.</li>
                                    <li>Create a signin form and relevant php script to signin a user and retrieve the data in the database.</li>
                                    <li>Create a user profile page and show data for the relevant user from the database.</li>
                                    <li>Add user profile image in a database.</li>
                                    <li>Display user details from database in divs.</li>
                                    <li>Session, mysql queries, mysql blobs are demonstrated in this tutorial.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="container-fluid">

                        </div>
                    </div>
                    <!-- Footer -->
                    <?php include 'footer.php'; ?>
                    <!-- Footer -->
                </body>

                </html>
            </xmp>
            <h6>Signup page - Front end (reg.php)</h6>
            <hr>
            <xmp>
                &lt;?php
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
                    <title>Registration page example</title>
                    <!--online source-->
                    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    
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
                            <li class="nav-item">
                                <a class="nav-link" href="codes.php">Code Examples</a>
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
            </xmp>
            <h6>Signup page - Back end/ serverside (register.php)</h6>
            <hr>
            <xmp>
                &lt;?php
                // extract($_POST);
                // echo $_POST;
                include("database.php");
                $first_name=$_POST['first_name'];
                $last_name=$_POST['last_name'];
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $cpass=$_POST['cpass'];

                if($pass==$cpass)
                {
                $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
                if(mysqli_num_rows($sql)>0)
                {
                // echo "Email Already Exists";
                header ("Location: reg.php?status=eae");
                }
                else
                { $_SESSION['save']=($_POST['save']);
                $sql=mysqli_query($conn,"INSERT INTO register(First_Name,Last_Name,Email,Passwordz) VALUES('$first_name','$last_name','$email','$pass')");
                if($sql)
                {
                // echo "Registration Successful";
                header ("Location: login.php?status=success");
                }
                else
                {
                // echo "Registration Failed";
                header ("Location: reg.php?status=failed");
                }
                }

                }

                else
                {
                // echo "Password and Confirm Password does not match";
                header ("Location: reg.php?status=mismatch");
                }

            </xmp>
            <h6>Signin page - Front end (login.php)</h6>
            <hr>
            <xmp>
                &lt;?php
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
                    <title>Login Page example</title>
                    <!--local source-->
                    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    
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
                            <li class="nav-item">
                                <a class="nav-link" href="codes.php">Code Examples</a>
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
            </xmp>

            <h6>Signin page - Backend/ serverside (loginProcess.php)</h6>
            <hr>
            <xmp>
                &lt;?php
                session_start();
                if(isset($_POST['save']))
                {
                extract($_POST);
                include 'database.php';
                $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email' and Passwordz='$pass'");
                $row = mysqli_fetch_array($sql);
                if(is_array($row))
                {
                $_SESSION["ID"] = $row['ID'];
                $_SESSION["Email"]=$row['Email'];
                $_SESSION["First_Name"]=$row['First_Name'];
                $_SESSION["Last_Name"]=$row['Last_Name'];
                header("Location: home.php");
                }
                else
                {
                header("Location: login.php?status=failed");
                // echo "Invalid Email ID/Password";
                }
                }
            </xmp>
            <h6>User profile page (home.php)</h6>
            <hr>
            <xmp>
                &lt;?php
                session_start();
                if (!isset($_SESSION["ID"])) {
                header("Location:login.php");
                }
                include 'database.php';
                $ID = $_SESSION["ID"];
                $sql = mysqli_query($conn, "SELECT * FROM register where ID='$ID' ");
                $row = mysqli_fetch_array($sql);
                $em = $row['Email'];
                $EMAIL = $_SESSION["Email"];

                if (isset($_GET['status'])) {
                if ($_GET['status'] == 'success') {
                echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Image uploaded successfully!</strong>
                </div>';
                } else if ($_GET['status'] == 'failed') {
                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Image Upload failed ! Please try again</strong>
                </div>';
                } else if ($_GET['status'] == 'mismatch') {
                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.</strong>
                </div>';
                } else if ($_GET['status'] == 'blank') {
                echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Please select an image to upload</strong>
                </div>';
                }
                }
                ?>
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <!-- online source-->
                    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
                    <title>User profile example page</title>
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
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Upload profile image</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="codes.php">Code Examples</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-4 mx-auto border border-primary text-center">
                                <?php
                                $imgql = mysqli_query($conn, "SELECT * FROM ppimages where email = '$em'");
                                $rowi  = mysqli_fetch_array($imgql);
                                ?>
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rowi['images']); ?>" height="200px" width="200px" class="rounded-circle" />
                            </div>
                            <div class="col-md-8 border border-primary">
                                <p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></p>
                                <p>Email: <?php echo $row["Email"]; ?></p>
                                <p>User Id: <?php echo $ID; ?></p>
                            </div>

                        </div>

                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form name="frmImage" enctype="multipart/form-data" action="upload.php" method="post" class="frmImageUpload">
                                            <label>Upload Image File: (only jpg, jpeg, gif and png is allowed)</label><br />
                                            <input name="image" type="file" class="inputFile" />
                                            <input type="submit" value="Upload profile image" class="btn btn-success" name="submit" />
                                        </form>
                                        <!-- <p>Some text in the modal.</p> -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row clearfixz"></div>
                    <!-- Footer -->
                    <?php include 'footer.php'; ?>
                    <!-- Footer -->
                </body>

                </html>
            </xmp>
            <h6>User profile image upload backend logic (upload.php)</h6>
            <hr>
            <xmp>
                &lt;?php
                // Include the database configuration file
                require_once 'database.php';
                session_start();
                $email = $_SESSION['Email'];
                // echo $email;
                // If file upload form is submitted
                $status = $statusMsg = '';
                if (isset($_POST["submit"])) {
                $status = 'error';
                if (!empty($_FILES["image"]["name"])) {
                // Get file info
                $fileName = basename($_FILES["image"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                // Allow certain file formats
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                $image = $_FILES['image']['tmp_name'];
                $imgData = addslashes(file_get_contents($image));

                // Insert image content into database
                $sqlc=mysqli_query($conn,"SELECT * FROM ppimages where email='$email'");
                if(mysqli_num_rows($sqlc)>0)
                { $sqld = "DELETE from ppimages WHERE email = '$email'";
                $del = mysqli_query($conn, $sqld);
                $sql = "INSERT into ppimages (email,images) VALUES ('$email','{$imgData}')";
                $insert = mysqli_query($conn, $sql);
                }
                else
                {
                $sql = "INSERT into ppimages (email,images) VALUES ('$email','{$imgData}')";
                $insert = mysqli_query($conn, $sql);
                }

                // $sql = "INSERT into ppimages (email,images) VALUES ('$email','{$imgData}')";
                // $insert = mysqli_query($conn, $sql);

                if ($insert) {
                header("Location: home.php?status=success");
                // $status = 'success';
                // $statusMsg = "File uploaded successfully.";
                } else {
                // $statusMsg = "File upload failed, please try again.";
                header("Location: home.php?status=failed");
                }
                } else {
                // $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                header("Location: home.php?status=mismatch");
                }
                } else {
                // $statusMsg = 'Please select an image file to upload.';
                header("Location: home.php?status=blank");
                }
                }
            </xmp>
            <h6>Logout backend logic (logout.php)</h6>
            <hr>
            <xmp>
                &lt;?php
                session_start();
                unset($_SESSION["id"]);
                unset($_SESSION["name"]);
                unset($_SESSION["ID"]) ;
                unset($_SESSION["Email"]);
                unset($_SESSION["First_Name"]);
                unset($_SESSION["Last_Name"]);
                session_destroy();
                header("Location:index.php");
                ?>
            </xmp>
            <h6>Database connection (database.php)</h6>
            <hr>
            <xmp>
                &lt;?php
                $url='localhost';
                $username='root';
                $password='';
                $dbname='login_db';
                $conn=mysqli_connect($url,$username,$password,$dbname);
                if(!$conn){
                die('Could not Connect to Database. Following error occured:' .mysql_error());
                }

            </xmp>
            <h6>Custom CSS (style.css)</h6>
            <hr>
            <xmp>
                .clearfixz{
                clear:both;
                height: 10px;
                width: 100%;
                }

                xmp {
                background-color: #eee;
                border: 1px solid #999;
                display: block;
                padding: 10px;
                font-size: small;
                }
            </xmp>
        </div>
    </div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->
</body>

</html>