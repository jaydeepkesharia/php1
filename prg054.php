<?
   include_once "heading.php";
?>

<form action="prg054.php" method=get>
      Enter User Name :
      <input type=text name=txtuser value=<?= isset($_GET["txtuser"]) ? $_GET["txtuser"] : "" ?>>
      <input type=submit name=sub1 value="Search">
</form>

<?
   if(isset($_GET["s1"]))
   {
       include_once "connect.php";
       $qsel="select * from userlist where user_name like '".$_GET["txtuser"]."%' order by user_name";
       $rs=mysql_query($qsel);

       echo "<table border=1 align=center>";
       echo "<caption><font color=red size=4>Search User List</font></caption>";
       echo "<tr><th>User Name</th><th>Password</th></tr>";

       while($rec=mysql_fetch_assoc($rs))
       {
           echo "<tr>";
           echo "<td>".$rec["user_name"]."</td>";
           echo "<td>".$rec["password"]."</td>";
           echo "</tr>";
       }
       echo "</table>";
   }
   include "footing.php";
?>