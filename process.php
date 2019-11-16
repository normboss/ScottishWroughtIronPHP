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
        <title>Gates</title>
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
        <!--        <div class="heading">
                    <span class="block-id-letter">A</span>
                    The Process
                    <img src="./images/andy_only2.jpg">
                </div>-->

        <div class="heading">
            <span class="block-id-letter">A</span>
            Working with Andy
            <div class="box c">
                <img src="./images/andy_only2.jpg" alt="Andy Leck">
            </div> 
            <div class="box cc">
                <div class="wide-paragraph-left">
                    <div class="process">
                        <ul>
                            <li class="contact-andy"><a href="contact.html" target="_blank">Contact Andy with your ideas.</a> </li>
                            <li>Andy comes to your site and works with you to develop a plan.</li>
                            <li>Job estimate and payment agreement - deposit of half down with balance due upon completion.</li>
                            <li>Andy fabricates the railing or gate in his shop.</li>
                            <li>Installation of your custom railing.</li>
                        </ul>
                    </div>                
                </div>
            </div>
        </div>


        <!-- ***********************************************
                M A I N
             ***********************************************-->

        <div class="main">
            <div class="box af"><span class="block-id-image">AF</span>
                <img src="./images/railing_sample_left.jpg" alt="">
                <div class="image-text">When meeting with customers 
                    to plan their projects Andy brings
                    this sample railing along.</div>
            </div>

            <div class="box ag"><span class="block-id-image">AG</span>
                <img src="./images/andy_installs.jpg" alt="">
                <div class="image-text">Andy installing a railing 
                    for a church in Edgecomb, Maine</div>
            </div>
        </div>
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
