<?php
if(!session_id()) session_start();
$_SESSION['pagename'] = "signs-and-brackets";
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
    require '../includes/globalSiteTag.html';
    ?>
    <title></title>
    <meta name="description" content="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
    <link href="../css/signs-and-brackets1.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/favicon.png">
    <script>
    </script> 


  </head>
  <body">


    <div id="fb-root"></div>
    <div id="new-header"></div>
<?php
  require '../includes/newheader1.php'
?>

<!--    <div id="banner-upper"></div>
    <div id="banner-lower"></div>
    <div id="main-menu" class="home"></div>-->
    
    <br>
    
    <div class="title-block">
      <div class="heading box">
        Signs and Sign Brackets
      </div>
      <div class="copy box">
        Eye catching and durable metal work created and
installed by Andy Leck.
      </div>
    </div>
    <br>
    
    <main class="main">
      <div class="box a">
        <img src="../images/sign_cofee.jpg" alt="Weather vane sign for North Cottage coffee shop.">
      </div>
      <div class="box b">
        <img src="../images/oles_weld2.jpg" alt="Dragon sign for Oles Welding.">
      </div> 
      <div class="box c">
        <img src="../images/sign_southeby.jpg" alt="Hanging sign for Sotheby's Realty.">
      </div>
      <div class="box d">
        <img src="../images/sign_thompson.jpg" alt="Thompson House sign.">
      </div>
      <div class="box e">
        <img src="../images/sign_substance.jpg" alt="Women of Substance sign.">
      </div>
      <div class="box f">
        <img src="../images/sign_vet.jpg" alt="Damariscotta Veterinary Clinic sign.">
      </div>
    </main>  
    
    
    <br><br>
    <div class="end-msg">
      <a href="contact.html">
        Contact Andy for  unique signs, brackets and installation.
      </a>
    </div>

    <div id="footer">
    </div>
    <?php
        require '../includes/footer.php'
        ?>

  </body>
</html>
