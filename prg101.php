<?
   $str1='Welcome to RPBC \n Rajkot';
   $str2="Welcome to RPBC \n Rajkot";

   echo "<br>Single Quote := ".$str1;
   echo "<br>Double Quote := ".$str2;

   //here doc
   $str = <<<AAA
   Welcome to <font color=red size=4>RPBC</font>
   <br>7 Manhar Ploat
   <br><b>Rajkot</b>
AAA;
//here doc Always end with 0'th line column

   echo "<br>Here Doc<br>".$str;
?>