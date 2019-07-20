<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "index";
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
        <meta name="keywords" content="mantle hooks, SLB-sculptures, Maine sculptures, garden sculptures, Maine Artist,Scottish wrought
              Iron, Scottish smith, iron paper towel holder, shelf brackets, swag holders, curtain hardware, iron hardware, Ark, Noah&#39;s Ark,
              plateholders, Metal Artist, sculptor, metal sculptor, weaver, wool blankets, jaggerspun wool, handmade cloth, cotton
              cloth, swag curtains, curtains, bedspreads, blankets, textiles, Maine artist, Maine crafter, wrought iron, custom iron, fireplace
              screen, fireplace, Washington Artist, Orcas Island, Round Pond, Round Pond Maine, Metal Artist, steel, forged steel, sculpture">

        <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
        <link href="./css/newheader.css" media="screen" rel="stylesheet" type="text/css">
        <link href="./css/index.css" media="screen" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
        <link rel="icon" href="./images/favicon.png">

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            $(function () {
                //        $("#new-header").load("newheader.php");
                $("#footer").load("footer.html");
            });
            // $(document).ready(function () {
            //     //        $("#new-header").load("newheader.php");
            //     $("#footer").load("footer.html");
            // });
        </script> 

    </head>
    <body>


        <div id="fb-root"></div>

        <div id="new-header"></div>
        <script>
            //        $("#new-header").load("newheader.php");
            //    document.getElementById("#header-image").style.display = "none";
        </script> 
    <!--    <script>
          $(document).ready(function(){
            $("#new-header").load("newheader.php");
          });
        </script> -->
        <?php
        require 'newheader.php'
        ?>


        <!--    <div id="banner-upper"></div>
            <div id="banner-lower"></div>
            <div id="main-menu" class="home"></div>-->


        <div class="sayings">
            <div class="centered-paragraph">
                Andy Leck creates original folk art, custom railings, gates and home accessories 
                in the  <span class="brand-block">Scottish Lion Wrought Iron</span> workshop.
            </div>
        </div>
        <br><br>

        <!-- ***********************************************
               Beginning of index-container
             *********************************************** -->
        <div class="index-container">

            <div class="box a">
                <a href="curtainhw.php">
                    <div class="text">Hand Forged Hardware</div>
                    <img src="./images/curtain_rods400.jpg">
                </a>
            </div>
            <div class="box b">
                <a href="gatesRailings.php">
                    <div class="text">Custom Railings and Gates</div>
                    <img src="./images/gate_cranes.jpg">
                </a>
            </div> 
            <div class="box c">
                <a href="plateHangers.php">
                    <div class="text">Plate and Bowl Holders</div>
                    <img src="./images/2plate_hanger.png">
                </a>
            </div>
            <div class="box d">
                <a href="signs.php">
                    <div class="text">Signs and Brackets</div>
                    <img src="./images/sign_cofee.jpg">
                </a>
            </div>
            <div class="box e">
                <a href="gardenArt.php">
                    <div class="text">Gallery of Original Art</div>
                    <img src="./images/hen_house_conflict.jpg">
                </a>
            </div>
            <div class="box f">
                <a href="https://www.etsy.com/shop/scottishlion">
                    <div class="text">Shop Etsy</div>
                    <img src="./images/etsy_image.png">
                </a>
            </div>
            <div class="box g">
                <a href="about.php">
                    <div class="text">About Andy</div>
                    <img src="./images/door_smile.jpg">
                </a>
            </div>
            <div class="box h">
                <div class="hcontent">
                    <div class="upper-paragraph">
                        The galleries display a small sampling of
                        <span class="brand-block">Scottish Lion Wrought Iron</span> craftsmanship.
                    </div>
                    <br>
                    <a href="subscribe.php">Subscribe</a> to see the current inventory
                    or visit the showroom and display gardens.
                    <div class="lion-image">
                        <img src="./images/lion_150_trans.png">
                    </div>
                </div>
            </div>

        </div>

        <div id="footer">
        </div>

    </body>
</html>
