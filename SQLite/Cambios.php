<?php
    $mysql = new SQLite3('agenda.db');
    $id= $_POST["id"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $select = "UPDATE personas SET nombre = '$nombre', email='$email', telefono='$telefono' WHERE id = '$id';" ;
    $mysql->query($select);
    //$resultado -> bind_param("ssii",$nombre,$email,$telefono,$id);
    //$resultado ->execute();
    header("location: index.php");
?>