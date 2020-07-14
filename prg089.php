<?
   copy("Check1.txt","Check2.txt");   //copy file
   rename("Check2.txt","checkcopy.txt");//rename file

   echo "<br>File copy & Rename";
   unlink("Check.txt");//delete file
?>