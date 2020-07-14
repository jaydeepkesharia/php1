<form action=logincheck.php method=post>

<?
   if(isset($_GET["msg"]))
   {
?>

   <caption><font color=red>Incorrect User Name or Password.</font></caption>
<?
   }
?>

</form>