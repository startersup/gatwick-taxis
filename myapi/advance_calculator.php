<?php

 $row=0;
 
 // echo($distance);
  
  if(($distance<=60)&&($distance>20))
  {
      $myd=20;
      while($myd<$distance)
      {
          $myd +=10;
          $row +=1;
          $reduction=0.15;
      }
  }
  else
  {
      if(($distance<=120)&&($distance>60))
  {
      $myd=60;
      $row=4;
      while($myd<$distance)
      {
          $myd +=15;
          $row +=1;
          $reduction=0.02;
      }
  }
  
   else
   {
       if(($distance<=200)&&($distance>120))
  {
      $myd=120;
      $row=8;
      while($myd<$distance)
      {
          $myd +=20;
          $row +=1;
                $reduction=-0.10;
      }
  }
  
  else
  {
       if(($distance<=350)&&($distance>200))
  {
      $myd=200;
      $row=12;
      while($myd<$distance)
      {
          $myd +=30;
          $row +=1;
                        $reduction=-0.15;
  
      }
  }
  else
  {
      if($distance<=400)
      {
          $row=18;
                        $reduction=-0.20;
  
      }
      else
      {
            $row=19;
                          $reduction=0.10;
  
      }
  }
      
  }
  
   }
  }
  

?>