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
<?php
    require './includes/globalSiteTag.html';
    ?>

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
    //   $("#footer").load("footer.html");
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

    <div class="box">
      <img src="./images/spinner_sold.png" alt="">
      <div class="image-text">Spinner and Granite Post $350</div>
    </div>

    <div class="box"><span class="block-id-image">B</span>
      <img src="./images/dear_spinner_sold.png" alt="">
      <div class="image-text">Deer Spinner $850 (pillar stone optional)</div>
    </div>

    <div class="box"><span class="block-id-image">F</span>
        <img src="./images/sail_copper_sea.png" alt="">
        <div class="image-text">“Whales off the Port Bow” features the silhouette of a schooner with a hand forged anchor and tender sailing on a copper sea of hand hammered waves . $1600.</div>
      </div>

      <div class="box"><span class="block-id-image">H</span>
        <img src="./images/sails_copper_andy.png" alt="">
        <div class="image-text">Andy putting finishing touches on his latest piece of upcycled metal folk art.</div>
      </div>


  </div>
  <br>

  <div id="footer"></div>
  <?php
        require 'footer.html'
        ?>



</body>

</html>