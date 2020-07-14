<?
   $f="Check1.txt";
   if(is_readable($f))
   {
       echo "<br>File is readale";
   }
   if(is_writable($f))
   {
       echo "<br>File is writable";
   }
   echo "<br>File Access Time := ".date("d-M-Y H:i:s",fileatime($f));
   echo "<br>File Modify Time := ".date("d-M-Y H:i:s",filemtime($f));
   
   $arr=pathinfo($f);
   echo "<pre>";
   print_r($arr);
   echo "</pre>";
?>