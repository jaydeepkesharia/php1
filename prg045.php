<?
   //mysql_connect("server","bca06_24","71288") or die("<br>MySQL connection problem");
   mysql_connect("localhost","","") or die("<br>MySQL connection problem");
   echo "<br>Connection Established";

   mysql_select_db("bca06_24") or dir("<br>Database connection problem");
   echo "<br>Database successfully open";
?>