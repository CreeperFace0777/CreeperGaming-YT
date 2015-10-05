<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if($_POST['submit']) {
  include_once("connection.php");
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  $sql = "SELECT Userid, username, password FROM members WHERE username = '$username'";
  $query = mysqli_query($dbCon, $sql);

  if ($query) {
    $row = mysqli_fetch_row($query);
    $userId = $row[0];
    $dbUsername = $row[1];
    $dbPassword = $row[2];
  }

  if ($username == $dbUsername && $password == $dbPassword) {
    $_SESSION['username'] = $username;
    $_SESSION['UserId'] = $userId;
    header('Location: LoggedIn.php');
} else {
  header('Location: LoggedOut.html');
}

}

?>
