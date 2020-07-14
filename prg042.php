<?
  echo "<br><b>Include & Include once function </b><br>";
  include("prg002.php");
  echo "<br>";

  include_once("prg038.php");
  echo "<br>";
  include("prg002.php");

  include_once("prg038.php");    //never include file
?>