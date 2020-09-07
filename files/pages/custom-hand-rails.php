<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "railings";
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
    <title>Scottish Lion Wrought Iron | Custom Hand Rails</title>
    <meta name="description" content="Sampling of handrails designed, fabricated and installed by Andy Leck.">

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
            Custom Hand Rails
            <div class="box c">
                <img src="../images/andy_only2.jpg" alt="Blacksmith Andy Leck at work.">
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
                <img src="../images/rock_railing.jpg" alt="Double railings at the entrace of a low porch.">
                <div class="image-text">Safety and fun together in a custom handrail with wrapped rocks.</div>
            </div>

            <div class="box t"><span class="block-id-image">T</span>
                <img src="../images/railing_step_flow.jpg" alt="Railing along a custom stone stairway.">
                <div class="image-text">This double railing has scroll accent. </div>
            </div>

            <div class="box v"><span class="block-id-image">V</span>
                <img src="../images/granite_steps_simple2.jpg" alt="Simple railing along 3 granite block steps.">
                <div class="image-text">Elegant simplicity of iron paired with granite steps</div>
            </div>

            <div class="box w"><span class="block-id-image">W</span>
                <img src="../images/thistle_railing.jpg" alt="Railing over two stone steps with thistle decoration.">
                <div class="image-text">Andy's graceful thistle motif enhances the entrance to this lovely home </div>
            </div>

            <div class="box y"><span class="block-id-image">Y</span>
                <img src="../images/railing_step_rock2.jpg" alt="Railing with stones encased in wrought iron on six steps of granite.">
                <div class="image-text">Post with a twist supports this rail </div>
            </div>

            <div class="box z">
                <img src="../images/railing_fish2.jpg" alt="Wrought iron railing with swimming fish and glass floats.">
                <div class="image-text">
                    Fish cut of recycled metal seem to swim in the current
                    accented by glass floats.<br>
                    Photographed prior to delivery and installation by Andy
                </div>
            </div>

            <div class="box ac">
                <img src="../images/anchor_railing.jpg" alt="Double railings on 8 steps to porch.">
                <div class="image-text">Anchors and wrapped rocks fit the place</div>
            </div>

            <div class="box ad">
                <img src="../images/window_gate.jpg" alt="Wrough iron grill with flowers and glass balls.">
                <div class="image-text">Window grill has flowers and blue glass amid graceful curves </div>
            </div>

            <div class="box ac">
                <img src="../images/anchor_snow.png" alt="Double railings on 8 steps to porch.">
                <div class="image-text">Andy’s work is made for New England weather.</div>
            </div>

            <div class="box ad">
                <img src="../images/anchor_snow2.png" alt="Wrough iron grill with flowers and glass balls.">
                <div class="image-text">Another view of the custom anchor railing after a snow.</div>
            </div>
        </div>
    </main>
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
                <img src="../images/railing_sample_left.jpg" alt="">
                <div class="image-text">When meeting with customers 
                    to plan their projects Andy brings
                    this sample railing along.</div>
            </div>

            <div class="box ag"><span class="block-id-image">AG</span>
                <img src="../images/andy_installs.jpg" alt="">
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
    require '../includes/footer.php'
    ?>


    </body>

</html>