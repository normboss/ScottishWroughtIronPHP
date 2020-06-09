<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "contact";
function generateFormToken($form)
{
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form . '_token'] = $token;
    return $token;
}
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
    <title>Scottish Lion Wrought Iron | Contact Andy</title>
    <meta name="description" content="Get in touch with Andy to discuss custom projects or ask a question.
He is always happy to talk with clients.">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/contact.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            pretty();
            document.getElementById("contact-form").submit();
        }
    </script>

</head>

<body">
    <div id="fb-root"></div>
    <div id="new-header"></div>
    <?php
    require '../includes/newheader1.php'
    ?>

    <main>
        <br><br>
        <div class="contact-container">

            <div class="box image">
                <img src="../images/andy_face1.jpg">
            </div>

            <div class="box title">
                Contact Andy
            </div>

            <div class="box copy">
                Andy is always happy to answer questions
                about his work and discuss custom projects.
            </div>

            <div class="box form-container">
                <?php
                // generate a new token for the $_SESSION superglobal and put them in a hidden field
                $newToken = generateFormToken('form1');
                ?>

                <!-- <form action="send-form-email.php" class="contactform" method="post" name="contactform"> -->
                <form id="contact-form" action="thankyou.html" class="contactform" method="post" name="contactform">
                    <label for="name">Your Name *</label>
                    <input maxlength="50" name="name" size="30" type="text">
                    <input type="hidden" name="token" value="<?php echo $newToken; ?>">
                    <label for="email">Email Address *</label>
                    <input maxlength="80" name="email" size="30" type="text">
                    <label for="message">Comments *</label>
                    <textarea cols="30" maxlength="1000" name="message" rows="5"></textarea> * = required<br>
                    <!-- <input class="submit" type="submit" value="Submit »"> -->
                    <button class="g-recaptcha submit" data-sitekey="6Ld82v0UAAAAAIUG_P-YM0zTf9eoRCGEC3WTcf8N" data-callback='onSubmit'>Submit</button><br>
                </form>

            </div>

            <div class="box logo">
                <!--<img src="../images/logo_100_trans.png">-->
                <img src="../images/lion_150_trans.png">
            </div>

            <div class="box terms">
                <div class="title">
                    Terms
                </div>

                <span class="rowL-heading">Payment </span>
                <span class="rowL-copy">Personal checks, Visa/MasterCard,
                    Discover and Paypal accepted.
                </span>
                <br><br>

                <span class="rowL-heading">Shipping </span><span class="rowL-copy">starts at $10.00</span><br>
                <div class="rowL-copy">10% for regular item shipping</div>
                <div class="rowL-copy">Oversized charges apply.</div>
                <div class="rowL-copy">Some items can be picked up locally, at a show</div>
                <div class="rowL-copy">or by special arrangement.</div>
                <br>

                <span class="rowL-heading">Special Orders</span>
                <span class="rowL-copy">, railings, large sculptures:
                    Deposit of half down with balance due upon completion
                    of project.
                </span>
            </div>
        </div>
    </main>
    <?php
    require '../includes/footer.html'
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function pretty() {
            $("#contact-form").attr("action", "misc.php");
        }
    </script>

    </body>

</html>