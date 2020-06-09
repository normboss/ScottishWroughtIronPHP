<?php
if (!session_id()) session_start();
$_SESSION['pagename'] = "commissions";
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
    <title></title>
    <meta name="description" content="">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="../css/commissions.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">

</head>

<body>

    <div id="fb-root"></div>
    <div id="new-header"></div>
    <?php
    require '../includes/newheader1.php'
    ?>

    <!-- *********************************************** -->
    <main>
        <br>
        <div class="heading">
            Commissions
        </div>
        <br>

        <div class="wide-paragraph">
            Andy Leck enjoys collaborating with customers!
            His work can fill practical needs and instill some solid bits of creative whimsy.
            Let the work presented here inspire you to bring your ideas to life.
        </div>

        <!-- ***********************************************
            M A I N
         ***********************************************-->
        <div class="main">

            <div class="box">
                <img src="../images/bird-cage5.jpg" alt="">
                <div class="image-text">Extra heavy rods for elegant drapery.</div>
            </div>
            <div class="box">
                <img class="short-image" src="../images/marquetry_table.png" alt="">
                <div class="image-text">Custom base supports marquetry table.</div>
            </div>
            <div class="box">
                <img src="../images/glass_table_frame.png" alt="">
                <div class="image-text">Base for a glass top table.</div>
            </div>
            <div class="box">
                <img src="../images/glass_table.png" alt="">
                <div class="image-text">One of a kind table with copper gallery.</div>
            </div>



            <div class="box c">
                <img src="../images/pot_rack_copper.jpg" alt="">
                <div class="image-text">Custom pot rack mounted to butcher block displays a colleciton of copper pots</div>
            </div>

            <div class="box e"><span class="block-id-image">E</span>
                <img src="../images/heart_gate.jpg" alt="">
                <div class="image-text">Custom gate features wrapped rocks and sliding gate closure</div>
            </div>

            <div class="box b"><span class="block-id-image">B</span>
                <img src="../images/pot_rack_copper3.jpg" alt="">
                <div class="image-text">The same custom rack offers sturdy overhead storage with style.</div>
            </div>

            <div class="box f"><span class="block-id-image">F</span>
                <img src="../images/ox_bow_bracket2.jpg" alt="">
                <div class="image-text">Custom brackets support an ox bow above a window.</div>
            </div>

            <div class="box h"><span class="block-id-image">H</span>
                <img src="../images/spinner_fish.jpg" alt="">
                <div class="image-text">A granite post supports a sculpture with fish that spin around a metal globe.</div>
            </div>

            <div class="box i"><span class="block-id-image">I</span>
                <img src="../images/sun_dial_garage.jpg" alt="">
                <div class="image-text">Custom sun dial marks the hours on this garage</div>
            </div>

            <div class="box k"><span class="block-id-image">K</span>
                <img src="../images/rxr_tables.jpg" alt="">
                <div class="image-text">Antique metal rail road signs transformed into tables for a collector. A glass top was added.</div>
            </div>

            <div class="box l"><span class="block-id-image">L</span>
                <img src="../images/rxr_table.jpg" alt="">
                <div class="image-text">Andy can help repurpose favorite items.</div>
            </div>

            <div class="box n"><span class="block-id-image">N</span>
                <img src="../images/hat_rack.jpg" alt="">
                <div class="image-text">Andy’s rack displays hats while preserving their shapes.</div>
            </div>

            <div class="box o"><span class="block-id-image">O</span>
                <img src="../images/tulip_hinges_salamander_handle.jpg" alt="">
                <div class="image-text">Tulip inspired hinges are teamed up with a handle with a salamander motif on an outbuilding</div>
            </div>


            <div class="box"><span class="block-id-image">N</span>
                <img src="../images/trellis2.png" alt="">
                <div class="image-text">Trellis screen is functional focal point.</div>
            </div>

            <div class="box"><span class="block-id-image">O</span>
                <img src="../images/live_edge_table1.jpg" alt="">
                <div class="image-text">
                    Live edge table specially crafted for a client.
                </div>
            </div>


            <div class="box"><span class="block-id-image">N</span>
                <img src="../images/k_gate.png" alt="">
                <div class="image-text">Gate photographed before installation. </div>
            </div>

            <div class="box"><span class="block-id-image">O</span>
                <img src="../images/gate_client_site.png" alt="">
                <div class="image-text">
                    Seen with Andy’s sculpture, “Bird Cage with Arrow Windvane”. Photo credit: Ray Kaller..
                </div>
            </div>

            <div class="box"><span class="block-id-image">N</span>
                <img src="../images/fire_pit_hearts.png" alt="">
                <div class="image-text">
                    Fire pit with screen and log hook has heart shapes for air intake and flair.
                </div>
            </div>

            <div class="box"><span class="block-id-image">O</span>
                <img src="../images/fire_pit_hearts2.png" alt="">
                <div class="image-text">
                    View of grate. The hook hangs where screen is in the photo.
                </div>
            </div>

            <div class="box"><span class="block-id-image">N</span>
                <img src="../images/pond_railing.png" alt="">
                <div class="image-text">
                    Turtles climb beside cat tails and Wrapped rocks. Birds stand at the base.
                </div>
            </div>

            <div class="box"><span class="block-id-image">O</span>
                <img src="../images/pond_railing_bird.png" alt="">
                <div class="image-text">
                    One of the birds at the base of the railing pictured on the left.
                </div>
            </div>
        </div>
    </main>
    <br>
    <!-- <div id="footer"></div> -->
    <?php
    require '../includes/footer.html'
    ?>



</body>

</html>