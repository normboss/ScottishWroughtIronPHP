<?php  
    if (!session_id()) {
        session_start(); 
    }
    $_SESSION['pagename'] = "garden-art";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
  <?php
    require '../includes/seo-stuff.php';
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <!--<link href="./css/garden-art.css" media="screen" rel="stylesheet" type="text/css">-->
    <link href="../css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">

  </head>
  <body">

    <div id="fb-root"></div>
    <div id="new-header"></div>
<?php
  require '../includes/newheader1.php'
?>

<!--    <div id="banner-upper"></div>
    <div id="banner-lower"></div>
    <div id="main-menu" class="home"></div>-->
    <br>
    <div class="heading">
        Garden Art
    </div>

    <div class="heading-paragraph">
      Whether traditional or fanciful, large or small, 
      free standing or wall mounted,
      creativity has no limit at 
      <div class="brand">Scottish Lion Wrought Iron</div>.
    </div>

    <div class="main">
      
      
      <div class="box b"><span class="block-id-b">B</span>
          <img src="../images/hen_house_conflict.jpg" alt="Pair of roosters squabbling.">
          <div class="image-text">Rooster Wall Hanging</div>
      </div>
      
      <div class="box c"><span class="block-id-c">C</span>
          <img src="../images/wall_sun_dial.jpg" alt="">
          <div class="image-text">Four Foot Diameter Wall Mounted Sun Dial</div>
      </div> 
      
      <div class="box f"><span class="block-id-f">F</span>
          <img src="../images/whale.jpg" alt="">
          <div class="image-text">7 Foot Driftwood Whale Spinner   </div>
      </div>
      
      <div class="box g">
        <img src="../images/snail_composite.jpg" alt="">
        <div class="image-text">Snail and Gold Leaf Sunburst Sundial   </div>
      </div>
      
      <div class="box j"><span class="block-id-j">J</span>
        <img src="../images/man_in_moon.jpg" alt="">
        <div class="image-text">Man in the Moon</div>
      </div>

      <div class="box k"><span class="block-id-k">K</span>
        <img src="../images/sail_n_whales_right.jpg" alt="">
        <div class="image-text">Sailing with the Whales Wind Vane</div>
      </div>

      <div class="box n"><span class="block-id-n">N</span>
        <img src="../images/armillary_sun_dial.jpg">
        <div class="image-text">Amillary with Granite Ball</div>
      </div>

      <div class="box o"><span class="block-id-o">O</span>
        <img src="../images/noahs_ark.jpg" alt="">
        <div class="image-text">Noah's Ark is a fanciful four foot high sculpture</div>
      </div>

      <div class="box r"><span class="block-id-r">R</span>
        <img src="../images/spinner_glass.jpg" alt="">
        <div class="image-text">Rock and Glass Spinner twirls with a touch</div>
      </div>

      <div class="box s"><span class="block-id-s">S</span>
        <img src="../images/moose_bike1.jpg" alt="">
        <div class="image-text">Moose on a Penny Farthing Bike</div>
      </div>

      <div class="box v"><span class="block-id-v">V</span>
        <img src="../images/green_globe.jpg" alt="">
        <div class="image-text">Glass Float Gazing Ball Mounted in Granite</div>
      </div>

      <div class="box w"><span class="block-id-w">W</span>
        <img src="../images/gardenBenchpng.png" alt="">
        <div class="image-text">Tete-a-Tete Love Seat</div>
      </div>

      <div class="box z"><span class="block-id-z">Z</span>
        <img src="../images/golf_moose.jpg" alt="">
        <div class="image-text">Table top sculpture </div>
      </div>

      <div class="box aa"><span class="block-id-aa">AA</span>
        <img src="../images/sun_dial_left.jpg" alt="">
        <div class="image-text">Sun dial with blue glass </div>
      </div>

      <div class="box ad"><span class="block-id-ad">AD</span>
        <img src="../images/cat_tails.jpg" alt="">
        <div class="image-text">Cattails</div>
      </div>

      <div class="box ae"><span class="block-id-ae">AE</span>
        <img src="../images/gate_cranes2.jpg" alt="Wrought iron gate with birds and fish.">
        <div class="image-text">Pond Life Gate</div>
        <div class="image-text">
          <a href="gates.php">See more Garden Gates</a>
        </div>
      </div>

    </div>
  
    <div id="footer">
    </div>
    <?php
        require '../includes/footer.html'
        ?>
    
  </body>
</html>
