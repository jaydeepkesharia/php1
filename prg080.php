<?
   //READ SESSION VARIABLE
   session_start();
   echo "<br>Session variable uid := ".$_SESSION["uid"];
   echo "<br>Session variable City := ".$_SESSION["city"];
   echo "<br>User visited time := ".$_SESSION["tm"];
?>