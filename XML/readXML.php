<?
   $xmlfile=simpleXML_load_file("Check.xml");
   echo "<pre>";
   print_r($xmlfile);
   echo "</pre>";

   echo "<br>To := ".$xmlfile->To;
   echo "<br>From := ".$xmlfile->From;
   echo "<br>Content := ".$xmlfile->Content;

   $str=$xmlfile->asXML();
?>