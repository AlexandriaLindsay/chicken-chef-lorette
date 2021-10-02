<?php

  require_once __DIR__ . '/../config.php';
  $title = 'Login';

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {

  		if(($_POST['email'] == $email) && ($_POST['password'] == $pword))
      {
        $_SESSION['loggedIn'] = true;
        header('Location: admin/admin.php');
      }
      else
      {
        echo "Please enter the correct login information";
      }


  }

  include('includes/header.php');
?>

<div class="container">

  <div class="row">
    <div class="col-sm-12">
      <hr class="top" />
      <h1><?=$title?></h1>
      <hr class="bottom" />
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">

        <form name="login" method="post" action="login.php">
            <label for="email" name="email" >Email Address:</label><br />
            <input
              type="text"
              id="email"
              name="email"
            /><br />

            <label for="password">Password:</label><br />
            <input
              type="password"
              id="password"
              name="password"
            /><br />

            <input type="submit" value="Login">
        </form>
    </div>
  </div>

</div>

<?php
     include('includes/footer.php');
?>
