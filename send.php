<?php


    if (isset($_POST['submit'])) {
        # code...
        if (isset($_POST['seguridad'])) {
            # code...
            $numero = $_POST['numero'];
            $mensaje = $_POST['mensaje'];

            $Apiwsp = 'https://api.whatsapp.com/send?phone=+51'.$numero.'&text='.$mensaje;


            header('Location: '.$Apiwsp);
        }
        else {
            
            header('Location: http://phpclases.test/wp-web/');
        }

    }