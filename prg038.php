<?
  $a=10;
  $b=20;
  $c=30;

  function test()
  {
      $a=100;
      global $b;
      echo "<br>In function A = ".$a;
      echo "<br>In function B = ".$b;
      $b=200;
      echo "<br>In function C = ".$GLOBALS["c"];
  }
  test();
  echo "<br>A = ".$a;
  echo "<br>B = ".$b;
  echo "<br>C = ".$c;
?>