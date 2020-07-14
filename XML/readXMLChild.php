<?
   //MIMP

   $xmlfile=simpleXML_load_file("Check.xml");
   echo "Root Node Name := ".$xmlfile.getName();

   foreach($xmlfile->children() as $child)//message
   {
       echo "<br>".$child->getName();    //To
       echo " = ".$child;                 //Kelvin
   }
?>