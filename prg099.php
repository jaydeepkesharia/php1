<?
   //IMP FOR THEORY
   $str="Welcome To RPBC";
   echo "<br>str_replace('o','O',$str) := ".str_replace('o','O',$str);

   $sr=array('o','e','RPBC');
   $rr=array('O','E',"RAJKOT");
   echo "<br>str_replace($sr,$rr,$str) := ".str_replace($sr,$rr,$str);
   echo "<br>str_replace($sr,$rr,$str,cnt) := ".str_replace($sr,$rr,$str,$cnt);
   echo "<br>Counter := ".$cnt;
   echo "<br>str_replace('o','O',$str) := ".str_replace('o','O',$str);
   echo "<br>Counter = ".$cnt;

?>