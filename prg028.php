<?
   $arr=array("num"=>100,"name"=>"RPBC","location"=>"Rajkot");
   $arr[]=360002;
   $arr["country"]="India";

   echo "<pre>";
   print_r($arr);
   echo "</pre>";

   $arr1[]=101;
   $arr1["name"]="Rajesh";
   $arr1[7]=89.78;
   $arr1[]="Dist";//index no. is 8 not 1

   echo "<pre>";
   print_r($arr1);
   echo "</pre>";
?>