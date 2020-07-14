<?
  function test()
  {
      Static $a=0;
      $a++;
      echo "<br>A = ".$a;
  }
  test();
  test();
  test();
?>