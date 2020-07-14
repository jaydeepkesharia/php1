<?
  if(isset($_COOKIE["visitcount"]))
  {
      $cnt=$_COOKIE["visitcount"]+1;
  }
  else
  {
      $cnt=1;
  }
  setcookie("visitcount",$cnt,time()+3600*24*31);
  echo "<br>Total Visit : ".$cnt;
?>