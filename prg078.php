<?
   //set session ID and NAME
   session_id("123");
   session_name("rpbc");
   session_start();

   echo "<br> Session ID : ".session_id();
   echo "<br> Session ID Length : ".strlen(session_id());
   echo "<br> Session Name : ".session_name();

   echo "<pre>";
   print_r($_COOKIE);
   echo "</pre>";
?>