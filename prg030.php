<?
   $arr=array(1001,"yuv",array("science"=>70,"maths"=>80,"english"=>90),80,"Dist");

   echo "<pre>";
   print_r($arr);
   echo "</pre>";

   echo "<br>Name : ".$arr[1];
   echo "<br>Maths = ".$arr[2]["maths"];
?>