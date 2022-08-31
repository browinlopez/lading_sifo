<?php

    $destinatario = "browin49@gmail.com";
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $header = "Enviado desde sifosoft";
    $mensajeCompleto = $message . "\nAtentamente :" .$name;

   mail($destinatario, $header, $mensajeCompleto);
   echo"<script>alert('Correo enviado exitosamente')</script>";
   echo"<script>setTimeout(\"location.href='contacto.html'\",1000)</script>";

?>