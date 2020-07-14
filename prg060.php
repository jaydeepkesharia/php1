<?
   include_once "connect.php";
   include_once "heading.php";
   if(isset($_POST["s1"]))
   {
       $qupd="update userprofile set username='".$_POST["txtusername"]."', Sex='".$_POST["optsex"]."', ";
       $qupd=$qupd."city='".$_POST["txtcity"]."', country='".$_POST["txtcountry"]."', about='".$_POST["txtabout"]."', ";
       $qupd=$qupd."birthdate='".$_POST["cmbyear"]."-".$_POST["cmbmonth"]."-".$_POST["cmbday"]."' ";
       $qupd=$qupd."where userid='".$_POST["txtuserid"]."'";
       
       //echo $qupd;
       mysql_query($qupd);
       echo "<br>Update Record";
       include_once "footer.php";

       header("Location: prg059.php?txtuser=".$_POST["txtuserid"]."&s1=Search");
       //die();
   }

   $qsel="select * from userprofile where userid='".$_GET["uid"]."'";
   $rs=mysql_query($qsel);
   $rec=mysql_fetch_array($rs);
?>

<form action=prg060.php method=post>
  <input type=hidden name=txtuserid value=<?=$_GET["uid"]?>>
  <table border=0 width=75% align=center>
    <caption><font color=red size=4>Edit User Profile</font></caption>

    <tr>
        <td><b>User Name : </b></td>
        <td> <input type=text name=txtusername value='<?=$rec["username"]?>'></td>
    </tr>

    <tr>
        <td><b>Sex : </b></td>
        <td>
            <input type=radio name=optsex value=Male <?=($rec["sex"])=="Male"?" checked":""?>>Male
            <input type=radio name=optsex value=Female <?=($rec["sex"])=="Female"?" checked":""?>>Female
        </td>
    </tr>

    <tr>
        <td><b>Birth Date</b></td>
        <td>
            <select name=cmbday>
            <?
                $bdt=$rec["birthdate"];
                $d=substr($bdt,8);
                for($i=1;$i<=31;$i++)
                {
                    if($i==$d)
                    {
                        echo "<option selected>".$i."</option>";
                    }
                    else
                    {
                        echo "<option>".$i."</option>";
                    }
                }
            ?>
            </select>

            <select name=cmbmonth>
            <?
                for($i=1;$i<=12;$i++)
                {
                    if($i==substr($bdt,5,2))
                    {
                        echo "<option selected>".$i."</option>";
                    }
                    else
                    {
                        echo "<option>".$i."</option>";
                    }
                }
            ?>
            </select>

            <select name=cmbyear>
            <?
                for($i=1950;$i<=2050;$i++)
                {
                    if($i==substr($bdt,0,4))
                    {
                        echo "<option selected>".$i."</option>";
                    }
                    else
                    {
                        echo "<option>".$i."</option>";
                    }
                }
            ?>
            </select>
        </td>
    </tr>

    <tr>     
        <td><b>City : </b></td>
        <td><input type=text name=txtcity value=<?=$rec["city"]?>></td>
    </tr>

    <tr>     
        <td><b>Country : </b></td>
        <td><input type=text name=txtcountry value=<?=$rec["country"]?>></td>
    </tr>

    <tr>     
        <td><b>About : </b></td>
        <td><textarea rows=10 cols=50 name=txtabout><?=$rec["about"]?></textarea></td>
    </tr>

    <tr>     
        <th colspan=2><input type=submit name=s1 value=Save></td>
    </tr>
    </table>
</form>
<?
   include_once("footer.php");
?>