<?
   $city=array("RJT","JND","SRT");

   list($ct1,$ct2,$ct3)=$city;
   echo "<br>City 1 := ".$ct1;
   echo "<br>City 2 := ".$ct2;
   echo "<br>City 3 := ".$ct3;

   if(in_array("RJT",$city))
   {
       echo "<br>RJT Available In Array";
   }
   if(in_array("AMD",$city))
   {
       echo "<br>AMD Available in Array";
   }
   else
   {
       echo "<br>AMD is not Available in Array";
   }

   $transport=array('foot','bike','car','plane');
   $mod=current($transport);    //$mod='foot'
   $mod=next($transport);       //$mod='bike'
   $mod=next($transport);       //$mod='car'
   $mod=prev($transport);       //$mod='bike'
   $mod=end($transport);       //$mod='plane'
   $mod=reset($transport);       //$mod='foot'
?>