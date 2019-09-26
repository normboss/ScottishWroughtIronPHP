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
        <title>Railings</title>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
        <link href="./css/style.css" media="screen" rel="stylesheet" type="text/css">
        <link rel="icon" href="./images/favicon.png">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            //      $(function () {
            //        $("#new-header").load("newheader.php");
            //        $("#footer").load("footer.html");
            //      });

            $(document).ready(function () {
                //        $("#new-header").load("newheader.php");
                //        $("#footer").load("footer.html");
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
             Custom Hand Rails
            <div class="box c">
                <img src="./images/andy_only2.jpg">
            </div> 
            <div class="box cc">
                <div class="wide-paragraph">
                    Andy Leck's railings are as attractive as they are functional.<br>
                    Andy can work with you to select the
                    right style for the setting
                    and intended use.<br><br>
                    Designed, fabricated and installed by Andy Leck.
                Get in touch to discuss your project.
                </div>
            </div>
        </div>


        <!-- ***********************************************
                M A I N
             ***********************************************-->
        <div class="main">

<!--            <div class="box q">
                <div class="heading"><div class="block-id-letter">Q</div>
                    Custom Hand Rails
                </div>
            </div>-->

            
<!--            <div class="paragraph">
                Designed, fabricated and installed by Andy Leck.
                Get in touch to discuss your project.
            </div>-->

            <div class="box s"><span class="block-id-image">S</span>
                <img src="./images/rock_railing.jpg">
                <div class="image-text">Safety and fun together in a custom handrail with wrapped rocks.</div>
            </div>

            <div class="box t"><span class="block-id-image">T</span>
                <img src="./images/railing_step_flow.jpg">
                <div class="image-text">This double railing has scroll accent. </div>
            </div>

            <div class="box v"><span class="block-id-image">V</span>
                <img src="./images/granite_steps_simple2.jpg">
                <div class="image-text">Elegant simplicity of iron paired with granite steps</div>
            </div>

            <div class="box w"><span class="block-id-image">W</span>
                <img src="./images/thistle_railing.jpg">
                <div class="image-text">Andy's graceful thistle motif enhances the entrance to this lovely home </div>
            </div>

            <div class="box y"><span class="block-id-image">Y</span>
                <img src="./images/railing_step_rock2.jpg">
                <div class="image-text">Post with a twist supports this rail </div>
            </div>

            <div class="box z">
                <img src="./images/railing_fish2.jpg">
                <div class="image-text">
                    Fish cut of recycled metal seem to swim in the current
                    accented by glass floats.<br>
                    Photographed  prior to delivery and installation by Andy      
                </div>
            </div>

            <div class="box ac">
                <img src="./images/anchor_railing.jpg">
                <div class="image-text">Anchors and wrapped rocks fit the place</div>
            </div>

            <div class="box ad">
                <img src="./images/window_gate.jpg">
                <div class="image-text">Window grill has flowers and blue glass amid graceful curves </div>
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
        </div>

        <div class="main">
            <div class="box af"><span class="block-id-image">AF</span>
                <img src="./images/railing_sample_left.jpg">
                <div class="image-text">When meeting with customers 
                    to plan their projects Andy brings
                    this sample railing along.</div>
            </div>

            <div class="box ag"><span class="block-id-image">AG</span>
                <img src="./images/andy_installs.jpg">
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
