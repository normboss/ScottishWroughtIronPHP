<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "home";
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

    <title>Scottish Lion Wrought Iron | Custom forge</title>
    <meta name="description" content="Shop gates,railings,hardware, sign brackets & garden art hand forged by Andy Leck">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link href="../css/home.css" media="screen" rel="stylesheet" type="text/css">
    <!-- <link href="../css/newheader.css" media="screen" rel="stylesheet" type="text/css"> -->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../images/favicon.png">

</head>

<!-- <body"> -->

<body>

    <?php
    require '../includes/newheader1.php'
    ?>
    <div id="header-id"></div>
    <div id="fb-root"></div>


    <main>
        <div id="header-image">
            <img src="../images/OctoberCraft.png" alt="">
        </div>


        <div class="sayings">
            <div class="centered-paragraph">
                Anannady Leck creates original folk art, custom railings, gates and home accessories
                in the <span class="brand-block">Scottish Lion Wrought Iron</span> workshop.
            </div>
        </div>
        <br><br>

        <!-- ***********************************************
               Beginning of index-container
             *********************************************** -->
        <div class="index-container">

            <div class="box">
                <a href="curtain-hardware.php">
                    <img src="../images/curtain_rods400.jpg" alt="4 curtain rods with different ends. Spiral, scroll, basket and ball.">
                    <div class="text">Hand Forged Hardware</div>
                </a>
            </div>
            <div class="box">
                <a href="wrought-iron-gates.php">
                    <img src="../images/gate_cranes.jpg" alt="Gate with birds and fish over-looking a pond.">
                    <div class="text">Custom Gates</div>
                </a>
            </div>
            <div class="box">
                <a href="custom-hand-rails.php">
                    <img src="../images/railing_pink_curve.jpg" alt="Railing over stone wall.">
                    <div class="text">Custom Railings</div>
                </a>
            </div>
            <div class="box">
                <a href="plate-holders.php">
                    <img src="../images/2plate_hanger.png" alt="An assortment of plate and bowl holders.">
                    <div class="text">Plate and Bowl Holders</div>
                </a>
            </div>
            <div class="box">
                <a href="latest-work.php">
                    <img src="../images/dear_spinner.png" "Spinner with antlers and glass on stone pillar.">
                    <div class="text">New Work Available</div>
                </a>
            </div>
            <div class="box">
                <a href="signs-and-brackets.php">
                    <img src="../images/sign_cofee.jpg" alt="A weathervane sign with steaming coffee cup.">
                    <div class="text">Signs and Brackets</div>
                </a>
            </div>
            <div class="box">
                <a href="commissions.php">
                    <img src="../images/fire-pit-with-fire.png" alt="Metal fire pit with fire burning.">
                    <div class="text">Commissions</div>
                </a>
            </div>
            <div class="box">
                <a href="garden-art.php">
                    <img src="../images/display_gardens.png" alt="A pair of squabbling roosters.">
                    <div class="text">Garden Art</div>
                </a>
            </div>
            <div class="box">
                <a href="https://www.etsy.com/shop/scottishlion">
                    <img src="../images/etsy_image.png" alt="3 wrought iron catails and a bowl set in a bowl holder.">
                    <div class="text">Shop Etsy</div>
                </a>
            </div>
            <div class="box">
                <a href="about.php">
                    <img src="../images/door_smile.jpg" alt="Andy at work smiling for the camera.">
                    <div class="text">About Andy</div>
                </a>
            </div>
            <div class="box">
                <a href="contact.php">
                    <img src="../images/pot_rack_copper.png" alt="3 wrought iron catails and a bowl set in a bowl holder.">
                    <div class="text">Contact Andy</div>
                </a>
            </div>
            <div class="box">
                <a href="map.php" target="_blank">
                    <img src="../images/andy_whale_m.png" alt="Andy at work smiling for the camera.">
                    <div class="text">Visit</div>
                </a>
            </div>
        </div>
        <br>
        <div class="bottom-block">
            <div class="bottom-text1">
                <a href="subscribe.php">Subscribe</a> to see the current inventory or visit the showroom and&nbsp;display&nbsp;gardens.
            </div>
            <div class="bottom-image">
                <a href="https://teespring.com/stores/scottish-lion-wrought-iron?page=1" target="_blank">
                    <img src="../images/Sweatshirt.png" alt="White hoodie with red Scottish Lion logo. ">
                </a>
            </div>
            <div class="bottom-link">
                <a href="https://teespring.com/stores/scottish-lion-wrought-iron?page=1" target="_blank">Scottish Lion Tees and Hoodies!</a>
            </div>
        </div>
    </main>
    <!-- <div id="footer">
    </div> -->
    <?php
    require '../includes/footer.php';
    ?>
    <!-- <script>
        // header.style.position = "static";
        var header = document.getElementById("header-id");
        var sticky = header.offsetTop;
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            var Yoffset = window.pageYOffset;
            if (Yoffset > sticky) {
                header.classList.add("sticky");
                document.querySelector("header-id").style.paddingTop = "200px";
            } else {
                header.classList.remove("sticky");
                document.querySelector("header-id").style.paddingTop = "20px";
            }
        }
    </script> -->
</body>

</html>