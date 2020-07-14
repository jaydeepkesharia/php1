<?
   $city=array("RJT","JND","SRT");

   print_r($city);

   sort($city);    //sort in ascending order
   echo "<br>";
   print_r($city);

   rsort($city);    //sort in descending order
   echo "<br>";
   print_r($city);

   $num=array(11,23,9);
   sort($num);
   echo "<br>";
   print_r($num);

   arsort($num);
   echo "<br>";
   print_r($num);
?>