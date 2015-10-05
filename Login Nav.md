<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_SESSION['UserId'])) {
  $UserId = $_SESSION['UserId'];
  $username = $_SESSION['username'];
} else {
  header('Location: LoggedOut.html');
  die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Creeper Gaming</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Navigation -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">CREEPER GAMING</a>
          </div>

          <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Me</a></li>
              <li><a href="#">Downloads</a></li>
              </ul>


              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a class="active" href="#">Me</a></li>
                      <li><a href="#">Activity</a></li>
                      <li><a href="#">Notifications</a></li>
                      <li><a href="#">Account Settings</a></li>
                    </ul>
                </li>
                <li><a href="#" data-toggle="modal" data-target="#logOut">Log Out</a></li>
            </ul>
          </div>

          <div class="modal fade" id="logOut">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3>Are You Sure?</h3>
                </div>

                <div class="modal-header">
                  <h5>Are You Sure You Want To Sign Out?</h5>
                    </div>

                <div class="modal-footer">
                  <form role="form" action="logout.php">
                  <input type="submit" class="btn btn-primary btn-block" name="submit" value="Log Out"></button>
                  <button type="button" class="btn btn-success btn-block" class="close" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
            </form>
          </div>


      </div>
  </nav>
  <!-- Navigation -->





  <!-- Main Content -->

  <div class="container">


  <!-- Main Content -->



</body>
</html>
