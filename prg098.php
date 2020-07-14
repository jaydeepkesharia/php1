<?
   //   IMP

   $str="Welcome to RPBC";
   echo "<br>substr($str,0,7) := ".substr($str,0,7);
   echo "<br>substr($str,8) := ".substr($str,8);
   echo "<br>substr($str,-4) := ".substr($str,-4);
   echo "<br>substr($str,-7,2) := ".substr($str,-7,2);

   echo "<br><br>strpos($str,'o') := ".strpos($str,"o");
   echo "<br>strpos($str,'o',7) := ".strpos($str,"o",7);

   echo "<br><br>strpos($str,'o') := ".strpos($str,"o");

   echo "<br><br>strstr($str,'o') := ".strstr($str,"o");
   echo "<br><br>strrchr($str,'o') := ".strrchr($str,"o");
?>