<?
   $str='     ..rpbc...   ';

   echo "Original String := ".$str;
   echo "<br>ltrim('$str') := ".ltrim($str);
   echo "<br>rtrim('$str') := ".rtrim($str);
   echo "<br>trim('$str') := ".trim($str);

   $str=trim($str);
   echo "<br>ltrim('$str','.') := ".ltrim($str,".");
   echo "<br>rtrim('$str','.') := ".rtrim($str,".");
   echo "<br>trim('$str','.') := ".trim($str,".");

   $s1="Hello";
   $s2="hello";
   echo "<br>strcmp('$s1','$s2') := ".strcmp("$s1","$s2");
   echo "<br>strcmp('$s2','$s1') := ".strcmp("$s2","$s1");
   echo "<br>strcasecmp('$s1','$s2') ;= ".strcasecmp("$s1","$s2");
?>