<?
   $xmlfile=simpleXML_load_file("College.xml");
   //echo "Root Node Name := ".$xmlfile.getName();

   $xmlfile->addChild("MCA","60");
   $xmlfile->MCA->addAttribute("Type","Computer");

   echo "Value of MCA = ".$xmlfile->MCA;
   echo "Attribute of MCA = ".$xmlfile->MCA->attributes();
?>