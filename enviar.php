<?php



// Datos del email
$para = 'rayo862@hotmail.com';
$titulo = 'S&S Solicitud de presupuesto';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if (isset($_POST['submit'])) {
    // Datos del email
    $to         = 'rayo862@hotmail.com';
    $subject    = 'S&S Solicitud de presupuesto';
    // Declaración de variables del formulario
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $message    = $_POST['message'];
    //$header = 'From: ' . $email;


    $body = "Nombre: $name\n Email: $email\n Mensaje:\n $mensaje";

    if (mail($to, $subject, $body)) {

        header("Location:index.html");
        echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    } else {
        header("Location:index.html");
        echo "<script language='javascript'>
        alert('Fallo al enviar el correo.');
        </script>";
    }
}

?> 
