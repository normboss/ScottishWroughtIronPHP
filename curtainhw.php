<?php
if(!session_id()) session_start();
$_SESSION['pagename'] = "curtainhw";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>Hardware</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link href="./css/curtainhw.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="./images/favicon.png">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
      $(function () {
//        $("#new-header").load("newheader.php");
        $("#footer").load("footer.html");
      });
    </script> 

  </head>
  <body onload="fixWidth()">

    <div id="fb-root"></div>
    <div id="new-header"></div>
<?php
  require 'newheader.php'
?>

    <!--    <div id="banner-upper"></div>
        <div id="banner-lower"></div>
        <div id="main-menu" class="home"></div>-->

    <!--
     ***************************************************************************
        m a i n
     ***************************************************************************
    -->
    <div class="main">
      <br>

      <!--
       ***************************************************************************
          forged rods
       ***************************************************************************
      -->
      <div class="small-sub-heading">
        Hand Forged
      </div>
      <div class="sub-heading">
        Curtain Hardware
      </div>
      <br>

      <div class="forged-rods">
        <div class="box c">
          <div class="box copy">
            <div class="item-name">Custom Forged Rods</div>
          </div>
        </div>

        <div class="box a">
          <div class="box copy">
            <br>
            <div class="paragraph">
              Four classic styles created in custom lengths.
              Rods are sturdy 1/2 inch diameter.
            </div>
            <div class="order">
              To order: 
            </div>
            <br>
            <div class="paragraph">
              Measure length of smooth metal
              and add 4 inches to each end
              for a total of 8 additional inches.
            </div>
            <br>
            <!--            <div class="paragraph">
                          Choose your preferred style; 
                          Spiral, Scroll, Basket or Knob.
                        </div>-->
            <div class="paragraph">
              $2. per inch plus shipping
            </div>
            <div class="cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="Z997KHCZKFKZ2">
                <table>
                  <tr>
                    <td class="spacer10"></div>
                  </tr>
                  <tr><td><input type="hidden" name="on0" value="Standard Lengths">Standard Lengths</td></tr><tr><td><select name="os0">
                        <option value="32 inches">32 inches $68.00 USD</option>
                        <option value="42 inches">42 inches $84.00 USD</option>
                        <option value="66 inches">66 inches $132.00 USD</option>
                        <option value="102 inches">102 inches $204.00 USD</option>
                      </select> </td></tr>
                  <tr>
                    <td class="spacer10"></div>
                  </tr>
                  <tr><td><input type="hidden" name="on1" value="Select style">Select style</td></tr><tr><td><select name="os1">
                        <option value="Spiral">Spiral </option>
                        <option value="Scroll">Scroll </option>
                        <option value="Basket">Basket </option>
                        <option value="Knob">Knob </option>
                      </select> </td></tr>
                  <tr>
                    <td class="spacer10"></div>
                  </tr>
                </table>
                <input type="hidden" name="currency_code" value="USD">
                <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
              <br>

              <!--leck@midcoast.com-->
              <a href="contact.html">
                Contact me for custom sizes and price 
              </a>
            </div>
          </div>
          <br><br>
        </div>

        <div class="box b">
          <div class="box pic">
            <img src="./images/curtain_chw_1.jpg">
            <!--            <span class="label l1">Spiral</span>
                        <span class="label l2">Scroll</span>
                        <span class="label l3">Basket</span>
                        <span class="label l4">Knob</span>-->
          </div>
        </div>
      </div>
      <br><br>


      <!--
       ***************************************************************************
          Curtain Rings
       ***************************************************************************
      -->


      <div class="curtain-rings">

        <div class="box c">
          <div class="box copy">
            <div class="item-name">
              Hand Forged Curtain Rings
            </div>
          </div>
        </div>

        <div class="box a">
          <div class="copy">
            <br>
            <div class="paragraph">
              Made to easily glide on our 
              spiral, and knob rods. 
              Inside diameter 1 1/2 inches.
            </div>
            <br>
            <div class="spacer10"></div>
            Hand Forged Curtain Rings $5 each
            plus shipping      
            <br><br>
            <div class="cart">

              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="K92G948R7GW7L">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Color">Color</td></tr><tr><td><select name="os0">
                        <option value="Black">Black </option>
                        <option value="Hand Rubbed Bronze">Hand Rubbed Bronze </option>
                      </select> </td></tr>
                  <tr class="spacer30"><td></td></tr>
                </table>
                <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>

            </div>
          </div>

          <br>
        </div>
        <div class="box b">
          <div class="image">
            <img src="./images/102018lion_rods_rings.jpg">
          </div>
        </div>
      </div>
      <br><br>


      <!--
       ***************************************************************************
          large bracket set
       ***************************************************************************
      -->

      <div class="heading">
        Hand Forged Brackets
      </div>
      <br>

      <div class="large-brackets">

        <div class="box c">
          <div class="box copy">
            <div class="item-name">
              Large Bracket Set
            </div>
          </div>
        </div>

        <div class="box a">
          <div class="copy">
            <div class="spacer10"></div>
            <div class="paragraph">
              Set of 2 large hand forged 
              wrought iron brackets can 
              hold up to a 3 inch diameter
              rod or branch. 
            </div>
            <br>
            <div class="paragraph">
              Brackets have a 5 inch 
              projection. 
            </div>
            <div class="spacer10"></div>
            Set of 2 Large Brackets $48
            <br>
            plus shipping      
            <br><br>
            <div class="cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="PAYABSNUVNEUA">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Color">Color</td></tr><tr><td><select name="os0">
                        <option value="Black">Black </option>
                        <option value="Oiled Rubbed Bronze">Oiled Rubbed Bronze </option>
                      </select> </td></tr>
                  <tr class="spacer10"><td></td></tr>
                </table>
                <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>

          <br>
        </div>
        <div class="box b">
          <div class="image">
            <img src="./images/brackets_b193-s.jpg">
          </div>
        </div>
      </div>
      <br><br>

      <!--
      ***************************************************************************
         small bracket set
      ***************************************************************************
      -->

      <div class="small-brackets">
        <div class="box c">
          <div class="copy">
            <div class="item-name">
              Small Bracket Set
            </div>
          </div>
        </div>

        <div class="box a">
          <div class="copy">
            <div class="spacer10"></div>
            <div class="paragraph">
              Set of 2 hand forged wrought
            </div>
            <div class="paragraph">
              iron brackets hold up
            </div>
            <div class="paragraph">
              to a one inch diameter dowel.
            </div>
            <div class="paragraph">
              Brackets have a 3 inch projection. 
            </div>
            <br>
            <div class="paragraph">
              Set of 2 brackets $36 plus shipping.
            </div>
            <br>

            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="WGUVA5YKUBLSG">
              <table>
                <tr><td><input type="hidden" name="on0" value="Color">Color</td></tr><tr><td><select name="os0">
                      <option value="Black">Black </option>
                      <option value="Oiled Rubbed Bronze">Oiled Rubbed Bronze </option>
                    </select> </td></tr>
                <tr class="spacer10"><td></td></tr>
              </table>
              <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>

        </div>

        <div class="box b">
          <div class="image">
            <img src="./images/bracket_b19s.jpg">
          </div>
        </div>
      </div>
      <br><br>
      <!--
      ***************************************************************************
         Shelf Bracket with Curtain Rod Hook
      ***************************************************************************
      -->
      <div class="shelf-brackets">

        <div class="box c">
          <div class="copy">
            <div class="item-name">
              Shelf Bracket with 
            </div>
            <div class="item-name">
              Curtain Rod Hook
            </div>
          </div>
        </div>

        <div class="box a">
          <div class="spacer30"></div>
          <div class="copy">
            <div class="paragraph">
              Set of 2 hand forged wrought
            </div>
            <div class="paragraph">
              iron brackets supports a shelf 
            </div>
            <div class="paragraph">
              of wood or glass.
            </div>
            <div class="spacer10"></div>
            <div class="paragraph">
              Rod hook riveted underneath can
            </div>
            <div class="paragraph">
              hold a11/4 inch dowel. Comes 
            </div>
            <div class="paragraph">
              in plain single scroll.
            </div>
            <div class="spacer20"></div>
            <!--            <div class="paragraph">
                          Set of 2 shelf brackets with rod hooks
                        </div>-->
            <!--              in choice of Black or Oil Rubbed Bronze
                          finish.-->
            <!--            Color:
                        Small: Supports a 4 inch shelf        $42.
                        Large: Supports a 51/2 inch shelf  $48-->

            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="DA7MGRMY9T4Z8">
              <table>
                <tr>
                  <td><input type="hidden" name="on0" value="Size">Size</td>
                </tr>
                <tr>
                  <td>
                    <select name="os0">
                      <option value="Small">2 Small $42.00 USD</option>
                      <option value="Large">2 Large $48.00 USD</option>
                    </select> 
                  </td>
                </tr>
                <tr class="spacer10">
                </tr>
                <tr>
                  <td>
                    <input type="hidden" name="on1" value="Color">Color
                  </td>
                </tr>
                <tr>
                  <td>
                    <select name="os1">
                      <option value="Black">Black </option>
                      <option value="Oil Rubbed Bronze">Oil Rubbed Bronze </option>
                    </select> 
                  </td>
                </tr>
                <tr class="spacer10">
                </tr>
              </table>
              <input type="hidden" name="currency_code" value="USD">
              <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>

            <div class="spacer30"></div>
          </div>
        </div>

        <div class="box b">
          <div class="image">
            <img src="./images/bracket_shelf_m.jpg">
          </div>
        </div>
      </div>
      <br><br>
      <!--
      ***************************************************************************
         Star Shelf bracket with Curtain Rod Hook
      ***************************************************************************
      -->
      <div class="star-shelf-bracket">

        <div class="box c">
          <div class="copy">
            <div class="item-name">
              Star Shelf bracket with 
            </div>
            <div class="item-name">
              Curtain Rod Hook
            </div>
          </div>
        </div>

        <div class="box a">
          <div class="copy">
            <div class="paragraph">
              Set of 2 hand forged wrought
            </div>
            <div class="paragraph">
              iron brackets with cast iron star
            </div>
            <div class="paragraph">
              supports shelf of wood or glass.
            </div>
            <div class="paragraph">
              Rod hook riveted underneath can
            </div>
            <div class="paragraph">
              hold a11/4 inch dowel. Comes 
            </div>
            <div class="paragraph">
              in plain single scroll.
            </div>
            <!--Choose Black or Oiled Rubbed Bronze finish.-->

            <!--Set of 2 shelf with hook brackets-->
            <!--            Color:
            
                        Small: Supports a 4 inch shelf           $42
                        Large: Supports a 51/2 inch shelf     $48          -->
            <br>
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="FUJ3AHHTLTTV4">
              <table>
                <tr><td><input type="hidden" name="on0" value="Size">Size</td></tr><tr><td><select name="os0">
                      <option value="Small (4 inch shelf)">Small (4 inch shelf) $42.00 USD</option>
                      <option value="Large (5 1/2 inch shelf)">Large (5 1/2 inch shelf) $48.00 USD</option>
                    </select> </td></tr>
                <tr class="spacer10"></tr>
                <tr><td><input type="hidden" name="on1" value="Color">Color</td></tr><tr><td><select name="os1">
                      <option value="Black">Black </option>
                      <option value="Oil Rubbed Bronze">Oil Rubbed Bronze </option>
                    </select> </td></tr>
                <tr class="spacer20"></tr>
              </table>
              <input type="hidden" name="currency_code" value="USD">
              <input type="image" src="./images/add_2_cart2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>

          </div>
        </div>

        <div class="box b">
          <div class="image">
            <img src="./images/bracket_star.jpg">
          </div>
        </div>
      </div>

    </div>

    <div id="footer">
    </div>
  </body>
</html>
