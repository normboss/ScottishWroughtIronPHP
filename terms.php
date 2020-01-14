<?php
if(!session_id()) session_start();
$_SESSION['pagename'] = "terms";
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
    require './includes/globalSiteTag.html';
    ?>

    <title>Terms - Scottish Wrought Iron</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link href="./css/terms.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./images/favicon.png">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    
  </head>
  <body onload="fixWidth()">

    <main>
      
      <div class="box header">
        Terms
      </div>
      <div class="box payment">
        <span class="sub-heading">Payment</span>
        <div class="text">
          Personal checks, Visa/MasterCard,
          Discover and Paypal accepted.
        </div>
      </div>
      <div class="box special">
        <span class="sub-heading">Special Orders</span>
        <div class="text">
          Railings, large sculptures: Deposit of half down with balance due upon completion of project.
        </div>
      </div>
      <div class="box shipping">
        <span class="sub-heading">Shipping</span>
        <div class="text">
          $10.00 minimum.
          10% for regular item shipping
          Oversized charges apply.
          Some items can be picked up locally,
          at a show or by special arrangement.
        </div>
      </div>
      <div class="box image">
        <img src="./images/anvil copy400.jpg">
      </div>
      
    </main>

  </body>
</html>
