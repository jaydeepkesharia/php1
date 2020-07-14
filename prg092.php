<?
   $a="test";
   $b="anothertest";

   echo "<br>";
   var_dump(isset($a));   //true
   echo "<br>";
   var_dump(isset($a,$b));    //true

   unset($a);  //remove memory variable

   echo "<br>";
   var_dump(isset($a));//false

   $f=NULL;
   var_dump(isset($f));//false

   $a=array('','anil','Rajkot');
   echo "<br>";
   var_dump($a);
?>