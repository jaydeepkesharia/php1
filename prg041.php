<?
  echo "<br>Continue Statement : ";
  for($i=1;$i<=5;$i++)
  {
      if($i==3)
      {
          continue;
      }
      echo "<br>Continue :".$i;
  }
  echo "<br><br>Break Statement : ";
  for($i=1;$i<=5;$i++)
  {
      if($i==3)
      {
          break;
      }
      echo "<br>Break : ".$i;
  }
  echo "<br>Break Statement executed ";
  die("<br><font color=red>Die function Executed </font>");
  //exit();
  echo "Hi";
  echo "<br>Hello";
  echo "<br>How are you";
?>