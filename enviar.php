<?php

//VALIDACIÓN DE CMAPOS

if(empty($_REQUEST['nombre']) || empty($_REQUEST['email']) || empty($_REQUEST['asunto']) || empty($_REQUEST['mensaje']))

{

    echo "<script> window.location ='contacto.html';</script>";

}else{

        //RECEPCIÓN DE DATOS

        $nom=$_POST['nombre'];

        $email=$_POST['email'];

        $tel=$_POST['telefono'];

        $asu=$_POST['asunto'];

        $msj=$_POST['mensaje'];



        //CORREO DESTINO

        $cor="radiomisericordiajuvenil@gmail.com  ";

        

        //ENVIO DE CORREO

        $de .="MIME-Version: 1.0\n"; 

        $de .= "Content-type: text/html; charset=iso-8859-1\r\n";

        $de .= "Content-type: text/html; charset=UTF-8\r\n";

        //NOMBRE QUE APARECE EN EL CORREO || DESDE 

        //Mail del sitio

        $de .="From: Radio Misericordia Juvenil C.R. <radiomisericordiajuvenil@gmail.com  >\r\n";

        

        //ASUNTO

        $asunto="Usuario en contacto.";

        

        //MENSAJE

        $mensaje="

                    Mensaje de: <b>".$nom."</b>

                    <br><br>

                    <b>DATOS DE CONTACTO</b><br>

                    Nombre: <b>".$nom."</b><br>

                    Correo: <b>".$email."</b><br>

                    Teléfono: <b>".$tel."</b><br>

                    Asunto: <b>".$asu."</b><br><br>

                    Mensaje: <b>".$msj."</b><br><br>

                    <hr>

        <a http://radiomisericordiaj.com' target='_blank'>radiomisericordiajuvenil@gmail.com  

                ";



        //ENVIO DE CORREO

        mail($cor, $asunto, $mensaje, $de) or die('Hubo un error'); 

        

        //SCRIPT DE CONFIRMACIÓN

        echo "<script>alert(\"Su mensaje ha sido enviado,  pronto estaremos respondiendo su mensaje.\\n|| Gracias por contactarnos. Radio Misericordia Juvenil de Costa Rica ||\");</script>";

        echo "<script> window.location='formulario.php';</script>";

    }

?>