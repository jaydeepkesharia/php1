<?
   echo "<pre>";
   print_r($_SERVER);
   echo "</pre>";

   echo "<br>Server Software := ".$_SERVER["SERVER_SOFTWARE"];
   echo "<br>Running Port no. := ".$_SERVER["SERVER_PORT"];
   echo "<br>Cookie := ".$_SERVER["HTTP_COOKIE"];
?>