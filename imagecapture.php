<?php
    //session_start();
    header('Content-type: image/jpeg');
    //$text= $_SESSION['secur'];
    
    $widt= 500;
   $height= 250;
   $image= imagecreate($widt, $height);
   imagecolorallocate($image, 255, 255, 255);
   $text_color= imagecolorallocate($image, 0, 0, 0);

    for($x=0; $x<=30; $x++){
        $x1=rand(1,100) ;
        $y1= rand(1,100);
        $x2=rand(1,100) ;
        $y2=rand(1,100) ;
         imageline( $image,$x1,$y1, $x2, $y2, $text_color);
   }
//imagettftext($image, $text_color,);
//imagejpeg($image);   

?>