<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>smartlib</title> 
    <style>
        .side-navbar {
  width: 180px;
  height: 100%;
  position: fixed;
  margin-left:-300px;
  background-color: black;
  transition: 0.5s;
}
.nav-link:active,
.nav-link:focus,
.nav-link:hover {
  background-color: #ffffff26;
}
.my-container {
  transition: 0.4s;
  background-color: black;
}
.active-nav {
  margin-left: 0;
}
/* for main section */
.active-cont {
  margin-left: 170px;
  background-color: black;
}
#menu-btn {
  background-color:black;
  color: #fff;
}
    </style>
</head>
<body>

    <!-- main page of the smart lib -->
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
  <ul class="nav flex-column text-white w-100">
    <a href="#" class="nav-link h3 text-white my-2">
      DashBorad
    </a>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white"   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         User Details
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
         <a class="dropdown-item text-white bg-dark" href="#">Username</a>
          <a class="dropdown-item text-white bg-dark" href="#">Password</a>
        </div>

      </li>
    <a href="#personald" class="nav-link text-white bg-dark">
      <span>Personal Details</span>
    </a>
    <a href="#professionald" class="nav-link text-white bg-dark">
      <span>Professional Details</span>
    </a>
  </ul>
</div>
<div class=" my-container active-cont" style="display:flex;">
<a class="btn border-0  px-3 my-2 mx-0 " id="menu-btn">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>
  </a> 
  <span class="dashboard" style="background-color:black; display:flex;">
    <?php echo '<p class="text-light my-2" style="font-size:25px;">Welcome ' . $_SESSION["username"] . '!!</p>'; ?>
</span>
</div>
<!-- user detail in database -->
<?php include 'partials1/_dbconnect1.php'; ?>
        <?php

        if (!isset($_SESSION['loggedin1'])) {
            header("location:/partials1/_logmodal.php");
        }
        $username = $_SESSION['username'];
        $findresult = mysqli_query($conn, "SELECT * FROM librarian WHERE username='$username'");
        if ($res = mysqli_fetch_assoc($findresult)) {
            $username = $res['username'];
            $password = $res['password'];
            $cpassword = $res['cpassword'];
            $title = $res['title'];
            $name = $res['name'];
            $job = $res['job'];
            $org = $res['org'];
            $Address1 = $res['Address1'];
            $city = $res['city'];
            $pincode = $res['pincode'];
            $country = $res['country'];
            $mobile = $res['mobile'];
            $email = $res['email'];
            $jobtype = $res['jobtype'];
            $worksec = $res['worksec'];
        }
echo '<div class="container" id="user">
<div class="card w-60 my-3" style="margin-left: 100px;">
  <h5 class="card-header bg-secondary text-white">User Details</h5>
  <div class="card-body">
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Username:</h6>
      <span class="list-group-item">' . $username . '</span></li>
    </ul>
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Password:</h6>
      <span class="list-group-item"><input type="password" value="'.$password.'" style="border:none;"></span></li>
    </ul>
  </div>
</div>
</div>

<div class="container" id="personald">
<div class="card w-60 my-3" style="margin-left: 100px;">
  <h5 class="card-header  bg-secondary text-white">Personal Details</h5>
  <div class="card-body">
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Name:</h6>
      <span class="list-group-item">'.$title.'&nbsp'. $name . '</span></li>
    </ul>
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Email:</h6>
      <span class="list-group-item">'.$email.'</span></li>
    </ul>
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Moblie number:</h6>
      <span class="list-group-item">'.$mobile.'</span></li>
    </ul>
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Address:</h6>
      <span class="list-group-item">'.$Address1.'</span></li> 
    </ul>
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Country:</h6>
      <span class="list-group-item">'.$country.'</span></li>
    </ul>
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Job:</h6>
      <span class="list-group-item">'.$job.'</span></li>
    </ul>
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Organization:</h6>
      <span class="list-group-item">'.$org.'</span></li>
    </ul>
  </div>
</div>
</div>

<div class="container" id="professionald">
<div class="card w-60 my-3" style="margin-left: 100px;">
  <h5 class="card-header bg-secondary text-white">Professional Details</h5>
  <div class="card-body">
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Jobtype:</h6>
      <span class="list-group-item">' . $jobtype . '</span></li>
    </ul>
    <ul class="list-group list-group-horigontal my-2">
    <li class="list-group-item"><h6 class="card-title">Worksector:</h6>
      <span class="list-group-item">' . $worksec. '</span></li>
    </ul>
   
  </div>
</div>
</div>
';?>

    <script>
        var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});

    </script>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
   

     <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
    

</body>

</html>