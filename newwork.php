<?php
if (!session_id()) session_start();
$_SESSION['pagename'] = "newwork";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
  <title>Gates and Railings</title>
  <meta charset="UTF-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
  <link href="./css/newwork.css" media="screen" rel="stylesheet" type="text/css">
  <link rel="icon" href="./images/favicon.png">

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script>
    $(function() {
      //        $("#new-header").load("newheader.php");
      $("#footer").load("footer.html");
    });
  </script>
</head>

<body onload="fixWidth()">

  <div id="fb-root"></div>
  <div id="new-header"></div>
  <?php
  require 'newheader.php'
  ?>

  <!-- *********************************************** -->
  <br>
  <div class="heading">
    <span class="block-id-letter">A</span>
    Latest Work - Available Now!
  </div>
  <br>

  <div class="wide-paragraph">
    Andy Leck is always creating! Check out his latest creations available now in the yard and workshop. </div>

  <!-- ***********************************************
            M A I N
         ***********************************************-->
  <div class="main">

    <div class="box c">
      <img src="./images/spinner_sold.png">
      <div class="image-text">Spinner and Granite Post $350</div>
    </div>

    <div class="box b"><span class="block-id-image">B</span>
      <img src="./images/dear_spinner.png">
      <div class="image-text">Dear Spinner $850 (pillar stone optional)</div>
    </div>

    <!-- <div class="box f"><span class="block-id-image">F</span>
        <img src="./images/ox_bow_bracket2.jpg">
        <div class="image-text">Custom brackets support an ox bow above a window.</div>
      </div>

      <div class="box h"><span class="block-id-image">H</span>
        <img src="./images/spinner_fish.jpg">
        <div class="image-text">A granite post supports a sculpture with fish that spin around a metal globe.</div>
      </div>

      <div class="box i"><span class="block-id-image">I</span>
        <img src="./images/sun_dial_garage.jpg">
        <div class="image-text">Custom sun dial marks the hours on this garage</div>
      </div>

      <div class="box k"><span class="block-id-image">K</span>
        <img src="./images/rxr_tables.jpg">
        <div class="image-text">Antique metal rail road signs transformed into tables for a collector. A glass top was added.</div>
      </div>
      
      <div class="box l"><span class="block-id-image">L</span>
        <img src="./images/rxr_table.jpg">
        <div class="image-text">Andy can help repurpose favorite items.</div> 
      </div>
      
      <div class="box n"><span class="block-id-image">N</span>
        <img src="./images/hat_rack.jpg">
        <div class="image-text">Andy’s rack displays hats while preserving their shapes.</div>
      </div>
    
      <div class="box o"><span class="block-id-image">O</span>
        <img src="./images/tulip_hinges_salamander_handle.jpg">
        <div class="image-text">Tulip inspired hinges are teamed up with a handle with a salamander motif on an outbuilding</div>
      </div>

      
      <div class="box"><span class="block-id-image">N</span>
        <img src="./images/trellis2.png">
        <div class="image-text">Trellis screen is functional focal point.</div>
      </div>
    
      <div class="box"><span class="block-id-image">O</span>
        <img src="./images/trellis.png">
        <div class="image-text"></div>
      </div> -->

  </div>
  <br>

  <div id="footer"></div>



</body>

</html>