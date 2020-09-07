<div id="footer2" class="footer2">
    <!-- <div class="back-to-top">
            <a href="#top">
                <img src="../images/backToTop.png" alt="Top">
            </a>
        </div> -->


    <div class="footer-block">

        <div class="heading">

            <h1>Scottish Lion</h1>
            <img src="../images/lion_50_trans.png" alt="">

            <h1>Wrought Iron</h1>
        </div>
        <div class="sub-heading">
            <p>Custom Gates, Garden&nbsp;Art&nbsp;and&nbsp;Hardware</p>
        </div>

        <div class="middle-stuff">

            <div class="visit">
                <a href="map.php" target="_blank">
                    <div class="map">
                        <iframe width="120" height="122px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=43.9932053,-69.53366699999998&amp;q=587%20Bristol%20Rd%20Bristol%2C%20ME%2004539+(Maine%20Village%20Weaver)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                    <h3>Visit</h3>
                </a>
            </div>

            <div class="hoodies">
                <a href="https://teespring.com/stores/scottish-lion-wrought-iron?page=1"  target="_blank">
                    <img src="../images/sweatshirt.png" alt="">
                    <h3>Tees & Hoodies</h3>
                </a>
            </div>

            <div class="contact-block">
                <div class="contact-info">
                    <div class="name-address">Andrew Leck</div>
                    <div class="name-address">587 Bristol Road</div>
                    <div class="name-address">Bristol, Maine</div>
                    <div class="name-address">207- 563-5788</div>

                </div>
                <div class="link-block">
                    <div class="contact-link">
                        <a href="contact.php" target="_blank">
                            <h5>Contact</h5>
                        </a>
                    </div>
                    <div class="subscribe">
                        <a href="subscribe.php" target="_blank">
                            <h5>Subscribe</h5>
                        </a>
                    </div>
                </div>

            </div>

            <div class="facebook">
                <a href="https://www.facebook.com/scottishwroughtiron/" target="_blank">
                    <img src="../images/facebook_2.png" alt="FB">
                    <h5>Follow</h5>
                </a>
            </div>
            <div class="craft-weekend">
                <img src="../images/OctoberCraft.png" alt="">
            </div>

        </div>

        <div class="bottom-logo">
            <a href="https://www.alchemywebdesigns.com">
                <span class="credit-brand">Alchemy</span><span class="credit-name"> Web Designs</span>
            </a>

        </div>

    </div>

</div>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
    // header.style.position = "static";
    var header = document.getElementById("header-id");
    var sticky = header.offsetTop;
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        var Yoffset = window.pageYOffset;
        if (Yoffset > sticky) {
            header.classList.add("sticky");
            // document.querySelector(".hardware-container").style.paddingTop = "60px";
            document.querySelector("main").style.paddingTop = "90px";
        } else {
            header.classList.remove("sticky");
            // document.querySelector(".hardware-container").style.paddingTop = "0px";
            document.querySelector("main").style.paddingTop = "20px";
        }
    }
</script>