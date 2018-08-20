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

        $cor="kenth1977@gmail.com";

        

        //ENVIO DE CORREO

        $de .="MIME-Version: 1.0\n"; 

        $de .= "Content-type: text/html; charset=iso-8859-1\r\n";

        $de .= "Content-type: text/html; charset=UTF-8\r\n";

        //NOMBRE QUE APARECE EN EL CORREO || DESDE 

        //Mail del sitio

        $de .="From: Hotel El Sueño Dorado & Hotspring <kenth1977@gmail.com>\r\n";

        

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

        <a http://cabinaslossantillos.com' target='_blank'>info@hotelsuenodorado.com

                ";



        //ENVIO DE CORREO

        mail($cor, $asunto, $mensaje, $de) or die('Hubo un error'); 

        

        //SCRIPT DE CONFIRMACIÓN

        echo "<script>alert(\"Su mensaje ha sido enviado, gracias por contactarme, pronto estare respondiendo su mensaje.\\n|| Hotel El Sueño Dorado & Hotspring ||\");</script>";

        echo "<script> window.location='formulario.php';</script>";

    }

?>