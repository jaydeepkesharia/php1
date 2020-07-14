<?
   $xmlfile=simpleXML_load_file("College.xml");

   echo "Root Node Name := ".$xmlfile.getName();

   foreach($xmlfile->children() as $child)
   {
       echo "<br>".$child->getName();
       echo "<br>Attribute ".$child->attributes();
   }

?>