<?php
if (!session_id())
    session_start();
?>
<!-- // WAS PUSHED, EXECUTE THE PHP CODE BELOW TO SEND THE
// MAIL. IF THE BUTTON WAS NOT PRESSED, SKIP TO THE CODE
// BELOW THE "else" STATEMENT (WHICH SHOWS THE FORM INSTEAD).
if ( isset ( $_POST [ 'buttonPressed' ] )){

// REPLACE THE LINE BELOW WITH YOUR E-MAIL ADDRESS.
$to = 'norm.bosse0@gmail.com' ;
$subject = 'Test Message' ;

// NOT SUGGESTED TO CHANGE THESE VALUES
$message = $_POST [ "message" ] ;
$headers = 'From: ' . $_POST[ "from" ] . PHP_EOL ;
mail ( $to, $subject, $message, $headers ) ;

// THE TEXT IN QUOTES BELOW IS WHAT WILL BE
// DISPLAYED TO USERS AFTER SUBMITTING THE FORM. -->
echo "Your e-mail has been sent. You should receive a reply within 24 hours." ;}

else{

<?php


//$connect = mysql_connect($host_name, $user_name, $password, $database);
//if (mysql_errno()) {
//    die('<p>Failed to connect to MySQL: '.mysql_error().'</p>');
//} else {
//    echo '<p>Connection to MySQL server successfully established.</p >';
//}
if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "norm.bosse0@gmail.com";
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
    $email_message = "Contact form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";


    // create email headers
    $headers = 'From: ' . $email_from . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n" ;
        // . 'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your own success html here -->

    <script type="text/javascript">
        window.location = "thankyou.php";
    </script>

<?php
}
?>