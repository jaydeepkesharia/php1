<?
   // UDF Demo
  function sum1()
  {
      $a=10;
      $b=20;
      $ans=$a+$b;

      echo "<br>Answer = ".$ans;
  }
  function sum2($a,$b)
  {
      $ans=$a+$b;
      echo "<br>Answer = ".$ans;
  }
  function sum3($a,$b)
  {
      $ans=$a+$b;
      return $ans;
  }
  sum1();
  sum2(10,20);
  $res=sum3(100,200);
  echo "<br>Answer = ".$res;
  echo "<br>Answer =".sum3(111,222);
?>