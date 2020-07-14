<?
   include("connect.php");
   include("heading.php");
   $qsel="select * from userlist";
   $rs=mysql_query($qsel);

   echo "<table border=1 align=center>";
   echo "<caption><font color=red size=4>User List</font></caption>";
   echo "<tr><th>User Name</th><th>Password</th></tr>";

   while($res=mysql_fetch_assoc($rs))
   {
       echo "<tr>";
       echo "<td>".$res["user_nm"]."</td>";
       echo "<td>".$res["user_pwd"]."</td>";
       echo "</tr>";
   }
   echo "</table>";
   include "footer.php";
?>