<?

   $flnm="Check.txt";
   $arr=file($flnm);

   echo "<pre>";
   print_r($arr);
   echo "</pre>";

   for($i=0 ; $i<sizeof($arr) ; $i++)
   {
       echo "<br>".$arr[$i];
   }
?>