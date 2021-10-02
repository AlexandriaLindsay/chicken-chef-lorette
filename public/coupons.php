<?php

  require_once __DIR__ . '/../config_2.php';

  $title = 'Coupons & Daily Specials';

  $results = getCoupons($dbh);
  $specials = getSpecials($dbh);

  include('includes/header.php');
?>



  <div class="row">
    <div class="col-sm-12">
      <hr class="top" />
      <h1><?=$title?></h1>
      <hr class="bottom" />
    </div>
  </div>


  <?php if($results) : ?>
    <h3>Coupons</h3>
    <?php foreach($results as $row) : ?>
      <div class="row">
        <div class="col-sm-12 coupons_container pro">
          <a class="coupons" href="docs/<?=$row['file_name']?>"><?=ucwords(str_replace('_', ' ', $row['title']))?></a>
        </div>
    <?php endforeach; ?>
  <?php endif; ?>

    <?php if($specials) : ?>
      <h3>Daily Specials</h3>
      <?php foreach($specials as $row) : ?>
          <div class="col-sm-12 daily pro">
            <p class="coupons"><?=ucwords($row['title'])?>&nbsp;&nbsp;&nbsp;&nbsp;&dollar;<?=$row['price']?></p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

  <?php if(empty($specials) && empty($results)) : ?>
    <div class="row">
      <div class="col-sm-12">
        <h2>Sorry, there are currently no specials or coupons available</h2>
        <img class="col-sm-2 coupon" src="images/coupon.png" alt="Coupon">
      </div>
    </div>
  <?php endif; ?>





<?php
     include('includes/footer.php');
?>
