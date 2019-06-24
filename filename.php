<?php
    if(!session_id()) 
        session_start();
    
    $file = __FILE__;
     echo $file . "<BR>";
     $n = strlen($file);
//     for ( $i = 0; $i < $n; $i++ )
//     {
//         echo substr($file, $i, 1);
//     }
      
     $name = "";
     for ( $i = $n-1; $n>0; $i--)
     {
         $c = substr($file, $i, 1);
         if ( $c == "\\")  {
             $name = substr($file, $i+1, $i);
             break;
         }
     }
     echo "<br>".$name."<br>";

$_SESSION['pagename'] = $name;
?>