<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "plateHangers";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Plate Holders</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
        <link href="./css/plateHangers0.css" media="screen" rel="stylesheet" type="text/css">
        <link rel="icon" href="./images/favicon.png">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            $(function () {
                //        $("#new-header").load("newheader.php");
                $("#footer").load("footer.html");
            });
        </script> 

    </head>
    <body>
        <div id="fb-root"></div>
        <div id="new-header"></div>
        <?php
        require 'newheader.php'
        ?>

        <br>

        <div class="small-sub-heading">
            Custom Made
        </div>
        <div class="heading">
            Plate and Bowl Holders
        </div>
        <br>


        <!--****************************************
        plate-holders
        *****************************************-->
        <div class="plate-holders">
            
            <div class="box bb">
                <div class="item-name">Hand Forged Table Top Plate Holders</div>
            </div>
            
            <div class="box b">
                <div class="copy">
                    <div class="paragraph">Choose one of three styles and
                        display your plate on a table or shelf.
                        Sizes small, medium or large.
                    </div>
                    <div class="item-name"> 
                        $35 small $37 medium and $29 large
                    </div>
                    <div>plus shipping</div>
                </div>
            </div>

            <div class="box a">
                <!--PLATES-->
                <img src="./images/plate_holders_wp_left1.jpg">
            </div>
            
            <div class="box f">
                <!--CART-->
                <!--<br>-->
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="Z8U3SV2R85MKU">
                    <table>
                        <tr></tr>
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
                        <tr class="spacer10">
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
                        <tr class="spacer10">
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="button1">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </div>
                            </td>
                        </tr>
                    </table>
                    <!--<br>-->
                </form>
            </div>
            <div class="box g">
                <span class="box c">
                    <span class="box">Heart</span>
                    <img src="./images/style_heart.jpg">
                </span>
                <span class="box d">
                    <span class="box">Ram</span>
                    <img src="./images/style_ram.jpg">
                </span>
                <span class="box e">
                    <span class="box">Scroll</span>
                    <img src="./images/style_scroll.jpg">
                </span>
            </div>
        </div>

        <br><br><br>

        <!--****************************************
        one-plate-hanger
        *****************************************-->
        <div class="one-plate-hanger grid">
            <br>
            <div class="box aa">
                <div class="item-name">Custom Forged
                    Single Wall Plate Holder</div>
            </div>
            <br>

            <div class="box a">
                <!--1PLATE-->
                <a href="1plateholder.html">
                    <img src="./images/plate_holder.jpg">
                </a>
            </div>

            <div class="box b">
                <!--TEXT-->
                <div class="copy">
                    <div class="line2">Display a 14 inch pie plate 
                        or shallow bowl beautifully.
                        Your choice of black or oil 
                        rubbed bronze finish and one
                        of the four styles shown below.
                    </div>
                    <br>
                    <div class="item-name">
                        Single wall Plate Holder $40
                    </div>
                    <br>
                    <div>Plus 10% shipping</div>
                    <br>

                </div> 
            </div> 


            <div class="box c">
                <div class="paragraph">
                    Custom Holders are made to fit your plates
                    <div class="red-words">at no extra charge!</div>  
                    (up to 18 inches).
                </div>
                <br>

                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="FFPV2JS6C55KE">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Style">Style:</td></tr><tr><td><select name="os0">
                                    <option value="Heart">Heart </option>
                                    <option value="Ram">Ram </option>
                                    <option value="Scroll">Scroll </option>
                                    <option value="Spade">Spade </option>
                                </select> </td></tr>
                        <tr class="spacer10">
                            <td></td>
                        </tr>
                        <tr><td><input type="hidden" name="on1" value="Color">Color:</td></tr><tr><td><select name="os1">
                                    <option value="black">black </option>
                                    <option value="oil rubbed bronze">oil rubbed bronze </option>
                                </select> </td></tr>
                        <tr class="spacer10">
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                              <!--<input type="hidden" width="4" name="on2" value="Plate diameter">Plate diameter:-->
                                <input type="hidden" name="on2" value="Plate size">Plate size
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <!--<input type="text" name="os2" maxlength="8" width="4" size="4" placeholder="14"></td>-->
                                <select name="os2">
                                    <option value="12 inch">12 inch </option>
                                    <option value="14 inch">14 inch </option>
                                    <option value="16 inch">16 inch </option>
                                    <option value="18 inch">18 inch </option>
                                </select> 

                        </tr>
                        <tr class="spacer10">
                            <td></td>
                        </tr>
                    </table>
                    <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

            </div>

            <div class="box d">
            </div>

            <div class="box f">
                Heart
                <img src="./images/style_heart1sm.jpg">
            </div>
            <div class="box g">
                Ram
                <img src="./images/style_ram2.jpg">
            </div>
            <div class="box h">
                Scroll
                <img src="./images/style_scroll2.jpg">
            </div>
            <div class="box i">
                Spade
                <img src="./images/style_plain2.jpg">
            </div>
            <div class="box k">
                <!--K-->
            </div>

        </div> <!-- hw-block2a -->

        <br><br><br>

        <!--****************************************
        two-plate-hanger
        *****************************************-->
        <div class="two-plate-hanger grid">
            <br><br>
            <div class="box aa"><span class="block-id-letter">AA</span>
                <div class="item-name">Hand Forged Double Wall Plate Holder</div>
                <div class="paragraph">Custom Holders made to fit your plates
                    <span class="red-words">at no extra charge!</span>  (up to 18 inches).
                </div>
            </div>

            <div class="box a"><span class="block-id-letter">A</span>
                <div class="copy">
                    Wonderful way to feature special pieces.
                    Supports up to 14 inch plates, pie plates
                    or shallow bowls.
                    Your choice of black or oil 
                    rubbed bronze finish in one
                    of the four styles shown below.

                    <br>
                    <div>(Shipped in two pieces.)</div>
                    <br>
                    <div class="item-name">Double Wall Plate Holder $65.</div>
                    <div>Shipping for each item $18.</div>
                </div>
            </div>

            <div class="box d"><span class="block-id-letter">D</span>
                <br>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="Z2U2W3JF585V4">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="Style:">Style:</td></tr><tr><td><select name="os0">
                                    <option value="Heart">Heart </option>
                                    <option value="Ram">Ram </option>
                                    <option value="Scroll">Scroll </option>
                                    <option value="Spade">Spade </option>
                                </select> </td></tr>
                        <tr><td><input type="hidden" name="on1" value="Color:">Color:</td></tr><tr><td><select name="os1">
                                    <option value="Black">Black </option>
                                    <option value="Oil rubbed bronze">Oil rubbed bronze </option>
                                </select> </td></tr>
                        <tr class="spacer10">
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                              <!--<input type="hidden" name="on2" value="Plate diameter" size="4">Plate diameter up to 18 inches-->
                                <input type="hidden" name="on2" value="Plate size">Plate size
                            </td>
                        </tr>
                        <tr>
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
                    <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div> 

            <div class="box c"><span class="block-id-letter">C</span>
                <!--2PLATE-->
                <!--<a href="2plateholder.html">-->
                <img src="./images/2_plate_holder_c.jpg">
                <!--</a>-->
            </div>
            <!--        <div class="box e"><span class="block-id-letter">E</span>
                      E
                    </div>-->
            <!--<div class="box f">F</div>-->
            <div class="fghi">
                <div class="box f"><span class="block-id-letter">F</span>
                    Heart
                    <img src="./images/style_heart1sm.jpg">
                </div>
                <div class="box g"><span class="block-id-letter">G</span>
                    Ram
                    <img src="./images/style_ram2.jpg">
                </div>
                <div class="box h"><span class="block-id-letter">H</span>
                    Scroll
                    <img src="./images/style_scroll2.jpg">
                </div>
                <div class="box i"><span class="block-id-letter">I</span>
                    Spade
                    <img src="./images/style_plain2.jpg">
                </div>
            </div>
            <!--        <div class="box k"><span class="block-id-letter">K</span>
                      K
                  </div>-->

        </div> <!-- hw-block2b -->

        <br><br><br>



        <!--****************************************
        five-plate-hanger
        *****************************************-->
        <div class="five-plate-hanger grid">

            <div class="box aa"><span class="block-id-letter">AA</span>
                <div class="item-name">
                    Custom Forged Five Plate Wall Holder
                </div>
                <div class="paragraph">Custom Holders made to fit your plates
                    <span class="red-words">at no extra charge!</span>  (up to 18 inches).
                </div>
            </div>

        <!--        <div class="box a"><span class="block-id-letter">A</span>
                </div>-->

            <div class="box b"><span class="block-id-letter">B</span>
                <br>
                <div class="copy">
                    <div class="paragraph">Display your collection with pride. </div>
                    <div class="paragraph">Holds plates, shallow bowls or pie plates up to 14 inches in diameter!</div>
                    <div class="paragraph">Your choice of black or oil </div>
                    <div class="paragraph">rubbed bronze finish and one</div>
                    <div class="paragraph">of the four styles shown below.</div>
                    <br>
                    <div class="order paragraph">Five Plate Wall Holder $95 <span class="paragraph">plus shipping</span></div>
                    <div class="paragraph">Shipped in two pieces</div>
                    <br>
                </div>

                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="4YQH2KQG7XX8S">
                    <table>
                        <tr>
                            <td>
                                <input type="hidden" name="on0" value="Style">Style
                            </td>
                            <td>
                                <input type="hidden" name="on1" value="Color">Color
                            </td>
                            <td>
                              <!--<input type="hidden" name="on2" value="Plate diameter up to 18 inches">Plate diameter-->
                                <input type="hidden" name="on2" value="Plate size">Plate size
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="os0">
                                    <option value="Heart">Heart </option>
                                    <option value="Ram">Ram </option>
                                    <option value="Scroll">Scroll </option>
                                    <option value="Spade">Spade </option>
                                </select> 
                            </td>

                            <td>
                                <select name="os1">
                                    <option value="Black">Black </option>
                                    <option value="Oil Rubbed Bronze">Oil Rubbed Bronze </option>
                                </select> 
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
                    <input class="button1" type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

            </div> 

            <div class="box d"><span class="block-id-letter">D</span>
                <img src="./images/5_plate_holder.jpg">
            </div>

            <div class="box f"><span class="block-id-letter">F</span>
                Heart
                <img src="./images/style_heart1sm.jpg">
            </div>

            <div class="box g"><span class="block-id-letter">G</span>
                Ram
                <img src="./images/style_ram2.jpg">
            </div>
            <div class="box h"><span class="block-id-letter">H</span>
                Scroll
                <img src="./images/style_scroll2.jpg">
            </div>
            <div class="box i"><span class="block-id-letter">I</span>
                Spade
                <img src="./images/style_plain2.jpg">
            </div>

        </div> <!-- hw-block2b -->

        <br><br><br>

        <!--****************************************
        bowl-holders
        *****************************************-->
        <div class="bowl-holders">
            <br><br><br>
            <div class="box aa">
                <div class="title">Custom Forged Wall Bowl Holders</div>
            </div>

            <div class="box a">
                <img src="./images/bowl_holder2.jpg">
            </div>

            <div class="box b">
                <div class="copy">
                    <br>
                    <!--            
                                <div class="paragraph">Both our single and double wall bowl </div>
                                <div class="paragraph">holders are custom forged  to fit your </div>
                                <div class="paragraph">bowls at no extra charge (if under 18 inch diameter).</div>
                    
                                <div class="paragraph">Single scrolls hold the bowl at a slight angle.</div>
                                <div class="paragraph">Your choice of either black or oil rubbed bronze finish. </div>
                                <br>
                                <div class="order">Single Wall Bowl Holder  $40. </div>
                                <div class="order">Double Wall Bowl Holder $65.</div>
                                <br>
                    -->
                    <div class="paragraph">
                        Both our single and double wall bowl 
                        holders are custom forged  to fit your
                        bowls at no extra charge (if under 18 inch diameter).
                        <div class="spacer10"></div>
                        Single scrolls hold the bowl at a slight angle.
                        Your choice of either black or oil rubbed bronze finish. 
                        <div class="spacer10"></div>
                        <div class="order">Single Wall Bowl Holder  $40. </div>
                        <div class="order">Double Wall Bowl Holder $65.</div>
                        <br>
                    </div>

                </div> <!-- copy -->

                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="VCBGJWRXVBR64">
                    <table>
                        <tr><td><input type="hidden" name="on0" value="One or two bowls">One or two bowls</td></tr><tr><td><select name="os0">
                                    <option value="One bowl">One bowl $40.00 USD</option>
                                    <option value="Two bowls">Two bowls $65.00 USD</option>
                                </select> </td></tr>
                        <tr class="spacer10">
                            <td></td>
                        </tr>
                        <tr><td><input type="hidden" name="on1" value="Color">Color</td></tr><tr><td><select name="os1">
                                    <option value="Black">Black </option>
                                    <option value="Oil rubbed bronze">Oil rubbed bronze </option>
                                </select> </td></tr>
                        <tr class="spacer10">
                            <td></td>
                        </tr>
                        <tr><td><input type="hidden" name="on2" value="Bowl diameter">Bowl diameter</td></tr>
                        <tr><td><input type="text" name="os2" maxlength="200" size="4"></td></tr>
                        <tr class="spacer10">
                            <td></td>
                        </tr>
                    </table>
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>


            </div> 
            <!--</div>-->
            <div class="box c">
                <img src="./images/2_bowl_holder3.jpg">
            </div>
        </div> <!-- hw-block3 -->


        <div id="footer">
        </div>
    </body>
</html>
