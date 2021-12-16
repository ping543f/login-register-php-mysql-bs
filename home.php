<?php
session_start();
if (!isset($_SESSION["ID"])) {
    header("Location:login.php");
}
include 'database.php';
$ID = $_SESSION["ID"];
$sql = mysqli_query($conn, "SELECT * FROM register where ID='$ID' ");
$row  = mysqli_fetch_array($sql);
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
            <!-- <li class="nav-item">
      <a class="nav-link" href="login.php">Login / Signin</a>
    </li> -->
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