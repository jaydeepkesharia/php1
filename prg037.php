<?
  function sum()
  {
      $ans=0;
      for($i=0;$i<func_num_args();$i++)
      {
          $ans=$ans+func_get_arg($i);
      }
      return $ans;
  }
  echo "<br>Sum(11,22,33) = ".sum(11,22,33);
  echo "<br>Sum(11,22,33,44,55) = ".sum(11,22,33,44,55);

  //find maximum value
  function maxval()
  {
      $max=0;
      for($i=0;$i<func_num_args();$i++)
      {
          if($max<func_get_arg($i))
          {
              $max=func_get_arg($i);
          }
      }
      return $max;
  }
  echo "<br>MaxValue(11,22,33) = ".maxval(11,22,33);
  echo "<br>MaxValue(11,22,33,44,55) = ".maxval(11,22,33,44,55);

?>