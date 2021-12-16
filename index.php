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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

     -->
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
    </ul>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="col-md-8 mx-auto text-justify">
        <h1 class="mx-auto">PHP CRUD Tutorial with Bootstrap 4.0</h1>
        <p class="mx-auto"> <u>Php login signup form example with a user profile page. This tutorial contains the following tasks.</u></p>
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