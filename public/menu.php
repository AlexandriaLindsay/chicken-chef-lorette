<?php

  $title = 'Menu';

  include('includes/header.php');
?>

<div class="container">

  <div class="row">
    <div class="col-sm-12 title">
      <hr class="top"/>
      <h1><?=$title?></h1>
      <hr class="bottom"/>
    </div>
  </div>

  <div class="row">
      <div class="col-sm-6 menu">
        <a href="docs/dine_in_menu.pdf"><img src="images/dinner_menu.jpg" alt="Dinner Menu"></a>
      </div>
      <div class="col-sm-6 menu">
        <a href="docs/take_out_menu.pdf"><img src="images/takeout_menu.jpg" alt="Take Out Menu"></a>
      </div>
  </div>

  <div class="row">
      <div class="col-sm-6 menu">
        <a href="docs/breakfast_menu.pdf"><img src="images/breakfast_menu.jpg" alt="Breakfast Menu"></a>
      </div>
      <div class="col-sm-6 menu">
        <a href="docs/kids_menu.pdf"><img src="images/kids_menu.jpg" alt="Kids Menu"></a>
      </div>
  </div>
</div>

<?php
  include('includes/footer.php');
?>
