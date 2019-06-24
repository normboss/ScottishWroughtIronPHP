<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print <<<END
<div class="logo-inline-mobile menu-box">
    <!--Icon-->
    <img src="./images/logo_40_trans.png">
</div>

<div class="dropdown menu-box">
    <!--Menu-->
    <a href="index.php"><span class="menu-item">Menu</span></a>
    <div class="dropdown-content">

        <a href="index.php">Home</a>
        <a href="gates.php">Gates</a>
        <a href="railings.php">Railings</a>
        <a href="gardenArt.php">Garden Art</a>
        <a href="plateHangers.php">Plate Hangers</a>
        <a href="curtainhw.php">Curtain Hardware</a>
        <a href="signs.php">Signs / Brackets</a>
        <a href="commissions.php"><span class="dropdown-item">Commissions</span></a>
        <a href="process.php"><span class="dropdown-item">Working with Andy</span></a>
        <a href="https://www.etsy.com/shop/scottishlion">Shop Etsy</a>
        <a href="about.php">About</a>
        <a href="contact.php" target="_blank">Contact</a>
        <a href="subscribe.php" target="_blank">Subscribe</a>
    </div>          
</div> <!-- outer drop down -->

<div class="shopping-cart-mobile menu-box">
END;
require './includes/shoppingcart.php';
echo '</div>';
?>
