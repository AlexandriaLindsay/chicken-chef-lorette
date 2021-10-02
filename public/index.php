<?php
  require_once __DIR__ . '/../config.php';

  $title = 'Chicken Chef Lorette';

  if($_SESSION)
  {
    session_destroy();
  }

  include('includes/header.php');

 ?>

  <div class="row">
      <div class="col-sm-12 slide">
        <div id="slider" class="nivoSlider">
          <img src="images/ques.jpg" alt="Quesadilla" />
          <img src="images/pancake.jpg" alt="Pancake" />
          <img src="images/burger.jpg" alt="Burger" />
          <img src="images/chef-riser.jpg"  alt="Chef Riser" />
          <img src="images/pizza.jpg"  alt="Pizza" />
          <img src="images/chef-breakfast.jpg" alt="Breakfast" />
          <img src="images/taco.jpg" alt="Taco Salad" />
        </div>
      </div>
  </div>

  <div class="row">
      <div class="col-sm-12">
        <div class="sec1">
          <h1>Chicken Chef Lorette</h1>
          <hr />
          <p>
            At Chicken Chef Lorette, we too appreciate good food and friendly service.
            We believe that each and every one of our guests come for the dining experience
            they deserve. Dine-in or take-out, we are committed to taking care of you!!
            Our values are quite simple ... We are proud to be part of our community and to
            give back in anyway we can. We warmly welcome our guests, friends and neighbours
            to pair fresh food with great company in our restaurant... Our home!
            We are a growing community
            We are a growing family.
          </p>

          <p>
            Chicken Chef Lorette<br />
            <strong>"Where it always feels like home"</strong>
          </p>
        </div>
      </div>
  </div>

  <div class="row">
    <div class="col-sm-4 sec2">
      <img class="col-sm-8" id="location" src="images/location.png" alt="" />
      <p class="col-sm-8">1309 DAWSON RD.<br />LORETTE, MB</p>
    </div>

    <div class="col-sm-4 sec3">
      <img class="col-sm-8" id="contact" src="images/contact.png" alt="" />
      <p class="col-sm-8 contactpara"><strong>Phone:</strong> (204) 878-9620</p>
    </div>

    <div class="col-sm-4 sec4">
      <img class="col-sm-8" id="hours" src="images/hours.png" alt="" />
      <p class="col-sm-8 hourspara">
        <strong>Monday - Saturday:</strong>&nbsp; 8:00am - 9:00pm <br />
        <strong>Sunday:</strong>&nbsp; 9:00am - 9:00pm
      </p>
    </div>
  </div>

  <?php

    $title = 'Chicken Chef Lorette';

    include('includes/footer.php');

   ?>
