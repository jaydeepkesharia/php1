<?
   //add  <form action="prg055.php" method=post> to prg047.php & then run prg047.php
   include("heading.php");
   include("connect.php");

   $usr=$_POST["txtuser"];
   $pwd=$_POST["txtpassword"];

   $qsel="select * from userlist where user_nm='".$usr."'";
   $rschk=mysql_query($qsel);
   if(mysql_num_rows($rschk)>0)
   {
       echo "<br><font color=red>User Allready Exist</font>";
       include_once("footer.php");
       die();
   }
   $qins="insert into userlist (user_nm,user_pwd) values ('$usr','$pwd')";
   if(!mysql_query($qins))
   {
       echo "<font color=red><br>Incorrect Query</font>";
       die("<br>".$qins);
   }
   else
   {
       echo "<br>Successfully Add Record";
   }
   include_once("footer.php");
?>