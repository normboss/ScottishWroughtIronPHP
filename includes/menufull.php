<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print <<<END
<span class="menu-item"><a href="index.php">Home</a></span>
<div class="dropdown">
    <span class="menu-item"><a href="index.php">Gallery</a></span>
    <div class="dropdown-content">
        <a href="gates.php"><span class="dropdown-item">Gates</span></a>
        <a href="railings.php"><span class="dropdown-item">Railings</span></a>
        <a href="gardenArt.php"><span class="dropdown-item">Garden Art</span></a>
        <a href="plateHangers.php"><span class="dropdown-item">Plate Hangers</span></a>
        <a href="curtainhw.php"><span class="dropdown-item">Curtain Hardware</span></a>
        <a href="signs.php"><span class="dropdown-item">Signs / Brackets</span></a>
        <a href="newwork.php"><span class="dropdown-item">Latest Work</span></a>
        <a href="commissions.php"><span class="dropdown-item">Commissions</span></a>
        <a href="process.php"><span class="dropdown-item">Working with Andy</span></a>
        <a href="https://www.etsy.com/shop/scottishlion"><span class="dropdown-item">Shop Etsy</span></a>
        <a href="terms.php"><span class="dropdown-item">Terms</span></a>
    </div>
</div> 
<span class="menu-item"><a href="about.php">About</a></span>
<span class="menu-item"><a href="contact.php" target="_blank">Contact</a></span>
<span class="menu-item"><a href="subscribe.php" target="_blank">Subscribe</a></span>
<div class="shopping-cart">
END;
require './includes/shoppingcart.php';
echo "</div>";
?>