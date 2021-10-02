<?php

  require_once __DIR__ . '/../../config.php';
  if(!$_SESSION['loggedIn'])
  {
  	header('Location: ../index.php');
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    try
    {
      $dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $query = "INSERT
                INTO
                promotions
                (title, description)
                VALUES
                (:title, :description)";

      $params = [
        ':title' => $_POST['title'],
        ':description' => $_POST['description']
      ];

      $stmt = $dbh->prepare($query);

      $stmt->execute($params);

      $id = $dbh->lastInsertId();
    }
    catch (Exception $e)
    {
      echo $e->getMessage();
    }

  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add a Special</title>
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
        <h1>Add a Promotion</h1>
        <fieldset>
          <form action="add-promo.php" method="post">

            <p>
              <label for="title" name:"title">Title:</label>
              <input type="text" name="title" />
            </p>

            <p>
              <label for="description" name:"description">Description:</label>
              <textarea name="description" rows="8" cols="80"></textarea>
            </p>

            <p>
              <input type="submit" value="Upload" />
            </p>

          </form>
        </fieldset>
      </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
