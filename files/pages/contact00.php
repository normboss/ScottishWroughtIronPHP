<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "contact";

if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    // $email_to = "norm.bosse0@gmail.com";
    // $email_to = "bosse.ann@gmail.com";
    $email_to = "leck@midcoast.com";
    $email_subject = "Scottish Lion Wrought Iron contact form message";


    function died($error)
    {
        // your error code can go here
        echo "I am very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])
    ) {
        died('I am sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    // $string_exp = "/^[A-Za-z .'-]+$/";
    // if (!preg_match($string_exp, $first_name)) {
    //     $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    // }
    // if (!preg_match($string_exp, $last_name)) {
    //     $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    // }
    if (strlen($message) < 2) {
        $error_message .= 'The message you entered do not appear to be valid.<br />';
    }
    if (strlen($error_message) > 0) {
        died($error_message);
    }

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    // $email_message = "Hello, my name is ";
    $email_message = "This is a message from ";
    $email_message .= clean_string($name) . "\n\n";
    // $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= clean_string($message) . "\n\n";


    // create email headers
    $headers = 'From: ' . $email_from . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n" .
        'Bcc: norm.bosse0@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your own success html here -->

    <script type="text/javascript">
        window.location = "thankyou.html";
    </script>

<?php
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

                <!-- <form action="send-form-email.php" class="contactform" method="post" name="contactform"> -->
                <form id="contact-form" action="contact.php" class="contactform" method="post" name="contactform">
                    <label for="name">Your Name *</label>
                    <input maxlength="50" name="name" size="30" type="text">
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

    </body>

</html>