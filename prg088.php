<?
   $flnm="Check1.txt";
   file_put_contents($flnm,"Hello How R U");
   echo "<br>Create File : ".$flnm;

   $str=file_get_contents($flnm);
   echo "<br>Contents : <br>".$str;
?>