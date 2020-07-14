<?
   //CREATE SESSION VARIABLE
   session_start();
   $_SESSION["uid"]="RPBC";
   $_SESSION["city"]="Rajkot";
   $_SESSION["tm"]=Date("H : i : s");
   echo "Session variable created.";
?>