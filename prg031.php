<?
   $arr=array(array(101,"Yuv","Rajkot"),array(102,"Sunil","Surat"),array(103,"Bharat","Bombay"));

   echo "<pre>";
   print_r($arr);
   echo "</pre>";

   echo "<table border =1>";
   foreach($info as $rec)
   {
       echo "<tr>";
       foreach($rec as $fla)
       {
           echo "<td>".$fla."</td>";
       }
       echo "</tr>";
   }
   echo "</table>";
?>