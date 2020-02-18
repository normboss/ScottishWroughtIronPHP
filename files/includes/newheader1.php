    <!-- <header id="header" onload="fixWidth()"> -->
    <header id="header">

        <div id="header-id">

            <!-- *************************************************************************** -->
            <!-- the banner and header image -->
            <div class="banner">
                <div class="banner-block">
                    Scottish Lion
                    <span class="logo-inline"><img src="../images/lion_50_trans.png"></span>
                    Wrought Iron
                </div>
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
        var header = document.getElementById("header-id");
        var sticky = header.offsetTop;
        // header.style.position = "static";
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>

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
    if ($pagename == "index") {
        echo 'document.getElementById("header-image").style.display = "block"';
    } else {
        echo 'document.getElementById("header-image").style.display = "none"';
    }
    echo "</script>";

    $buttonAltStyle = 'style="font-weight: bold; font-size: 20px; border: 0px solid black; padding: 0px;"';
    ?>