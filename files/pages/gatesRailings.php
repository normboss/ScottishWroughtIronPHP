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
    require './includes/globalSiteTag.html';
    ?>

    <title>Gates</title>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="./css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        //      $(function () {
        //        $("#new-header").load("newheader.php");
        //        $("#footer").load("footer.html");
        //      });

        $(document).ready(function() {
            //        $("#new-header").load("newheader.php");
            //        $("#footer").load("footer.html");
        });
    </script>

</head>

<body">

    <div id="fb-root"></div>
    <div id="new-header"></div>
    <?php
    require 'newheader1.php'
    ?>

    <!-- *********************************************** -->
    <br>
    <!--        <div class="heading">
            <span class="block-id-letter">A</span>
            Gates
            <img src="../images/andy_only2.jpg">
            <div class="wide-paragraph">
                Andy Leck's railings and gates are 
                as attractive as they are functional.
                Andy can work with you to select the
                right style for the setting
                and intended use.
            </div>
        </div>-->

    <div class="heading">
        <span class="block-id-letter">A</span>
        Custom Gates and Railings
        <div class="box c">
            <img src="../images/andy_only2.jpg" alt="picture of Andy">
        </div>
        <div class="box cc">
            <div class="wide-paragraph">
                Andy Leck's gates and railings are as attractive as they are functional.
                <br>
            </div>
            <!-- <div class="wide-paragraph">
                See Andy's gates
            </div>
            <div class="wide-paragraph">
                See Andy's railings
            </div> -->
        </div>
    </div>


    <!-- ***********************************************
                M A I N
             ***********************************************-->
    <div class="main">
        <heading>
            <div class="box b"><span class="block-id-image">B</span>
                <a href="railing.php"><div class="wide-paragraph">See Andy's Railings</div></a>
            </div>
        </heading>
        <div class="box b"><span class="block-id-image">B</span>
            <a href="gates.php"><div class="wide-paragraph">See Andy's Gates</div></a>
        </div>

        <div class="box b"><span class="block-id-image">B</span>
            <a href="railings.php"><img src="../images/railing_fish2.jpg"></a>
            <div class="image-text">
                Fish cut of recycled metal seem to swim in the current
                accented by glass floats.<br>
                Photographed prior to delivery and installation by Andy
            </div>
        </div>

        <div class="box e"><span class="block-id-image" alt="Victorian gate">E</span>
            <a href="gates.php"><img src="../images/railing_pink_gate.jpg"></a>
            <div class="image-text">Victorian style compliments this home.</div>
        </div>

    </div>

    <!--        <div class="process">
            <div class="sub-heading">
                The Process
            </div>
            <ul>
                <li class="contact-andy"><a href="contact.html" target="_blank">Contact Andy with your ideas.</a> </li>
                <li>Andy comes to your site and works with you to develop a plan.</li>
                <li>Job estimate and payment agreement - deposit of half down with balance due upon completion.</li>
                <li>Andy fabricates the railing or gate in his shop.</li>
                <li>Installation of your custom railing.</li>
            </ul>
        </div>-->
    <!--        <div class="main">
            <div class="box af"><span class="block-id-image">AF</span>
                <img src="../images/railing_sample_left.jpg">
                <div class="image-text">When meeting with customers 
                    to plan their projects Andy brings
                    this sample railing along.</div>
            </div>

            <div class="box ag"><span class="block-id-image">AG</span>
                <img src="../images/andy_installs.jpg">
                <div class="image-text">Andy installing a railing 
                    for a church in Edgecomb, Maine</div>
            </div>

        </div>-->
    <!--</main>-->
    <!--      <div class="paragraph">
                <a href="contact.html">
                Contact Andy for a consult.
                </a>
              </div>-->

    <!--<div id="footer"></div>-->
    <?php
    require 'footer.html'
    ?>


</body>

</html>