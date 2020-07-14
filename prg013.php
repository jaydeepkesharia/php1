<?
  $a=10;
  if($a>10)
  {
      echo "<br>Value is Greater than 10";
  }
  else
  {
      echo "<br>Value is not Greater than 10";
  }

  echo ($a>10) ? "<br>Value is Greater than 10" : "<br>Value is not Greater than 10";

  $b=($a>10) ? "1" : "0";
  echo "<br>B := ".$b;

  echo "<br>";
  echo (isset($a)) ? $a : "Variable not found.";

  echo "<br>";
  echo (isset($x)) ? $x : "Variable not found";
?>