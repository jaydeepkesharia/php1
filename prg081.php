<?
   session_start();
   session_destroy();//delete session variable
   //DELETE SESSION ID
   setcookie(session_name(),"",time()-100);
   echo "<br>Session Deleted";
?>