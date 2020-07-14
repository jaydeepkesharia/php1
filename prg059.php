<?
   include_once("heading.php");
?>

<form action=prg059.php method=get>
  Enter Userid :<input type=text name=txtuser value=<?= (isset($_GET["txtuser"])) ? $_GET["txtuser"] : "" ?>>
  <input type=submit name=s1 value="Search">
</form>

<?
  if(isset($_GET["s1"]))
  {
      include_once("connect.php");
      $qsel="select * from userprofile where userid='".$_GET["txtuser"]."'";

      //echo $qsel;
      $rs=mysql_query($qsel);

      echo "<table border=0 align=center width=50%>";
      echo "<caption><font color=red size=4>User Profile Information</font></caption>";

      $rec=mysql_fetch_array($rs);

      echo "<tr>";
      echo "<th width=30% align=left>User Name : </th>";
      echo "<td>".$rec["username"]."</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<th align=left>Sex : </th>";
      echo "<td>".$rec["sex"]."</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<th align=left>City : </th>";
      echo "<td>".$rec["city"]."</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<th align=left>Country : </th>";
      echo "<td>".$rec["country"]."</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<th align=left>Birth Date : </th>";
      //echo "<td>".$rec["birthdate"]."</td>";

      $bdt=$rec["birthdate"];
      $len=strlen($bdt);
      echo "<td>".substr($bdt,$len-2)."-".substr($bdt,$len-5,2)."-".substr($bdt,0,4)."</td>";
      echo "</tr>";

      echo "<tr>";
      echo "<th align=left>About : </th>";
      echo "<td>".$rec["about"]."</td>";
      echo "</tr>";
      echo "</table>";

      echo "<br><font align=right><a href=prg060.php?uid=".$_GET["txtuser"].">Edit Profile</a></font>";
  }
   include_once("footer.php");
?>