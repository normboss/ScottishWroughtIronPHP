<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print <<<END
<div class="logo-inline-mobile menu-box">
    <!--Icon-->
    <img src="../images/logo_40_trans.png">
</div>

<div class="dropdown menu-box">
    <!--Menu-->
    <a href="home.php"><span class="menu-item">Menu</span></a>
    <div class="dropdown-content">

        <a href="home.php">Home</a>
        <a href="wrought-iron-gates.php">Gates</a>
        <a href="custom-hand-rails.php">Railings</a>
        <a href="garden-art.php">Garden Art</a>
        <a href="plate-holders.php">Plate Hangers</a>
        <a href="curtain-hardware.php">Curtain Hardware</a>
        <a href="signs-and-brackets.php">signs-and-brackets / Brackets</a>
        <a href="latest-work.php"><span class="dropdown-item">Latest Work</span></a>
        <a href="commissions.php"><span class="dropdown-item">Commissions</span></a>
        <a href="working-with-andy.php"><span class="dropdown-item">Working with Andy</span></a>
        <a href="https://www.etsy.com/shop/scottishlion">Shop Etsy</a>
        <a href="about.php">About</a>
        <a href="contact.php" target="_blank">Contact</a>
        <a href="subscribe.php" target="_blank">Subscribe</a>
    </div>          
</div> <!-- outer drop down -->

<div class="shopping-cart-mobile menu-box">
END;
require 'shoppingcart.php';
echo '</div>';
?>
