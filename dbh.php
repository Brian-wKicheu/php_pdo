<?php
$dbconn= new mysqli("localhost", "root", "", "ps");
if(!$dbconn){
  die("no database connection".mysqli_connect_error());
}else{
  echo "connected to the database";
}
?>
