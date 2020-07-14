<?
  echo "<br><b>Require & Require once function </b><br>";
  require("prg002.php");
  echo "<br>";

  require_once("prg038.php");
  echo "<br>";
  require("prg002.php");

  require_once("prg038.php");    //never include file
?>