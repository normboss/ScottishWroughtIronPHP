    <!-- <header id="header" onload="fixWidth()"> -->
    <header id="header">

        <div id="header-id">

            <!-- *************************************************************************** -->
            <!-- the banner and header image -->
            <div class="banner">
                <!-- <div class="banner-block"> -->
                    Scottish Lion
                    <!-- <div class="logo-inline"><img src="../images/lion_50_trans.png"></div> -->
                    <img class="logo-inline" src="../images/lion_50_trans.png">
                    Wrought Iron
                <!-- </div> -->
            </div>

            <a name="top"></a>

            <!-- ******************************************************************************** -->
            <!-- lower #navbar navbar-wide -->
            <nav id="navbar" class="navbar-wide">
                <?php
                require 'menufull.php'
                ?>
            </nav>

            <!-- ******************************************************************* -->
            <!-- condensed #navbar navbar-mobile -->
            <div id="navbar" class="navbar-mobile">
                <?php require 'menumobile.php' ?>
            </div>
        </div>
        

    </header>

    <script>
        // window.addEventListener("resize", function(event) {
        //     fixWidth();
        // })

        // function fixWidth() {
        //     var parentwidth = $("header").width();
        //     $(".topnavbar").width(parentwidth);
        // }
    </script>

    <?php
    $pagename = $_SESSION['pagename'];
    //        echo "<br>".$pagename."<br>";
    echo "<script>";
    if ($pagename == "home") {
        echo 'document.getElementById("header-image").style.display = "block"';
    // } else {
    //     echo 'document.getElementById("header-image").style.display = "none"';
    }
    echo "</script>";

    $buttonAltStyle = 'style="font-weight: bold; font-size: 20px; border: 0px solid black; padding: 0px;"';
    ?>

    <div id="page-start"></div>