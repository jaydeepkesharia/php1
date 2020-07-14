<?
   // PASS BY VALUE & REFERENCE Demo
   function sum($a,&$b)
   {
       $a=$a+10;
       $b=$b-10;
       $ans=$a+$b;

       return $ans;
   }
   $x=100;
   $y=200;

   echo "<br>Before Function Call = ".$x;
   echo "<br>Before Function Call = ".$y;

   echo "<br>Answer = ".sum($x,$y);

   echo "<br>After Function Call = ".$x;
   echo "<br>After Function Call = ".$y;
?>