<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print <<<END
<span class="menu-item"><a href="home.php">Home</a></span>
<div class="dropdown">
    <span class="menu-item"><a href="home.php">Gallery</a></span>
    <div class="dropdown-content">
        <a href="wrought-iron-gates.php"><span class="dropdown-item">Gates</span></a>
        <a href="custom-hand-rails.php"><span class="dropdown-item">Railings</span></a>
        <a href="garden-art.php"><span class="dropdown-item">Garden Art</span></a>
        <a href="plate-holders.php"><span class="dropdown-item">Plate Holders</span></a>
        <a href="curtain-hardware.php"><span class="dropdown-item">Curtain Hardware</span></a>
        <a href="signs-and-brackets.php"><span class="dropdown-item">Signs & Brackets</span></a>
        <a href="latest-work.php"><span class="dropdown-item">Latest Work</span></a>
        <a href="commissions.php"><span class="dropdown-item">Commissions</span></a>
        <a href="working-with-andy.php"><span class="dropdown-item">Working with Andy</span></a>
        <a href="https://www.etsy.com/shop/scottishlion"><span class="dropdown-item">Shop Etsy</span></a>
        <a href="terms.php"><span class="dropdown-item">Terms</span></a>
    </div>
</div> 
<span class="menu-item"><a href="about.php">About</a></span>
<span class="menu-item"><a href="contact.php" target="_blank">Contact</a></span>
<span class="menu-item"><a href="subscribe.php" target="_blank">Subscribe</a></span>
<div class="shopping-cart">
END;
require 'shoppingcart.php';
echo "</div>";
?>