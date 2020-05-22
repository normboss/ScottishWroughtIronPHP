<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "gatesRailings";
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
    <title>Scottish Lion Wrought Iron | Gates</title>
    <meta name="description" content="Be inspired by the variety of styles from formal victorian to contemporary designs using reclaimed metal.">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="../css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">

</head>

<body">

    <div id="fb-root"></div>
    <div id="new-header"></div>
    <?php
    require '../includes/newheader1.php'
    ?>

    <main>
        <br>
        <div class="heading">
            <span class="block-id-letter">A</span>
            Custom Gates
            <div class="box c">
                <img src="../images/andy_only2.jpg" alt="Andy Leck">
            </div>
            <div class="box cc">
                <div class="wide-paragraph">
                    Andy Leck's gates are as attractive as they are functional.
                    <br>
                    Andy can work with you to select the
                    right style for the setting
                    and intended use.<br><br>
                    Designed, fabricated and installed by Andy Leck.
                    Get in touch to discuss your project.
                </div>
            </div>
        </div>
        <br>


        <!-- ***********************************************
                M A I N
             ***********************************************-->
        <div class="main">

            <div class="box b"><span class="block-id-image">B</span>
                <img src="../images/gate_cranes.jpg" alt="Decorative gate with birds and fish.">
                <div class="image-text">Gate alive with birds, animals and fish cut from reclaimed metal</div>
            </div>

            <!-- <figure class="box b">
            <img src="../images/gate_cranes.jpg" alt="Gate with birds, animals and fish">
            <figcaption class="image-text">Gate alive with birds, animals and fish cut from reclaimed metal</figcaption>
        </figure> -->

            <div class="box e"><span class="block-id-image">E</span>
                <img class="image1" src="../images/railing_pink_gate.jpg" alt="Ornate wrought iron gate.">
                <div class="image-text">Victorian style compliments this home.</div>
            </div>

            <!-- <figure class="box e">
            <img src="../images/railing_pink_gate.jpg">
            <figcaption class="image-text">Victorian style compliments this home.</figcaption>
        </figure> -->

            <div class="box f"><span class="block-id-image">F</span>
                <img src="../images/railing_pink_curve.jpg" alt="">
                <div class="image-text">Double railing features baskets, curls, circles and fleur de lis finials</div>
            </div>

            <div class="box h"><span class="block-id-image">H</span>
                <img src="../images/gate_leaves_snow.jpg" alt="Gate with decorative leaves and vines.">
                <div class="image-text">Custom Gate for a seasonal driveway</div>
            </div>

            <div class="box i"><span class="block-id-image">I</span>
                <img src="../images/gate_farm.jpg" alt="Another style gate with leaves and vines.">
                <div class="image-text">Gate with distinctive style</div>
            </div>

            <div class="box k"><span class="block-id-image">K</span>
                <img src="../images/heart_gate.jpg" alt="Gate with rocks wrapped in iron.">
                <div class="image-text">Custom gate has a sliding closure and rocks wrapped in iron. </div>
            </div>

            <div class="box l"><span class="block-id-image">L</span>
                <img src="../images/railing_asian.jpg" alt="Gate with Asian styling with cast iron horses.">
                <div class="image-text">Asian styling with cast iron horses</div>
            </div>

            <div class="box n"><span class="block-id-image">N</span>
                <img src="../images/tree_life.jpg.jpg" alt="Tall gate with tree design.">
                <div class="image-text">Tree of Life Gate with Glass "Fruit"</div>
            </div>

            <div class="box o"><span class="block-id-image">O</span>
                <img src="../images/tree_life_andy.jpg" alt="">
                <div class="image-text">Andy with the Tree of Life Gate before installation</div>
            </div>

            <div class="box p"><span class="block-id-image">P</span>
                <img src="../images/gate_water_st468.jpg" alt="">
                <div class="image-text">Formal Gate with handrail welcomes visitors to the garden.</div>
            </div>
        </div>
    </main>
    <?php
    require '../includes/footer.html'
    ?>

    </body>

</html>