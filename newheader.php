<!DOCTYPE html>
<?php
if (!session_id()) session_start();
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>New Header</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="./css/newheader.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="./images/favicon.png">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script>
        $(window).resize(function() {
            console.log('window was resized');
        });
    </script>
</head>

<body onload="fixWidth()">

    <header id="header" onload="fixWidth()">

        <!-- topnambar #navbar -->
        <nav class="topnavbar">
            <?php require './includes/menufull.php' ?>
        </nav>

        <!-- ************************************************************************************* -->
        <!-- sticky  menubar mobile -->
        <!-- condensed #navbar navbar-mobile -->
        <div class="topnavbar navbar-mobile">
            <?php require './includes/menumobile.php' ?>

        </div>

        <!-- *************************************************************************** -->
        <!-- the banner and header image -->
        <div class="banner-upper">
            <div class="banner-block">
                Scottish Lion
                <span class="logo-inline"><img src="./images/lion_50_trans.png"></span>
                Wrought Iron
            </div>
        </div>

        <div id="header-image"></div>

        <a name="top"></a>

        <!-- ******************************************************************************** -->
        <!-- lower #navbar navbar-wide -->
        <nav id="navbar" class="navbar-wide">
            <?php require './includes/menufull.php' ?>
        </nav>

        <!-- ******************************************************************* -->
        <!-- condensed #navbar navbar-mobile -->
        <div id="navbar" class="navbar-mobile">
            <?php require './includes/menumobile.php' ?>
        </div>
        <br>

    </header>


    <script>
        window.addEventListener("resize", function(event) {
            fixWidth();
        })

        function fixWidth() {
            var parentwidth = $("header").width();
            $(".topnavbar").width(parentwidth);
        }
    </script>

    <?php
    $pagename = $_SESSION['pagename'];
    //        echo "<br>".$pagename."<br>";
    echo "<script>";
    if ($pagename == "index") {
        echo 'document.getElementById("header-image").style.display = "block"';
    } else {
        echo 'document.getElementById("header-image").style.display = "none"';
    }
    echo "</script>";

    $buttonAltStyle = 'style="font-weight: bold; font-size: 20px; border: 0px solid black; padding: 0px;"';
    ?>

</body>

</html>