<?php
if (!isset($_GET["id"])){
  exit("no hay id");
}
$mysql = new SQLite3('agenda.db');
$id=$_GET["id"];
$DELETE = "DELETE  from personas WHERE id= '$id'";
$mysql->query($DELETE);
header("location: index.php")

?>