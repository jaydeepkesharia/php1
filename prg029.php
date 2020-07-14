<?
   $arr=array("num"=>100,"name"=>"RPBC","location"=>"Rajkot");
   $arr["pincode"]=360002;
   $arr["country"]="India";

   echo "<pre>";
   print_r($arr);
   echo "</pre>";

   foreach($arr as $v)
   {
       echo "<br>".$v;
   }
   foreach($arr as $k=>$v)
   {
       echo "<br>".$k." = ".$v;
   }
?>