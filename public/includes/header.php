<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta name="description" content="Chicken Chef Lorette" />
    <meta name="keywords" content="Chicken Chef Lorette, Chicken Chef, Lorette Chicken Chef" />
    <meta name="author" content="Chicken Chef Lorette" />
    <meta name="viewport" content="width=device-width,initial-scale=1 user-scalable=0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript" src="scripts/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $(window).load(function() {
        $('#slider').nivoSlider({
        effect: 'fade',
        slices: 10,
        pauseTime: 5000,
        startSlide: 0,
        controlNav: false,
        pauseOnHover: true,
        prevText: '',
        nextText: ''
        });
      });
    });
    </script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Cookie" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link type="text/css" rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="styles/media-queries.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="styles/mobile-nav.css" type="text/css" />

    <!-- if the page is 'Chicken Chef Lorette' then this stylesheet will run -->
    <?php if($title == 'Chicken Chef Lorette') : ?>
      <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <?php endif; ?>

    <!-- if the page is 'About' then this stylesheet will run -->
    <?php if($title == 'About Us') : ?>
      <link rel="stylesheet" type="text/css" href="styles/about.css" />
    <?php endif; ?>

    <!-- if the page is 'Menu' then this stylesheet will run -->
    <?php if($title == 'Menu') : ?>
      <link rel="stylesheet" type="text/css" href="styles/menu.css" />
    <?php endif; ?>

    <!-- if the page is 'Buffet & Caterings' then this stylesheet will run -->
    <?php if($title == 'Buffet & Caterings') : ?>
      <link rel="stylesheet" type="text/css" href="styles/caterings.css" />
    <?php endif; ?>

    <!-- if the page is 'Coupons & Promotions' then this stylesheet will run -->
    <?php if($title == 'Coupons & Daily Specials') : ?>
      <link rel="stylesheet" type="text/css" href="styles/coupons.css" />
    <?php endif; ?>

    <!-- if the page is 'Contact' then this stylesheet will run -->
    <?php if($title == 'Contact') : ?>
      <link rel="stylesheet" type="text/css" href="styles/contact.css" />
    <?php endif; ?>

    <!-- if the page is 'Login' then this stylesheet will run -->
    <?php if($title == 'Login') : ?>
      <link rel="stylesheet" type="text/css" href="styles/login.css" />
    <?php endif; ?>

    <!-- if the page is 'Promotions' then this stylesheet will run -->
    <?php if($title == 'Promotions') : ?>
      <link rel="stylesheet" type="text/css" href="styles/promotions.css" />
    <?php endif; ?>
  </head>

  <body>

    <div class="row">
      <div class="col-sm-12 header">
        <img class="logo" src="images/cc-logo.png" alt="Chicken Chef Logo" />
      </div>
    </div>

    <div class="row">
      <!-- NEW ONE -->

<nav class="navbar navbar-inverse">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  </div>



  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="navbar-collapse-3">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="menu.php">Menus</a></li>
      <li><a href="caterings.php">Buffet &amp; Caterings</a></li>
      <li><a href="coupons.php">Coupons &amp; Daily Specials</a></li>
      <li><a href="promotions.php">Promotions</a></li>
      <li class="contact_page"><a href="contact.php">Contact</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</nav><!-- /.navbar -->

<!-- END NEW ONE -->

    </div>
