<?
   if(!isset($_COOKIE["forecolor"]))
   {
       header("Location: prg074.php");
   }
?>
<body text=<?=$_COOKIE["forecolor"]?> bgcolor=<?=$_COOKIE["backcolor"]?>>
Welcome to RPBC
</body>