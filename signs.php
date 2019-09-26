<?php
if(!session_id()) session_start();
$_SESSION['pagename'] = "signs";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>Scottish Wrought Iron</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link href="./css/signs.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="./images/favicon.png">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
      $(function () {
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

<!--    <div id="banner-upper"></div>
    <div id="banner-lower"></div>
    <div id="main-menu" class="home"></div>-->
    
    <br>
    
    <div class="title-block">
      <div class="heading box">
        <!--Signs <span class="title-small">and </span> Sign Brackets-->
        <!--<div class="title-small">-->
        Signs and Sign Brackets
        <!--</div>-->
      </div>
<!--      <div class="title-small box">
        Signs and Brackets
      </div>-->
      <div class="copy box">
        Eye catching and durable metal work created and
installed by Andy Leck.
      </div>
<!--      <div class="logo box">
        <img src="./images/logo_transparent_100.jpg">
      </div>
      <div class="logo-small box">
        <img src="./images/logo_transparent_50.jpg">
      </div>-->
    </div>
    <br>
    
    <main class="main">
      <div class="box a">
        <!--A-->
        <img src="./images/sign_cofee.jpg">
      </div>
      <div class="box b">
        <!--B-->
        <img src="./images/oles_weld2.jpg">
      </div> 
      <div class="box c">
        <!--C-->
        <img src="./images/sign_southeby.jpg">
      </div>
      <div class="box d">
        <!--D-->
        <img src="./images/sign_thompson.jpg">
      </div>
      <div class="box e">
        <!--E-->
        <img src="./images/sign_substance.jpg">
      </div>
      <div class="box f">
        <!--F-->
        <img src="./images/sign_vet.jpg">
      </div>
<!--      <div class="box g">G
      </div>
      <div class="box h">H
      </div>
      <div class="box i">I
      </div>
      <div class="box k">K
      </div>
      <div class="box l">L</div>
      <div class="box m">M</div>
      <div class="box n">N</div>
      <div class="box o">O</div>
      <div class="box p">P</div>
      <div class="box q">Q</div>
      <div class="box r">R</div>
      <div class="box s">S</div>
      <div class="box t">T</div>
      <div class="box u">U</div>
      <div class="box v">V</div>
      <div class="box w">W</div>
      <div class="box x">X</div>
      <div class="box y">Y</div>
      <div class="box z">Z</div>-->
    </main>  
    
    <br><br>
    <div class="end-msg">
      <a href="contact.html">
        <h2>Contact Andy for  unique signs, brackets and installation.</h2>
      </a>
    </div>

    <div id="footer">
    </div>

  </body>
</html>
