<?
   include_once "connect.php";
   if(isset($_GET["uid"]))
   {
       $user=$_GET["uid"];
       $qdel="delete from userlist where user_nm='$user'";
       //echo $qdel;
       mysql_query($qdel);
   }
   //Display Records In Table Format

   include_once "heading.php";
   $qsel="select * from userlist order by user_nm";
   $rs=mysql_query($qsel);
   echo "<table border=1 align=center>";
   echo "<caption><font color=red size=4>All User List</font></caption>";
   echo "<tr><th>User Name</th><th>Password</th><th colspan=2>Operations</th></tr>";

   while($rec=mysql_fetch_assoc($rs))
   {
       echo "<tr>";
       echo "<td>".$rec["user_nm"]."</td>";
       echo "<td>".$rec["user_pwd"]."</td>";
       echo "<td><a href=prg057.php?uid=".$rec["user_nm"].">Delete</a></td>";
       echo "<td><a href=prg058.php?uid=".$rec["user_nm"].">Change Password</a></td>";
       echo "</tr>";
   }
   echo "</table>";
   include_once("footer.php");
?>