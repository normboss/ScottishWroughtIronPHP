<?php
if (!session_id()) session_start();
$_SESSION['pagename'] = "curtain-hardware";
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
    require '../includes/seo-stuff.php';
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link href="../css/curtain-hardware1.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">

</head>

<body">

    <div id="fb-root"></div>
    <div id="new-header"></div>
    <?php
    require '../includes/newheader1.php'
    ?>

    <!--    <div id="banner-upper"></div>
        <div id="banner-lower"></div>
        <div id="main-menu" class="home"></div>-->

    <!--
     ***************************************************************************
        m a i n
     ***************************************************************************
    -->
    <div class="main">
        <br>


        <?php
        require '../includes/curtain-hardwareComponent.php'
        ?>

    </div>
    <!-- <div id="footer">
    </div> -->
    <?php
    require '../includes/footer.html'
    ?>
</body>

</html>