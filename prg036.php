<?
  function sum()
  {
      echo "<br>Total arguments = ".func_num_args();
      for($i=0;$i<func_num_args();$i++)
      {
          echo "<br>".func_get_arg($i);
      }
      $arr=func_get_args();

  }
  sum(12,23,32);
  sum(11,22,33,64,76,35,34);
?>