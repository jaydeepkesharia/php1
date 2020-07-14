<?
  for($i=1;$i<=5;$i++)
  {
      echo "<br>".$i;
  }
  for($i=1;$i<=5;$i++):
      echo "<br>".$i;
  endfor;

  $a=123;
  if($a>100)
  {
      echo "<br>A = ".$a;
  }
  if($a>100):
      echo "<br>A = ".$a;
  endif;
?>