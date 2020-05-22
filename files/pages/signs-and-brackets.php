<?php
if (!session_id()) session_start();
$_SESSION['pagename'] = "signs-and-brackets";
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
    require '../includes/globalSiteTag.html';
    ?>
    <title>Scottish Lion Wrought Iron | Signs and Sign Brackets</title>
    <meta name="description" content="Gallery of durable metal signs created and installed by Andy Leck">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link href="../css/signs-and-brackets.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">
    <script>
    </script>


</head>
<body">


    <div id="fb-root"></div>
    <div id="new-header"></div>
    <?php
    require '../includes/newheader1.php'
    ?>
    <main>
        <br>
        <div class="title-block">
            <div class="heading box">
                <!--Signs <span class="title-small">and </span> Sign Brackets-->
                <!--<div class="title-small">-->
                Signs and Sign Brackets
                <!--</div>-->
            </div>
            <div class="copy box">
                Eye catching and durable metal work created and
                installed by Andy Leck.
            </div>
        </div>
        <br>

        <div class="main">
            <div class="box a">
                <!--A-->
                <img src="../images/sign_cofee.jpg" alt="Weather vane sign for North Cottage coffee shop.">
            </div>
            <div class="box b">
                <!--B-->
                <img src="../images/oles_weld2.jpg" alt="Dragon sign for Oles Welding.">
            </div>
            <div class="box c">
                <!--C-->
                <img src="../images/sign_southeby.jpg" alt="Hanging sign for Sotheby's Realty.">
            </div>
            <div class="box d">
                <!--D-->
                <img src="../images/sign_thompson.jpg" alt="Thompson House sign.">
            </div>
            <div class="box e">
                <!--E-->
                <img src="../images/sign_substance.jpg" alt="Women of Substance sign.">
            </div>
            <div class="box f">
                <!--F-->
                <img src="../images/sign_vet.jpg" alt="Damariscotta Veterinary Clinic sign.">
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
        </div>

        <br><br>
        <div class="end-msg">
            <a href="contact.html">
                <h2>Contact Andy for unique signs, brackets and installation.</h2>
            </a>
        </div>
    </main>

    <div id="footer">
    </div>
    <?php
    require '../includes/footer.html'
    ?>

    </body>

</html>