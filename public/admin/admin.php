<?php
  require_once __DIR__ . '/../../config.php';
  if(!$_SESSION['loggedIn'])
  {
  	header('Location: ../index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }

    div.well
    {
      height: auto;
    }

    h4
    {
      margin-left: 6px;
      margin-top: 20px;
    }

  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin.php">Dashboard</a></li>
        <li><a href="remove.php">Remove a Coupon</a></li>
        <li><a href="add.php">Add a Coupon</a></li>
        <li><a href="add-special.php">Add a Special</a></li>
        <li><a href="remove-special.php">Remove a Special</a></li>
        <li><a href="add-promo.php">Add a Promotion</a></li>
        <li><a href="remove-promo.php">Remove a Promotion</a></li>
        <li><a href="../index.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h3>Chicken Chef Lorette</h3>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="admin.php">Dashboard</a></li>
        <li><a href="remove.php">Remove a Coupon</a></li>
        <li><a href="add.php">Add a Coupon</a></li>
        <li><a href="add-special.php">Add a Special</a></li>
        <li><a href="remove-special.php">Remove a Special</a></li>
        <li><a href="add-promo.php">Add a Promotion</a></li>
        <li><a href="remove-promo.php">Remove a Promotion</a></li>
        <li><a href="../index.php">Logout</a></li>
      </ul><br>
    </div>
    <br>

    <div class="col-sm-9">
      <div class="well">
        <h1>Chicken Chef Lorette</h1>
        <h4>Welcome to the Dashboard</h4>
      </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
