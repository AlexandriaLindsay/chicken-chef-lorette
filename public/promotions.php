<?php

  require_once __DIR__ . '/../config_2.php';

  $title = 'Promotions';

  $promos = getPromos($dbh);

  include('includes/header.php');
?>



  <div class="row">
    <div class="col-sm-12">
      <hr class="top" />
      <h1><?=$title?></h1>
      <hr class="bottom" />
    </div>
  </div>

    <?php if($promos) : ?>
      <?php foreach($promos as $row) : ?>
          <div class="col-sm-12">
            <h3><?=$row['title']?></h3>
            <p class="pro"><?=$row['description']?></p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

  <?php if(empty($promos)) : ?>
    <div class="row">
      <div class="col-sm-12">
        <h2>Sorry, there are currently no promotions available</h2>
        <img class="col-sm-2 coupon" src="images/coupon.png" alt="Coupon">
      </div>
    </div>
  <?php endif; ?>





<?php
     include('includes/footer.php');
?>
