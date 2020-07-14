<?
   if(isset($_POST["s1"]))
   {
       setcookie("forecolor",$_POST["cmbforecolor"],time()+3600);
       setcookie("backcolor",$_POST["cmbbackcolor"],time()+3600);
       header("Location: prg075.php");
   }
?>
<form action=prg074.php method=post>
      Select Fore Color:
      <select name=cmbforecolor>
              <option>Red</option>
              <option>Green</option>
              <option>Blue</option>
      </select>

      <br>Select background Color :
      <select name=cmbbackcolor>
              <option>Red</option>
              <option>Green</option>
              <option>Blue</option>
      </select>
      <br>
      <input type=submit name=s1 value="Set Color">
</form>