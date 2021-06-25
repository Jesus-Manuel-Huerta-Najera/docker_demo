<?php
    $mysql = new SQLite3('agenda.db');
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $select = "INSERT INTO personas( nombre, email, telefono) VALUES ('$nombre','$email','$telefono');";
    $mysql->query($select);
    //$resultado -> bind_param("ssi",$nombre,$email,$telefono);
   // $resultado ->execute();
    header("location: index.php");
?>