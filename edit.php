<?php
include("session.php");
include("config.php");
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
</head>

<body>
  <div class="icon-bar">
    <a href="home.php"><i class="fa fa-home"></i></a>
    <a href="users.php"><i class="fa fa-user"></i></a>
    <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
    <a href="logout.php"><i class="fa fa-power-off"></i></a>
  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <h2>Update</h2>
  <hr />

  <form action="update.php" method="POST">
    <div class="container">
      <?php
      $result = mysqli_query($mysqli, "SELECT * FROM users WHERE username ='$id'");
      while ($row = mysqli_fetch_array($result)) {


        echo "<label><b>First Name</b>";
         echo "<input type='text' placeholder='First name' name='firstname' value='{$row['firstname']}' required>";
        echo "</label>";
         echo "<label><b>Middle Name</b>";
        echo "<input type='text' placeholder='Middle name' name='middlename' value='{$row['middlename']}' required>";
        echo "</label>";
          echo "<label><b>Last Name</b>";
        echo "<input type='text' placeholder='Last name' name='lastname' value='{$row['lastname']}' required>";
        echo "</label>";
         echo "<label><b>Birthday</b>";
        echo "<input type='date' name='birthdate' value='{$row['birthdate']}'required>";
        echo "</label>";
          echo "<label><b>Address</b>";
        echo "<input type='text' placeholder='Address' name='address' value='{$row['address']}' required>";
        echo "</label>";
         echo "<label><b>Username</b>";
        echo "<input type='text' placeholder='Username' name='username' value='{$row['username']}' required>";
        echo "</label>";
          echo "<label><b>Password</b>";
        echo "<input type='password' placeholder='New Password' name='password' value='{$row['password']}' required>";
        echo "</label>";
        echo "<div class='clearfix'>";
        echo "<button type='submit' class='signupbtn'>Update</button>";
        echo "</div>";
      } ?>
    </div>
  </form>