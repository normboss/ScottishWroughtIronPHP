<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "plate-holders";
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
    require '../includes/seo-stuff.php';
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link href="../css/plate-holders.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">

</head>

<body">

    <div id="fb-root"></div>
    <div id="new-header"></div>
    <?php
    require '../includes/newheader1.php';
    ?>

    <main class="hardware-container">

        <div class="small-sub-heading">
            Custom Made
        </div>
        <div class="big-heading">
            Plate and Bowl Holders
        </div>
        <br>


        <!--****************************************
            plate-holders - block 1
            *****************************************-->
        <div id="block1" class="plate-holders1">

            <!-- <div class="heading">
                <div class="item-name">Hand Forged Table Top Plate Holders</div>
                <br>
                <div class="copy1">
                    <div class="line2" style="font-weight: normal;">
                        Choose one of three styles and display your plate on a table or shelf.
                        Your choice of black or oil rubbed bronze finish in one of the three styles shown below.
                    </div>
                </div>
            </div> -->

            <div class="item-name">Hand Forged Table Top Plate&nbsp;Holders</div>
            <div class="item-copy">
                Choose one of three styles and display your plate on a table or shelf.
                Your choice of black or oil rubbed bronze finish in one of the three styles shown below.
            </div>
            <div class="item-name-small">
                $35 small, $37, medium, $39 large<br>plus shipping
            </div>

            <img id="block1-image" src="../images/plate_holders_wp_left.jpg" alt="">

            <div class="use-columns">
                <div class="models">
                    <div class="model-block">
                        <img src="../images/style_heart.jpg" alt="">
                        Heart
                    </div>
                    <div class="model-block">
                        <img src="../images/style_ram.jpg" alt="">
                        Ram
                    </div>
                    <div class="model-block">
                        <img src="../images/style_scroll.jpg" alt="">
                        Scroll
                    </div>
                </div>
                <div class="buy-it">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="Z8U3SV2R85MKU">

                        <table>
                            <tr>
                            </tr>

                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Sizes:">Sizes:
                                </td>
                                <td>
                                    <select name="os0">
                                        <option value="Small">Small (4 inch) $35.00 USD</option>
                                        <option value="Medium">Medium (8 inch) $37.00 USD</option>
                                        <option value="Large">Large (9 inch) $39.00 USD</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                            <tr class="spacer20">
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="hidden" name="on1" value="Style:">Style:
                                </td>
                                <td>
                                    <select name="os1">
                                        <option value="Heart">Heart </option>
                                        <option value="Ram Double Scroll">Ram Double Scroll </option>
                                        <option value="Infinity Scroll">Infinity Scroll </option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="spacer20">
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="button1">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="image" src="../images/add_2_cart2.png" border="0" name="submit" alt="Add to Cart" <?php echo $buttonAltStyle; ?>>
                                        <img alt="Add to Cart" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <br>
                    </form>
                </div>
            </div>
        </div>

        <!--****************************************
            one-plate-hanger - block 2
            *****************************************-->
        <div id="block2" class="plate-holders1 block2">

            <div class="item-name">Custom Forged Single Wall Plate Holder</div>
            <div class="item-name">Custom made to fit your plates!</div>
            <div class="item-copy">
                Display a plate or shallow bowl beautifully.
                Your choice of black or oil rubbed bronze
                finish in one of the four styles shown below.
                Actual size plate listed in&nbsp;drop&nbsp;down&nbsp;list.
                <div class="item-name-small">
                    Single Wall Plate Holder $50.
                    Extra Large Plate Holder $60. Plus 10% shipping
                </div>
            </div>

            <!-- <div>Plus $18 shipping</div> -->
            <div class="use-columns2">
                <img id="block2-image" src="../images/plate_holder.jpg" alt="">

                <div class="column2-block2">
                    <div class="box buy-it">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="FFPV2JS6C55KE">
                            <table>
                                <tr>
                                    <td><input type="hidden" name="on0" value="Plate Size">Plate Size</td>
                                </tr>
                                <tr>
                                    <td><select name="os0">
                                            <option value="12 Inch">12 Inch $50.00 USD</option>
                                            <option value="14 inch">14 inch $50.00 USD</option>
                                            <option value="16 inch">16 inch $50.00 USD</option>
                                            <option value="18 inch">18 inch $50.00 USD</option>
                                            <option value="20 inch">20 inch $60.00 USD</option>
                                        </select> </td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="on1" value="Style">Style</td>
                                </tr>
                                <tr>
                                    <td><select name="os1">
                                            <option value="Heart">Heart </option>
                                            <option value="Ram">Ram </option>
                                            <option value="Scroll">Scroll </option>
                                            <option value="Spade">Spade </option>
                                        </select> </td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="on2" value="Color">Color</td>
                                </tr>
                                <tr>
                                    <td><select name="os2">
                                            <option value="black">black </option>
                                            <option value="oil rubbed bronze">oil rubbed bronze </option>
                                        </select> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="spacer20"></div>
                                    </td>
                                </tr>
                            </table>
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="image" src="../images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <?php require '../includes/models1.php'; ?>
                </div>
            </div>

        </div>

        <!--****************************************
            two-plate-hanger - block 3
            *****************************************-->
        <div id="block3" class="plate-holders1 block2">
            <br><br>
            <div class="item-name">Hand Forged Double Wall Plate Holder</div>
            <div class="item-name">Custom Holders made to fit your plates
                <span class="red-words">at no extra charge!</span> (up to 18 inches).
            </div>

            <div class="item-copy">
                Wonderful way to feature special pieces.
                Supports up to 14 inch plates, pie plates
                or shallow bowls.
                Your choice of black or oil
                rubbed bronze finish in one
                of the four styles shown below.

                <!-- <br>
                <div>(Shipped in two pieces.)</div>
                <br>
                <div class="item-name">Double Wall Plate Holder $65.</div>
                <div>Shipping for each item $18.</div> -->
            </div>
            <div class="use-columns2">
                <img src="../images/2_plate_holder_c.jpg" alt="">

                <div class="column2-block2">

                    <div class="box buy-it">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="Z2U2W3JF585V4">
                            <table>
                                <tr>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="on0" value="Style:">Style:</td>
                                    <td><select name="os0">
                                            <option value="Heart">Heart </option>
                                            <option value="Ram">Ram </option>
                                            <option value="Scroll">Scroll </option>
                                            <option value="Spade">Spade </option>
                                        </select> </td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="on1" value="Color:">Color:</td>
                                    <td><select name="os1">
                                            <option value="Black">Black </option>
                                            <option value="Oil rubbed bronze">Oil rubbed bronze </option>
                                        </select> </td>
                                </tr>
                                <tr class="spacer10">
                                    <td></td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td>
                                        <!--<input type="hidden" name="on2" value="Plate diameter" size="4">Plate diameter up to 18 inches-->
                                        <input type="hidden" name="on2" value="Plate size">Plate size:
                                    </td>
                                    <td>
                                        <!--<input type="text" name="os2" maxlength="200" size="4" >-->
                                        <select name="os2">
                                            <option value="12 inch">12 inch </option>
                                            <option value="14 inch">14 inch </option>
                                            <option value="16 inch">16 inch </option>
                                            <option value="18 inch">18 inch </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="spacer10">
                                    <td></td>
                                </tr>
                            </table>
                            <input type="image" src="../images/add_2_cart2.png" border="0" name="submit" alt="Add to Cart" <?php echo $buttonAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>

                    <?php require '../includes/models1.php'; ?>
                </div>

            </div>
        </div>

        <!--****************************************
            five-plate-hanger - block 4
            *****************************************-->
        <div id="block4" class="plate-holders1">

            <div class="item-name">
                Custom Forged Five Plate Wall Holder
            </div>

            <!-- <div class="order paragraph">Five Plate Wall Holder $95 plus shipping</div> 
            </div> Shipped in two pieces</div> -->

            <div id="use-columns4">
                <img src="../images/5_plate_holder1.jpg" alt="">

                <div id="column4-block2">
                    <div class="item-name item-copy">Custom Holders made to fit your plates
                        <span class="red-words">at no extra&nbsp;charge!</span> (up to 18 inches).
                    </div>

                    <div class="item-copy">
                        Display your collection with pride.
                        Holds plates, shallow bowls or pie plates up to 14 inches in diameter!
                        Your choice of black or oil
                        rubbed bronze finish and one
                        of the four styles shown below.<br>
                        Five Plate Wall Holder $95 plus shipping<br>
                        Shipped in two pieces
                    </div>

                    <div id="column4-block3">
                        <div class="box buy-it">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="4YQH2KQG7XX8S">
                                <table>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="on0" value="Style">Style:
                                        </td>
                                        <td>
                                            <select name="os0">
                                                <option value="Heart">Heart </option>
                                                <option value="Ram">Ram </option>
                                                <option value="Scroll">Scroll </option>
                                                <option value="Spade">Spade </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="on1" value="Color">Color:
                                        </td>
                                        <td>
                                            <select name="os1">
                                                <option value="Black">Black </option>
                                                <option value="Oil Rubbed Bronze">Oil Rubbed Bronze </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--<input type="hidden" name="on2" value="Plate diameter up to 18 inches">Plate diameter-->
                                            <input type="hidden" name="on2" value="Plate size">Plate size:
                                        </td>
                                        <td>
                                            <!--<input type="text" name="os2" maxlength="200" size="4">-->
                                            <select name="os2">
                                                <option value="12 inch">12 inch </option>
                                                <option value="14 inch">14 inch </option>
                                                <option value="16 inch">16 inch </option>
                                                <option value="18 inch">18 inch </option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr class="spacer20">
                                        <td></td>
                                    </tr>
                                </table>
                                <input class="button1" type="image" src="../images/add_2_cart2.png" border="0" name="submit" alt="Add to Cart" <?php echo $buttonAltStyle; ?>>
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>

                        <!-- <?php require '../includes/models1.php'; ?> -->
                        <div class="models1">
                            <div class="model-block1">
                                <img src="../images/style_heart.jpg" alt="">
                                Heart
                            </div>
                            <div class="model-block1">
                                <img src="../images/style_ram.jpg" alt="">
                                Ram
                            </div>
                            <div class="model-block1">
                                <img src="../images/style_scroll.jpg" alt="">
                                Scroll
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

        <!--****************************************
            bowl-holders - block 5
            *****************************************-->
        <div id="block5" class="plate-holders1">

            <div class="item-name">Custom Forged Wall Bowl Holders</div>

            <div class="item-copy">
                Both our single and double wall bowl
                holders are custom forged to fit your
                bowls at no extra charge (if under 18 inch diameter).
                Scrolls hold the bowl at a slight angle.
                Your choice of either black or oil rubbed bronze finish.
            </div>

            <div id="use-columns5">
                <div id="block5-images">
                    <img src="../images/bowl_holder2a.jpg" alt="">
                    <img src="../images/2_bowl_holder3.jpg" alt=""">
                </div>
                <div id="column5-block2">

                    <div class="box buy-it">
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="VCBGJWRXVBR64">
                            <table>
                                <tr>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="on0" value="One or bowls">1 or 2 bowls:</td>
                                    <td><select name="os0">
                                            <option value="One bowl">One bowl $40.00 USD</option>
                                            <option value="Two bowls">Two bowls $65.00 USD</option>
                                        </select> </td>
                                </tr>
                                <tr class="spacer10">
                                    <td></td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="on1" value="Color">Color:</td>
                                    <td><select name="os1">
                                            <option value="Black">Black </option>
                                            <option value="Oil rubbed bronze">Oil rubbed bronze </option>
                                        </select> </td>
                                </tr>
                                <tr class="spacer10">
                                    <td></td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="on2" value="Bowl diameter">Bowl diameter:</td>
                                    <td><input type="text" name="os2" maxlength="200" size="4"></td>
                                </tr>
                                <tr class="spacer10">
                                    <td></td>
                                </tr>
                            </table>
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="image" src="../images/add_2_cart2.png" border="0" name="submit" alt="Add to Cart" <?php echo $buttonAltStyle; ?>>
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="spacer30"></div>


        <!--****************************************
            bowl-holders - block 6
            *****************************************-->
        <div id="block6" class="plate-hangers1 block2">

            <div class="item-name">Three Tier Plate Stand</div>

            <div class="item-copy">
                Hand wrought stand displays pies, cakes and desserts on a table top in style.
                Hand riveted shelves can be custom sized to fit your needs.
            </div>

            <div class="use-columns2a">
                <img src="../images/3_tier_stand.png" alt="" style="width: 40%;">
                <img src="../images/2_tier_stand_plates.png" alt="" style="width: 40%;">
            </div>

            <div class="box buy-it buy-it6">
                <!-- <div class="spacer30"></div> -->
                <div class="block6-info">
                    Three Tier Plate Stand $250. Plus $50. Shipping
                </div>
                <br>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="7ZYVDTNKBZVNU">
                    <input type="image" src="../images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>

        </div>
        </div>
    </main> <!-- hw-block3 -->

    </div>


    <div id="footer">
    </div>
    <?php require '../includes/footer.html' ?>
    </body>

</html>