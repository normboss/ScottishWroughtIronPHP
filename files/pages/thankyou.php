<?php
if(!session_id()) session_start();
$_SESSION['pagename'] = "thankyou";
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
    require '../includes/seo-stuff.php'
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link href="../css/thankyou.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">

  </head>
  <body>

    <main>
      <span class="heading">Scottish Lion</span>
      <img src="../images/logo_40_trans.png">
      <span class="heading">Wrought Iron</span>
      
      <br><br>
      <div class="copy">
        Thank you for your interest. 
      </div>
      <div class="copy">
        You will receive a reply soon.
      </div>
      <div class="copy">
        Andrew Leck
      </div>
      <br>
      <img src="../images/andy_thanks2.jpg">
    </main>

  </body>
</html>
