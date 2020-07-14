<?
   // Variable Function
   function displayMsg1($msg1,$msg2="India")
   {
       echo "<br>".$msg1." ".$msg2;
   }
   function displayMsg2($msg1)
   {
       echo "<br>Welcome To ".$msg1;
   }
   $fun1="displayMsg1";
   $fun2="displayMsg2";
   $fun3="strtolower";

   $fun1("Hello","Rajkot");
   $fun2("RPBC");
   echo "<br>".$fun3("HELLO HOW ARE YOU");
?>