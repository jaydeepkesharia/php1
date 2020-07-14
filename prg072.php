<?
   setcookie("name","RPBC");   //temparary cookies.
   setcookie("location","INDIA");
   //cookie store for one hour
   setcookie("city","Rajkot",time()+3600);
   setcookie("color","Red",time()+3600);
   setcookie("forecolor","black",time()+1200,"http://localhost/php/","www.rpbc.org",0);
   echo "<br>Cookie Created";
?>